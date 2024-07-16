<?php
/* Smarty version 4.3.4, created on 2024-07-15 14:13:57
  from 'C:\wamp64\www\shopakimmakako\themes\classic\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66952ea517c1a1_15155259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27fa30f88cb19bb173a2c4b9fca17e7f8f48cb78' => 
    array (
      0 => 'C:\\wamp64\\www\\shopakimmakako\\themes\\classic\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1708966842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66952ea517c1a1_15155259 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
