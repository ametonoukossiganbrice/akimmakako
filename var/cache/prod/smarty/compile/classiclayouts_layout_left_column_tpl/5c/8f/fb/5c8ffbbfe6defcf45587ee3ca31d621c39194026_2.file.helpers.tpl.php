<?php
/* Smarty version 4.3.4, created on 2024-07-15 09:59:53
  from 'C:\wamp64\www\shopakimmakako\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6694f31938a4c6_50138854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8ffbbfe6defcf45587ee3ca31d621c39194026' => 
    array (
      0 => 'C:\\wamp64\\www\\shopakimmakako\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1708966842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694f31938a4c6_50138854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\shopakimmakako\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\5c\\8f\\fb\\5c8ffbbfe6defcf45587ee3ca31d621c39194026_2.file.helpers.tpl.php',
    'uid' => '5c8ffbbfe6defcf45587ee3ca31d621c39194026',
    'call_name' => 'smarty_template_function_renderLogo_7405729596694f3193762a2_30403493',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_7405729596694f3193762a2_30403493 */
if (!function_exists('smarty_template_function_renderLogo_7405729596694f3193762a2_30403493')) {
function smarty_template_function_renderLogo_7405729596694f3193762a2_30403493(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_7405729596694f3193762a2_30403493 */
}
