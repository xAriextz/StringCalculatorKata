<?php

namespace Deg540\PHPTestingBoilerplate;

class KataStringCalculator
{
    public function add(String $inputNumbers): String
    {
        if($inputNumbers == "")
            return "0";
        else if(!is_numeric(substr($inputNumbers,-1)))
            return "Number expected but EOF found.";
        else
        {
            $delimeter = "";
            if($inputNumbers[0]=="/" and $inputNumbers[1]=="/")
            {
                $delimeter = strtok(substr($inputNumbers,2), "\n");
                $inputNumbers = substr($inputNumbers, strlen($delimeter)+2);
            }
            else
                $delimeter = "\n";

            $inputNumbers = str_replace($delimeter,"n",$inputNumbers);
            $position = 0;
            $splittedInputNumbers = str_split($inputNumbers);
            foreach ($splittedInputNumbers as $char)
            {
                if(!is_numeric($char))
                {
                    if(!is_numeric($inputNumbers[$position-1]))
                        return "Number expected but $char found at position $position.";
                }
                $position++;
            }

            $inputNumbers = str_replace("n",",",$inputNumbers);
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