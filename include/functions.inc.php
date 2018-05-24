<?php

function saltgen (){
  $randomresult = ""
  $chars = "abcdefghijklmnopqrstuvxzyåäöABCDEFGHIJKLMNOPQRSTUVXZYÅÄÖ0123456789!!#¤%&/(-)=?@£{[]}"
  chararray = str_split($chars);
  for($i = 0; $i < 20; $i++){
	   $random = array_rand($chararray);
	    $randomresult .= "".$chararray[$random];
    }
  return $randomresult
}
