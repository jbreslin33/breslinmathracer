<?php

function convertToWeb($string)
{
	// <
        $pattern = '/&lt;/';
        $replace = '<';
        $string = preg_replace($pattern, $replace, $string);
	
	// <
        $pattern = '/&gt;/';
        $replace = '>';
        $string = preg_replace($pattern, $replace, $string);
	
	// <
        $pattern = '/breslinampersandfrasl;/';
        $replace = '&frasl;';
        $string = preg_replace($pattern, $replace, $string);
	
	// + 
        $pattern = '/breslinaddition/';
        $replace = '+';
        $string = preg_replace($pattern, $replace, $string);
	
	return $string;
}


?>
