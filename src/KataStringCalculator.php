<?php

namespace Deg540\PHPTestingBoilerplate;

class KataStringCalculator
{
    public function add(String $number): String
    {
        if($number == "1")
            return "1";
        return "0";
    }
}