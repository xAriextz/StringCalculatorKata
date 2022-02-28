<?php

namespace Deg540\PHPTestingBoilerplate;

class KataStringCalculator
{
    public function add(String $inputNumbers): String
    {
        if($inputNumbers == "")
            return "0";
        else
        {
            $inputNumbers = str_replace("\n",",",$inputNumbers);
            $separatedNumbers = explode(",",$inputNumbers);
            $result = 0;
            foreach ($separatedNumbers as $numberToAdd)
            {
                $result += $numberToAdd;
            }
            return $result;
        }
    }
}