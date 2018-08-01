<?php

namespace Sabre\DAV\PartialUpdate;

use Sabre\DAV;
use Sabre\HTTP;

require_once 'Sabre/DAV/PartialUpdate/FileMock.php';

class PluginTest extends \Sabre\DAVServerTest
{
	protected $node;
	protected $plugin;

	public function setUp()
	{
		$this->node = new FileMock();
		$this->tree[] = $this->node;

		parent::setUp();

		$this->plugin = new Plugin();
		$this->server->addPlugin($this->plugin);
	}

	public function testInit()
	{
		$this->assertSame('partialupdate', $this->plugin->getPluginName());
		$this->assertSame(['sabredav-partialupdate'], $this->plugin->getFeatures());
		$this->assertSame([
			'PATCH'
		], $this->plugin->getHTTPMethods('partial'));
		$this->assertSame([
		], $this->plugin->getHTTPMethods(''));
	}

	public function testPatchNoRange()
	{
		$this->node->put('aaaaaaaa');
		$request = HTTP\Sapi::createFromServerArray([
			'REQUEST_METHOD' => 'PATCH',
			'REQUEST_URI'    => '/partial',
		]);
		$response = $this->request($request);

		$this->assertSame(400, $response->status, 'Full response body:' . $response->body);
	}

	public function testPatchNotSupported()
	{
		$this->node->put('aaaaaaaa');
		$request = new HTTP\Request('PATCH', '/', ['X-Update-Range' => '3-4']);
		$request->setBody(
			'bbb'
		);
		$response = $this->request($request);

		$this->assertSame(405, $response->status, 'Full response body:' . $response->body);
	}

	public function testPatchNoContentType()
	{
		$this->node->put('aaaaaaaa');
		$request = new HTTP\Request('PATCH', '/partial', ['X-Update-Range' => 'bytes=3-4']);
		$request->setBody(
			'bbb'
		);
		$response = $this->request($request);

		$this->assertSame(415, $response->status, 'Full response body:' . $response->body);
	}

	public function testPatchBadRange()
	{
		$this->node->put('aaaaaaaa');
		$request = new HTTP\Request('PATCH', '/partial', ['X-Update-Range' => 'bytes=3-4', 'Content-Type' => 'application/x-sabredav-partialupdate', 'Content-Length' => '3']);
		$request->setBody(
			'bbb'
		);
		$response = $this->request($request);

		$this->assertSame(416, $response->status, 'Full response body:' . $response->body);
	}

	public function testPatchNoLength()
	{
		$this->node->put('aaaaaaaa');
		$request = new HTTP\Request('PATCH', '/partial', ['X-Update-Range' => 'bytes=3-5', 'Content-Type' => 'application/x-sabredav-partialupdate']);
		$request->setBody(
			'bbb'
		);
		$response = $this->request($request);

		$this->assertSame(411, $response->status, 'Full response body:' . $response->body);
	}

	public function testPatchSuccess()
	{
		$this->node->put('aaaaaaaa');
		$request = new HTTP\Request('PATCH', '/partial', ['X-Update-Range' => 'bytes=3-5', 'Content-Type' => 'application/x-sabredav-partialupdate', 'Content-Length' => 3]);
		$request->setBody(
			'bbb'
		);
		$response = $this->request($request);

		$this->assertSame(204, $response->status, 'Full response body:' . $response->body);
		$this->assertSame('aaabbbaa', $this->node->get());
	}

	public function testPatchNoEndRange()
	{
		$this->node->put('aaaaa');
		$request = new HTTP\Request('PATCH', '/partial', ['X-Update-Range' => 'bytes=3-', 'Content-Type' => 'application/x-sabredav-partialupdate', 'Content-Length' => '3']);
		$request->setBody(
			'bbb'
		);

		$response = $this->request($request);

		$this->assertSame(204, $response->getStatus(), 'Full response body:' . $response->getBodyAsString());
		$this->assertSame('aaabbb', $this->node->get());
	}
}