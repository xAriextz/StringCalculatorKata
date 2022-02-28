<?php

namespace Deg540\PHPTestingBoilerplate;

class KataStringCalculator
{
    public function add(String $number): String
    {
        $separated_numbers = explode(",",$number);
        if($number == "")
            return "0";
        else if(sizeof($separated_numbers) == 1)
            return $number;
        else
        {
            return $separated_numbers[0]+$separated_numbers[1];
        }
    }
}