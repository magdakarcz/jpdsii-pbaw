<?php
/* Smarty version 4.3.1, created on 2023-04-19 02:45:57
  from 'C:\xampp\htdocs\php_04\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643f39c5145152_49919374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45bf2833360d38f00f78ebaad98c25f97fde0fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04\\app\\calc.html',
      1 => 1681865155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643f39c5145152_49919374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828783657643f39c513aa95_62903742', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_689155862643f39c513b471_60243404', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_828783657643f39c513aa95_62903742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_828783657643f39c513aa95_62903742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_689155862643f39c513b471_60243404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_689155862643f39c513b471_60243404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>


<div class="col-md-8 offset-md-2 contact-form-holder mt-2 bg-white boxed-page container ">
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="get" class="pure-form pure-form-stacked">
	<div class="row">
		<div class="col-md-6 form-input">
		<label for="x">Kwota</label>
		<input id="x" type="text" placeholder="PLN" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">
		</div>
		<div class="col-md-6 form-input">
		<label for="y">Okres spłaty</label>
		<input id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">
		</div>
		<div class="col-md-6 form-input">
		<label for="z">Oprocentowanie</label>		
		<input id="z" type="text" placeholder="%" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
">

		</div>
		<div class="col-md-9 form-btn text-center">
		<button class="btn btn-block btn-secondary btn-red" type="submit" name="submit">Oblicz</button>
		<br>
		</div>
		
	</div>
</form>	
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<br>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>



<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
			<br>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?> 
	<h4>Rata wyniesie</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

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
