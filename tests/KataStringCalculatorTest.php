<?php
declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;
use Deg540\PHPTestingBoilerplate\KataStringCalculator;
use PHPUnit\Framework\TestCase;

class KataStringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function when_given_empty_string_return_0(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("");

        $this->assertEquals("0", $result);
    }
    /**
     * @test
     */
    public function when_given_1_return_1(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("1");

        $this->assertEquals("1", $result);
    }
    /**
     * @test
     */
    public function when_given_1comma2_return_3(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("1,2");

        $this->assertEquals("3", $result);
    }
    /**
     * @test
     */
    public function should_add_many_numbers_separated_by_comma(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("1.1,2,3.3");

        $this->assertEquals("6.4", $result);
    }
    /**
     * @test
     */
    public function should_add_many_numbers_separated_by_comma_or_newlines(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("1\n2,3");

        $this->assertEquals("6", $result);
    }
}
