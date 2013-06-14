<?php

/* Sk3tchy_PHP_Decoder
   By: Sk3tchymoos3
   Twitter @Sk3tchymoos3
*/

// I place the default.php code as a string in a variable 
$originalFile='<PHP Code Goes Here>';

$beginning=substr($originalFile, 0, 27); // Grab the first 26 characters of the string
$lookingFor="eval(gzinflate(base64_decode"; // What the first 26 characters are
$i = 0;

while ($beginning = $lookingFor): //do we still need to remove a layer of obfuscation?
  $originalFile = str_replace("eval","return", $originalFile); 
	$originalFile = eval($originalFile);
	$beginning=substr($originalFile, 0, 27); //overwrite variable with new 26 characters, this will be used now in the while statement
	$i = $i + 1;  //keeping track :)
	echo "The loop is on its $i iteration! Here is the result:\r\n";
	echo "$originalFile\r\n";
endwhile;


?>
