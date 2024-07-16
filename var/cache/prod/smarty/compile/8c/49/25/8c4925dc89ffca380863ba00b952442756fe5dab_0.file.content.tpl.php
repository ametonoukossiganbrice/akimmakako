<?php
/* Smarty version 4.3.4, created on 2024-07-15 10:46:16
  from 'C:\wamp64\www\shopakimmakako\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6694fdf867a5e3_45783576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4925dc89ffca380863ba00b952442756fe5dab' => 
    array (
      0 => 'C:\\wamp64\\www\\shopakimmakako\\admin\\themes\\default\\template\\content.tpl',
      1 => 1718367860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694fdf867a5e3_45783576 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
