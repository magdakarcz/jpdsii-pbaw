<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$z){
	//warunek ? co jesli prawda : co jesli falsz
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

function validate(&$x,&$y,&$z,&$messages){
	if ( ! (isset($x) && isset($y) && isset($z))) {
		return false;
	}

	if ( $x == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano okresu spłaty';
	}	
	if ( $z == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	
	if (count($messages) != 0) return false;
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	if (count($messages) != 0) return false;
	else return true;
}
function process(&$x,&$y,&$z,&$messages,&$result){
	global $role;
	$x = intval($x);
	$y = intval($y);
	$z = intval($z);
	if ($role == 'admin'){
		$result = ($x/($y)/12);
		$result = $result+$result*$z/100;
	} else {
			$messages [] = 'Tylko administrator moze uzywac kalkulatora kredytowego!';
	}
	//break;
}

$x = null;
$y = null;
$z = null;
$messages = array();
$result = null;

getParams($x,$y,$z);
if(validate($x,$y,$z,$messages)){
	process($x,$y,$z,$messages,$result);
}

include 'calc_view.php';
?>