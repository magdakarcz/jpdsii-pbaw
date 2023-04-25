{extends file="main.tpl"}

{block name=footer} {/block}

{block name=content}

<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>


<div class="col-md-8 offset-md-2 contact-form-holder mt-2 bg-white boxed-page container ">
<form action="{$conf->app_url}/app/calc.php" method="get" class="pure-form pure-form-stacked" >
	<div class="row">
		<div class="col-md-6 form-input">
		<label for="x">Kwota</label>
		<input id="x" type="text" placeholder="PLN" name="x" value="{$form->x}">
		</div>
		<div class="col-md-6 form-input">
		<label for="y">Okres spłaty</label>
		<input id="y" type="text" placeholder="Lata" name="y" value="{$form->y}">
		</div>
		<div class="col-md-6 form-input">
		<label for="z">Oprocentowanie</label>		
		<input id="z" type="text" placeholder="%" name="z" value="{$form->z}">

		</div>
		<div class="col-md-9 form-btn text-center">
		<button class="btn btn-block btn-secondary btn-red" type="submit" name="submit">Oblicz</button>
		<br>
		</div>
		
	</div>
</form>	
{if $msgs->isError()} 
	<br>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
		{strip}
			<li>{$inf}</li>
		{/strip}
	{/foreach}
	</ol>
	<br>
{/if}


{if isset($res->result)}
	<h4>Rata wyniesie</h4>
	<p class="res">
	{$res->result}
	</p>
	<br>
{/if}
</div>
</div>



</div>
</div>
</div>
{/block}