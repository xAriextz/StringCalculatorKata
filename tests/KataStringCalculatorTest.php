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

}
