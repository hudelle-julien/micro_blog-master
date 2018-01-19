<?php
/* Smarty version 3.1.30, created on 2018-01-19 22:42:56
  from "P:\Data\hudellej\wamp64\www\micro_blog-master\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6274709b8354_18458909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fa33f421d26a43f291aa3d3d7612f7977eff51' => 
    array (
      0 => 'P:\\Data\\hudellej\\wamp64\\www\\micro_blog-master\\connexion.tpl',
      1 => 1516400459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/footer.tpl' => 1,
  ),
),false)) {
function content_5a6274709b8354_18458909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['requetePassee']->value == false) {?>
<div style="text-align: center;">
		<p class="panel" style="font-size: 2em">Email ou mot de passe incorrect</p>
		<a class="btn btn-danger"  style="font-size: 1.5em" href="index.php">Retour a l'accueil</a>
</div>
<?php }
$_smarty_tpl->_subTemplateRender("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
