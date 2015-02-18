<?php

function convertToWeb($string)
{
	//frasl
        // $pattern = '/frasl/';
        //$replace = '&frasl';
	//$mystr = preg_replace($pattern, $replace, $mystr);

	//<sup>
        $pattern = '/&lt;sup&gt;/';
        $replace = '';
        $string = preg_replace($pattern, $replace, $string);




                     //                   $user_answer = $mystr;
                      //                  error_log($user_answer);
                                        //$user_answer = str_replace("frasl","&frasl","frasl");

	
	return $string;
}


?>
