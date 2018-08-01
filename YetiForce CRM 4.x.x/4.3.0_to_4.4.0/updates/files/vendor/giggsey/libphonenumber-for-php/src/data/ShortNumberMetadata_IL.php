<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */

return [
  'generalDesc' => [
	'NationalNumberPattern' => '1\\d{2,4}',
	'PossibleLength' => [
	  0 => 3,
	  1 => 4,
	  2 => 5,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'premiumRate' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'emergency' => [
	'NationalNumberPattern' => '1(?:0[012]|12)',
	'ExampleNumber' => '112',
	'PossibleLength' => [
	  0 => 3,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'shortCode' => [
	'NationalNumberPattern' => '1(?:0(?:[012]|400)|1(?:[013-9]\\d|2)|[2-9]\\d{2})',
	'ExampleNumber' => '1455',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'standardRate' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'carrierSpecific' => [
	'NationalNumberPattern' => '10400',
	'ExampleNumber' => '10400',
	'PossibleLength' => [
	  0 => 5,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'smsServices' => [
	'NationalNumberPattern' => '10400',
	'ExampleNumber' => '10400',
	'PossibleLength' => [
	  0 => 5,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'id' => 'IL',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => [
  ],
  'intlNumberFormat' => [
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
];