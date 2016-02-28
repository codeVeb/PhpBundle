<?php

function hex2rgb( $color ){
	$color = trim($color);
	if($color[0]=='#'):
		$color = substr($color, 1);
	endif;
	
	if(strlen($color) == 6):
		list($r, $g, $b) = array($color[0].$color[1], $color[2].$color[3], $color[4].$color[5]);
	elseif(strlen($color == 3)):
		list($r, $g, $b) = array($color[0].$color[0], $color[1].$color[1], $color[2].$color[2]);
	else:
		return false;
	endif;
	
	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );
	
	return array('red' => $r, 'green' => $g, 'blue' => $b);
}

function rgb2hex( $color ){	
	$color = trim($color);
	$color = preg_replace( '/[a-zA-Z]+/', '', $color );
	$color = trim($color, '()');
	$color = explode( ',' , $color);
	
	$r = dechex( $color[0] );
    $g = dechex( $color[1] );
    $b = dechex( $color[2] );
	
	return strtoupper('#'.$r.$g.$b);
}

// var_dump(hex2rgb('#757575'));
// var_dump(rgb2hex('rgb(117,117,117)'));
?>
