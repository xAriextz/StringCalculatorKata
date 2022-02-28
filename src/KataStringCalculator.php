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
            $inputNumbers = str_replace("\n","n",$inputNumbers);
            $position = 0;
            $splittedInputNumbers = str_split($inputNumbers);
            foreach ($splittedInputNumbers as $char)
            {
                if(!is_numeric($char))
                {
                    if(!is_numeric($inputNumbers[$position-1]))
                        if($char == "n")
                            return "Number expected but '\n' found at position $position.";
                        else
                            return "Number expected but ',' found at position $position.";
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