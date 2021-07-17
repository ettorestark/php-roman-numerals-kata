<?php

use PHPUnit\Framework\TestCase;
use Inc\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
	private $romanNumerals;

	protected function setUp(): void
	{
		$this->romanNumerals = new RomanNumerals();
	}

	public function testOneReturnsI()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(1);
		$this->assertEquals('I', $romanNumeral);
	}

	public function testTwoReturnsII()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(2);
		$this->assertEquals('II', $romanNumeral);
	}

	public function testThreReturnsIII()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(3);
		$this->assertEquals('III', $romanNumeral);
	}

	public function testFourReturnsIV()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(4);
		$this->assertEquals('IV', $romanNumeral);
	}

	public function testFor2648ReturnsMMDCXLVIII()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(2648);
		$this->assertEquals('MMDCXLVIII', $romanNumeral);
	}

}
