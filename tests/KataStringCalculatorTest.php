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
    /**
     * @test
     */
    public function should_give_error_with_two_consecutive_separators(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("175.2,\n35");

        $this->assertEquals("Number expected but 'n' found at position 6.", $result);
    }
    /**
     * @test
     */
    public function should_give_error_with_separator_as_input_end(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("1,3,");

        $this->assertEquals("Number expected but EOF found.", $result);
    }
    /**
     * @test
     */
    public function should_add_many_numbers_separated_by_customs_separators(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("//xep\n1xep2");

        $this->assertEquals("3", $result);
    }
    /**
     * @test
     */
    public function should_give_error_using_other_separators_than_customs_separators(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("//|\n1|2,3");

        $this->assertEquals("'|' expected but ',' found at position 3.", $result);
    }
    /**
     * @test
     */
    public function calling_with_negative_numbers_should_return_list_of_negative_numbers(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("2, -4, -5");

        $this->assertEquals("Negative not allowed : -4, -5", $result);
    }
    /**
     * @test
     */
    /*
    public function when_having_multiple_errors_return_all_error_messages(){
        $kataStringCalculator = new KataStringCalculator();

        $result = $kataStringCalculator->add("-1,,2,");

        $this->assertEquals("Negative not allowed : -1\nNumber expected but ',' found at position3.\nNumber expected but EOF found.", $result);
    }
    */
}
