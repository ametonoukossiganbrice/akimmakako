<?php
/* Smarty version 4.3.4, created on 2024-07-15 14:17:18
  from 'C:\wamp64\www\shopakimmakako\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66952f6eb6fd22_04388599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a54c66a3b2d69164783e0ceccda96bbfe4e114' => 
    array (
      0 => 'C:\\wamp64\\www\\shopakimmakako\\themes\\classic\\templates\\page.tpl',
      1 => 1708966842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66952f6eb6fd22_04388599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2743077766952f6eb2c295_95708925', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_127829893666952f6eb37822_60756168 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10537174166952f6eb2ead6_07813496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127829893666952f6eb37822_60756168', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_134649709566952f6eb56de5_88534566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_75844889266952f6eb5a824_22007025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_61332434266952f6eb54634_26142577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134649709566952f6eb56de5_88534566', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75844889266952f6eb5a824_22007025', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_170960908866952f6eb68cd9_31654352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_65720468466952f6eb64972_56329561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170960908866952f6eb68cd9_31654352', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2743077766952f6eb2c295_95708925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2743077766952f6eb2c295_95708925',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10537174166952f6eb2ead6_07813496',
  ),
  'page_title' => 
  array (
    0 => 'Block_127829893666952f6eb37822_60756168',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_61332434266952f6eb54634_26142577',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_134649709566952f6eb56de5_88534566',
  ),
  'page_content' => 
  array (
    0 => 'Block_75844889266952f6eb5a824_22007025',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_65720468466952f6eb64972_56329561',
  ),
  'page_footer' => 
  array (
    0 => 'Block_170960908866952f6eb68cd9_31654352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10537174166952f6eb2ead6_07813496', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61332434266952f6eb54634_26142577', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65720468466952f6eb64972_56329561', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
