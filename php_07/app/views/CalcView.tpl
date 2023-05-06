{extends file="main.tpl"}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin" >
	<legend>Kalkulator</legend>
	<fieldset>
		<div class="pure-control-group">
			<label for="x">Kwota</label>
			<input id="x" type="text" placeholder="PLN" name="x" value="{$form->x}">
		</div>
		<div class="pure-control-group">
			<label for="y">Okres spłaty</label>
			<input id="y" type="text" placeholder="Lata" name="y" value="{$form->y}">
		</div>
		<div class="pure-control-group">
			<label for="z">Oprocentowanie</label>		
			<input id="z" type="text" placeholder="%" name="z" value="{$form->z}">
		</div>
			<div class="pure-controls">
			<button class="pure-button pure-button-primary" type="submit" name="submit">Oblicz</button>
		</div>
	</fieldset>		
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}