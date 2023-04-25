<?php
/* Smarty version 4.3.1, created on 2023-04-25 04:38:46
  from 'C:\xampp\htdocs\php_06\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64473d36a71fd1_63756157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef1f6c53397ab36bf16894d470decdf4c86ab91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06\\app\\views\\CalcView.tpl',
      1 => 1682390156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64473d36a71fd1_63756157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163119792164473d36a663c8_29211493', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54978191564473d36a66c33_82470317', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_163119792164473d36a663c8_29211493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_163119792164473d36a663c8_29211493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_54978191564473d36a66c33_82470317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_54978191564473d36a66c33_82470317',
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
