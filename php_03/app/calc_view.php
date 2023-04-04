<?php require_once dirname(__FILE__) .'/../config.php';?>
<?php
include _ROOT_PATH.'/templates/top.php';
?>

<div class="jumbotron d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4"><?php out($page_title);?></h1>

  </div>
</div>

<h2 class="content-head is-center"><?php out($page_description);?></h2>


<div class="col-md-8 offset-md-2 contact-form-holder mt-4">
<form action="<?php print(_APP_URL);?>/app/calc.php" method="get" class="pure-form pure-form-stacked">
	<div class="row">
		<div class="col-md-6 form-input">
		<input id="x" type="text" placeholder="Kwota" name="x" value="<?php out($form['x']); ?>">
		</div>
		<div class="col-md-6 form-input">
		<input id="y" type="text" placeholder="Okres spłaty" name="y" value="<?php out($form['y']); ?>">
		</div>
		<div class="col-md-6 form-input">
		<input id="z" type="text" placeholder="Oprocentowanie" name="z" value="<?php out($form['z']); ?>">
		</div>
		<div class="col-md-12 form-btn text-center">
		<button class="btn btn-block btn-secondary btn-red" type="submit" name="submit">Oblicz</button>
		</div>
	</div>
</form>	
</div>


<?php
if (isset($messages)){
	if (count($messages)>0){
		echo '<h4>Wystąpiły błędy: </h4>';
		echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<h4>Rata wyniesie</h4>
	<p class="res">
<?php print($result); ?>
	</p>

<?php } ?>
</div>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>