<?php

function checkForSpaces($schoolNameString)
{
        //let's first convert to arrray
        $stringArray = str_split($schoolNameString);

        $arraySize = count($stringArray);

        for ($i=0; $i < $arraySize; $i++)
        {
                if ($stringArray[$i] == ' ')
                {
                        return true;
                }
        }
	return false;
}
?>
