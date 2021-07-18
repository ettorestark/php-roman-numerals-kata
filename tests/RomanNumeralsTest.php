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

	public function testOneShouldReturnsI()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(1);
		$this->assertEquals('I', $romanNumeral);
	}

	public function testTwoShouldReturnsII()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(2);
		$this->assertEquals('II', $romanNumeral);
	}

	public function testThreeShouldReturnsThree()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(3);
		$this->assertEquals('III', $romanNumeral);
	}

	public function testFourShouldReturnsIV()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(4);
		$this->assertEquals('IV', $romanNumeral);
	}

	public function test2648ShouldReturnsMMDCXLVIII()
	{
		$romanNumeral = $this->romanNumerals->fromNumber(2648);
		$this->assertEquals('MMDCXLVIII', $romanNumeral);
	}

}
