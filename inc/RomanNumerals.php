<?php

namespace Inc;

class RomanNumerals
{
	private $romanNumeralDictionary	= [
		'M' => 1000,
		'CM' => 900,
		'D' => 500,
		'CD' => 400,
		'C' => 100,
		'XC' => 90,
		'L' => 50,
		'XL' => 40,
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1
	];

	public function fromNumber(int $decimalNumber)
	{
		$romanNumber = '';

		foreach ($this->romanNumeralDictionary as $roman => $value) {
			$matches = intval($decimalNumber / $value);

			$romanNumber .= str_repeat($roman, $matches);

			$decimalNumber =  $decimalNumber % $value;

			if ($decimalNumber == 0) break;
		}

		return $romanNumber;
	}
}
