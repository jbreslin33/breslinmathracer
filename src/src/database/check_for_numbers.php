<?php

function checkForNumbers($schoolNameString)
{
        //let's first convert to arrray
        $stringArray = str_split($schoolNameString);

        $arraySize = count($stringArray);

        for ($i=0; $i < $arraySize; $i++)
        {
                if ($stringArray[$i] == '0')
                {
                        return true;
                }
                if ($stringArray[$i] == '1')
                {
                        return true;
                }
                if ($stringArray[$i] == '2')
                {
                        return true;
                }
                if ($stringArray[$i] == '3')
                {
                        return true;
                }
                if ($stringArray[$i] == '4')
                {
                        return true;
                }
                if ($stringArray[$i] == '5')
                {
                        return true;
                }
                if ($stringArray[$i] == '6')
                {
                        return true;
                }
                if ($stringArray[$i] == '7')
                {
                        return true;
                }
                if ($stringArray[$i] == '8')
                {
                        return true;
                }
                if ($stringArray[$i] == '9')
                {
                        return true;
                }
        }
	return false;
}
?>
