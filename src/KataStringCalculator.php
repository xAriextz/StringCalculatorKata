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
            $areCustomOperators = false;
            if($inputNumbers[0]=="/" and $inputNumbers[1]=="/")
            {
                $delimeter = strtok(substr($inputNumbers,2), "\n");
                $inputNumbers = substr($inputNumbers, strlen($delimeter)+2);
                $areCustomOperators = true;
            }
            else
                $delimeter = "\n";

            $inputNumbers = str_replace($delimeter,"n",$inputNumbers);
            $position = 0;
            $splittedInputNumbers = str_split($inputNumbers);

            if($areCustomOperators) {
                $splittedInputNumbers = str_split(substr($inputNumbers, 1));
                foreach ($splittedInputNumbers as $char) {
                    if (!is_numeric($char) and $char != "n") {
                        return "'$delimeter' expected but '$char' found at position $position.";
                    }
                    $position++;
                }
            }
            $position = 0;
            foreach ($splittedInputNumbers as $char)
            {
                if(!is_numeric($char))
                {
                    if(!is_numeric($splittedInputNumbers[$position-1]))
                        return "Number expected but '$char' found at position $position.";
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