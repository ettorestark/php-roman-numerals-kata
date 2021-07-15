<?php

namespace Inc;

class RomanNumerals
{
	public function fromNumber(int $number)
	{
		$result = "";

		while ($number > 0) {
			$result .= "I"	;
			$number--;
		}

		return $result;
	}
}
