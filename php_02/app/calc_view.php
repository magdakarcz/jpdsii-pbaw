<?php
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<style>
		.secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
			background: rgb(249, 176, 220);
         }
    </style>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
		<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php"class="pure-button secondary">Kolejna chroniona strona </a>
		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php"class="pure-button secondary pure-button-active">Wyloguj</a>
</div>

<div style = "width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/calc.php" method="get" class="pure-form pure-form-stacked">
	<legend><b>Kalkulator kredytowy</b></legend>
	<fieldset>
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" name="x" value="<?php if(isset($x)) print($x); ?>" />
		<label for="id_y">Okres spłaty (w latach): </label>
		<input id="id_y" type="text" name="y" value="<?php if(isset($y)) print($y); ?>" />
		<label for="id_z">Oprocentowanie: </label>
		<input id="id_z" type="text" name="z" value="<?php if(isset($z)) print($z); ?>" />
		<input type="submit" value="Oblicz" class="pure-button secondary pure-button-primary"/>
	</fieldset>
</form>	

<?php
if (isset($messages)){
	if (count($messages)>0){
		echo '<ol style="margin-top: 20px; padding: 10px 10px 10px 30px; border-radius: 5x; background-color: #f88; width:300px">';
		foreach ($messages as $msg ){
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Rata wyniesie: '.$result. ' zł'; ?>
</div>
<?php } ?>
</div>
</body>
</html>