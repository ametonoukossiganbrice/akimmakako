<?php
/* Smarty version 4.3.4, created on 2024-07-15 09:43:38
  from 'C:\wamp64\www\shopakimmakako\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6694ef4ab63946_00832528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d7a16f117468ae411ed0e4a0766631580bd335' => 
    array (
      0 => 'C:\\wamp64\\www\\shopakimmakako\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1718367860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694ef4ab63946_00832528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
