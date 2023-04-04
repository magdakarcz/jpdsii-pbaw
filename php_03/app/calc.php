<?php
require_once dirname(__FILE__).'/../config.php';

//include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form){
	//warunek ? co jesli prawda : co jesli falsz
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}
//$hide_intro = false;

function validate(&$form,&$infos,&$msgs,&$hide_intro){
	if ( ! (isset($form['x']) && isset($form['y']) && isset($form['z']))) {
		return false;
	}
	$hide_intro = true;
	$infos [] = 'Przekazano parametry.';
	
	if ( $form['x'] == "") {
		$msgs [] = 'Nie podano kwoty';
	}
	if ( $form['y'] == "") {
		$msgs [] = 'Nie podano okresu spłaty';
	}	
	if ( $form['z'] == "") {
		$msgs [] = 'Nie podano oprocentowania';
	}
	
	if (count($msgs) == 0){
	
		if (! is_numeric( $form['x'] )) {
			$msgs [] = 'Pierwsza wartość nie jest liczbą całkowitą';
		}
		
		if (! is_numeric( $form['y'] )) {
			$msgs [] = 'Druga wartość nie jest liczbą całkowitą';
		}	
		
		if (! is_numeric( $form['x'] )) {
			$msgs [] = 'Trzecia wartość nie jest liczbą całkowitą';
		}
	}
	if (count($msgs) > 0) return false;
	else return true;
}
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	//global $role;
	//$x = intval($x);
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
	$form['z'] = floatval($form['z']);
	
	$result = ($form['x']/$form['y']/12);
	$result = $result+$result*$form['z']/100;
	/*											//role
	if ($role == 'admin'){
		$result = ($x/($y)/12);
		$result = $result+$result*$z/100;
	} else {
			$messages [] = 'Tylko administrator moze uzywac kalkulatora kredytowego!';
	}
	//break;
	*/
}

$form = null;
$infos = array();
$messages = array();
$result = null;
//domyślnie pokazuj wstęp strony (tytuł i tło)
$hide_intro = false;

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

$page_title = 'Kalkulator kredytowy';
$page_description = 'Oblicz wysokość raty';
$page_header = 'Proste szablony';
$page_footer = 'przykładowa tresć stopki wpisana do szablonu z kontrolera';

include 'calc_view.php';
?>