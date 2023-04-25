<?php
/* Smarty version 4.3.1, created on 2023-04-25 01:30:10
  from 'C:\xampp\htdocs\php_05\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6447110267bf53_36843402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c5aeff525b1a7632dff59a3a616a4dcc3a9913' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\app\\CalcView.html',
      1 => 1682379007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447110267bf53_36843402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66379017964471102671b80_45101861', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31294984564471102672475_22938145', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_66379017964471102671b80_45101861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_66379017964471102671b80_45101861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_31294984564471102672475_22938145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31294984564471102672475_22938145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>


<div class="col-md-8 offset-md-2 contact-form-holder mt-2 bg-white boxed-page container ">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="get" class="pure-form pure-form-stacked" >
	<div class="row">
		<div class="col-md-6 form-input">
		<label for="x">Kwota</label>
		<input id="x" type="text" placeholder="PLN" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
		</div>
		<div class="col-md-6 form-input">
		<label for="y">Okres spłaty</label>
		<input id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
		</div>
		<div class="col-md-6 form-input">
		<label for="z">Oprocentowanie</label>		
		<input id="z" type="text" placeholder="%" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
">

		</div>
		<div class="col-md-9 form-btn text-center">
		<button class="btn btn-block btn-secondary btn-red" type="submit" name="submit">Oblicz</button>
		<br>
		</div>
		
	</div>
</form>	
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?> 
	<br>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<br>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Rata wyniesie</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
	<br>
<?php }?>
</div>
</div>



</div>
</div>
</div>
<?php
}
}
/* {/block 'content'} */
}
