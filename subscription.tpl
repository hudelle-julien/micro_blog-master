{include file='includes/header.tpl'}

{if isset($requetePasse)}
{if $requetePasse == true}
<!-- We tell the user the subscription went well -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">Vous &ecirc;tes maintenant inscrit(e)</p>
	<a class="btn btn-success"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
{/if}
{/if}

{if isset($pseudoInvalide)}
<!-- We tell the user his chosen pseudo is already assigned -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">Le pseudo {$pseudoInvalide} est d&eacute;j&agrave; utilis&eacute;</p>
	<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
{elseif isset($emailInvalide)}
<!-- We tell the user his email is already used -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">L'adresse email {$emailInvalide} est d&eacute;j&agrave; utilis&eacute;e</p>
	<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
{/if}
{include file='includes/footer.tpl'}