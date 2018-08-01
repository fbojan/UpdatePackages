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
	'NationalNumberPattern' => '(?:1230|[2-57-9]\\d|6\\d{1,3})\\d{7}',
	'PossibleLength' => [
	  0 => 9,
	  1 => 10,
	  2 => 11,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'fixedLine' => [
	'NationalNumberPattern' => '2(?:1962\\d{4}|2\\d{7}|32[0-467]\\d{5})|(?:3[2-5]\\d|[47][1-35]\\d|5[1-3578]\\d|6[13-57]\\d|8(?:0[1-9]|[1-9]\\d)|9[3-9]\\d)\\d{6}',
	'ExampleNumber' => '221234567',
	'PossibleLength' => [
	  0 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'mobile' => [
	'NationalNumberPattern' => '2(?:1962\\d{4}|2\\d{7}|32[0-467]\\d{5})|(?:3[2-5]\\d|[47][1-35]\\d|5[1-3578]\\d|6[13-57]\\d|8(?:0[1-9]|[1-9]\\d)|9[3-9]\\d)\\d{6}',
	'ExampleNumber' => '961234567',
	'PossibleLength' => [
	  0 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'NationalNumberPattern' => '800\\d{6}|1230\\d{7}',
	'ExampleNumber' => '800123456',
	'PossibleLength' => [
	  0 => 9,
	  1 => 11,
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
  'sharedCost' => [
	'NationalNumberPattern' => '600\\d{7,8}',
	'ExampleNumber' => '6001234567',
	'PossibleLength' => [
	  0 => 10,
	  1 => 11,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'personalNumber' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voip' => [
	'NationalNumberPattern' => '44\\d{7}',
	'ExampleNumber' => '441234567',
	'PossibleLength' => [
	  0 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'pager' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'uan' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voicemail' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'noInternationalDialling' => [
	'NationalNumberPattern' => '600\\d{7,8}',
	'PossibleLength' => [
	  0 => 10,
	  1 => 11,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'id' => 'CL',
  'countryCode' => 56,
  'internationalPrefix' => '(?:0|1(?:1[0-69]|2[0-57]|5[13-58]|69|7[0167]|8[018]))0',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => [
	0 => [
	  'pattern' => '(\\d)(\\d{4})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '2[23]',
	  ],
	  'nationalPrefixFormattingRule' => '($1)',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	1 => [
	  'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '[357]|4[1-35]|6[13-57]|8(?:0[1-9]|[1-9])',
	  ],
	  'nationalPrefixFormattingRule' => '($1)',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	2 => [
	  'pattern' => '(9)(\\d{4})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '9',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	3 => [
	  'pattern' => '(44)(\\d{3})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '44',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	4 => [
	  'pattern' => '([68]00)(\\d{3})(\\d{3,4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '[68]00',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	5 => [
	  'pattern' => '(600)(\\d{3})(\\d{2})(\\d{3})',
	  'format' => '$1 $2 $3 $4',
	  'leadingDigitsPatterns' => [
		0 => '600',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	6 => [
	  'pattern' => '(1230)(\\d{3})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '123',
		1 => '1230',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	7 => [
	  'pattern' => '(\\d{5})(\\d{4})',
	  'format' => '$1 $2',
	  'leadingDigitsPatterns' => [
		0 => '219',
	  ],
	  'nationalPrefixFormattingRule' => '($1)',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	8 => [
	  'pattern' => '(\\d{4,5})',
	  'format' => '$1',
	  'leadingDigitsPatterns' => [
		0 => '[1-9]',
	  ],
	  'nationalPrefixFormattingRule' => '$1',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
  ],
  'intlNumberFormat' => [
	0 => [
	  'pattern' => '(\\d)(\\d{4})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '2[23]',
	  ],
	  'nationalPrefixFormattingRule' => '($1)',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	1 => [
	  'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '[357]|4[1-35]|6[13-57]|8(?:0[1-9]|[1-9])',
	  ],
	  'nationalPrefixFormattingRule' => '($1)',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	2 => [
	  'pattern' => '(9)(\\d{4})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '9',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	3 => [
	  'pattern' => '(44)(\\d{3})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '44',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	4 => [
	  'pattern' => '([68]00)(\\d{3})(\\d{3,4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '[68]00',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	5 => [
	  'pattern' => '(600)(\\d{3})(\\d{2})(\\d{3})',
	  'format' => '$1 $2 $3 $4',
	  'leadingDigitsPatterns' => [
		0 => '600',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	6 => [
	  'pattern' => '(1230)(\\d{3})(\\d{4})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '123',
		1 => '1230',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	7 => [
	  'pattern' => '(\\d{5})(\\d{4})',
	  'format' => '$1 $2',
	  'leadingDigitsPatterns' => [
		0 => '219',
	  ],
	  'nationalPrefixFormattingRule' => '($1)',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
];