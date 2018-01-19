<?php
/* Smarty version 3.1.30, created on 2018-01-19 22:35:02
  from "P:\Data\hudellej\wamp64\www\micro_blog-master\subscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6272960e5383_03768993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7174a3f6b02f455e9247a3e68e46a11d155dee' => 
    array (
      0 => 'P:\\Data\\hudellej\\wamp64\\www\\micro_blog-master\\subscription.tpl',
      1 => 1516400445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/footer.tpl' => 1,
  ),
),false)) {
function content_5a6272960e5383_03768993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['requetePasse']->value)) {
if ($_smarty_tpl->tpl_vars['requetePasse']->value == true) {?>
<!-- We tell the user the subscription went well -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">Vous &ecirc;tes maintenant inscrit(e)</p>
	<a class="btn btn-success"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['pseudoInvalide']->value)) {?>
<!-- We tell the user his chosen pseudo is already assigned -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">Le pseudo <?php echo $_smarty_tpl->tpl_vars['pseudoInvalide']->value;?>
 est d&eacute;j&agrave; utilis&eacute;</p>
	<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['emailInvalide']->value)) {?>
<!-- We tell the user his email is already used -->
<div style="text-align: center;">
	<p class="panel" style="font-size: 2em">L'adresse email <?php echo $_smarty_tpl->tpl_vars['emailInvalide']->value;?>
 est d&eacute;j&agrave; utilis&eacute;e</p>
	<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
