<?php
/* Smarty version 4.3.1, created on 2023-04-25 04:38:46
  from 'C:\xampp\htdocs\php_06\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64473d36b274a9_86063009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28078a3a5375cfeebb6623a835e3558c46c6567' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06\\app\\views\\templates\\main.tpl',
      1 => 1682387574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64473d36b274a9_86063009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" >
	
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/lightcase/lightcase.css">
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
	



	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /css/style.css">	
	
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
	
</head>
<body>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page ">
		<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4 bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <span class="lnr lnr-moon"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Góra strony</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#app_content">Kalkulator</a>
                </li>				
			</ul>
		</div>
	</div>
</nav>

<!-- zdjecie z napisem-->
<div class="jumbotron d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h6 class="display-8 mb-4"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</h6>
        <p>
            <a href="#app_content" class="btn btn-secondary " >Idź do formularza</a>
        </p>	
  </div>
</div>

<div id="app_content" class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190615410264473d36b268c4_94089715', 'content');
?>


</div>

<!-- !!!!!!!!!!footer -->
<footer class="mastfoot mb-3 bg-white py-4 border-top">
    <div class="inner container">
         <div class="row">
         	<div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
				<p>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102632750464473d36b26f66_58808872', 'footer');
?>

				</p>			
         		<p class="mb-0">Autorka przykładu Magdalena Karcz. Widok oparty na stylu Moon. <a href="https://gettemplates.co" target="_blank">GetTemplates.co</a>.</p>
         	</div>
		</div>
	</div>
</footer>

	<!-- External JS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/select2/select2.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/isotope/isotope.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/lightcase/lightcase.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/waypoints/waypoint.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/countTo/jquery.countTo.js"><?php echo '</script'; ?>
>

	<!-- Main JS -->
	<?php echo '<script'; ?>
 src="js/app.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//localhost:35729/livereload.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_190615410264473d36b268c4_94089715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_190615410264473d36b268c4_94089715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_102632750464473d36b26f66_58808872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_102632750464473d36b26f66_58808872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
