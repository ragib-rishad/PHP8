<?php


	// Work with number
	
	$x = 2;
	$y = &$x; // '&' creates reference

	$x = 10;

	echo $y;
	echo "<br>";

	//Variable types

	$myName = 'John';
	$_12name = 'Jane';


	echo 'The names are ' . $myName . ' and ' . $_12name . '.<br>'; //text and concatenation
	echo "The names are {$myName}.<br>"; // using { }


?>