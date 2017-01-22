<?php

function slugify($phrase, $maxLength=100){
	
	$result = strtolower($phrase);

	$result = preg_replace("/[^A-Za-z0-9\s-.\/]/", "", $result);
	$result = trim(preg_replace("/[\s-]+/", " ", $result));
	$result = trim(substr($result, 0, $maxLength));
	$result = preg_replace("/\s/", "-", $result);
    
    return $result;
}

echo slugify('hello my friend 22000 veb?_');
?>
