<?php

namespace mpstyle\rastris;

class RandomCharsGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RandomCharsGenerator
     */
    private $generator;

    public function test_get()
    {
        $len = 10;
        $str = $this->generator->get($len);
        $this->assertEquals($len, strlen($str));
        preg_match('/^[' . preg_quote(RandomCharsGenerator::CHARACTERS, '/') . ']+$/', $str, $matches);
        $this->assertCount(1, $matches);
    }

    public function test_getAlphas()
    {
        $len = 10;
        $str = $this->generator->getAlphas($len);
        $this->assertEquals($len, strlen($str));
        preg_match('/^[' . preg_quote(RandomCharsGenerator::ALPHA, '/') . ']+$/', $str, $matches);
        $this->assertCount(1, $matches);
    }

    public function test_getUpperAlphas()
    {
        $len = 10;
        $str = $this->generator->getUpperAlphas($len);
        $this->assertEquals($len, strlen($str));
        preg_match('/^[' . preg_quote(RandomCharsGenerator::UPPER_ALPHA, '/') . ']+$/', $str, $matches);
        $this->assertCount(1, $matches);
    }

    public function test_getLowerAlphas()
    {
        $len = 10;
        $str = $this->generator->getLowerAlphas($len);
        $this->assertEquals($len, strlen($str));
        preg_match('/^[' . preg_quote(RandomCharsGenerator::LOWER_ALPHA, '/') . ']+$/', $str, $matches);
        $this->assertCount(1, $matches);
    }

    public function test_getDigits()
    {
        $len = 10;
        $str = $this->generator->getDigits($len);
        $this->assertEquals($len, strlen($str));
        preg_match('/^[' . preg_quote(RandomCharsGenerator::DIGITS, '/') . ']+$/', $str, $matches);
        $this->assertCount(1, $matches);
    }

    protected function setUp()
    {
        parent::setUp();

        $this->generator = new RandomCharsGenerator();
    }
}
