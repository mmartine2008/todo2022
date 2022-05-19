<?php
/* Smarty version 3.1.39, created on 2022-05-19 21:25:35
  from '/var/www/html/loberia/todo/templates/tareas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6286b5cf4cd3a7_15578031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b99ac6c192c3592ed83f915d0c5580cf0dab60' => 
    array (
      0 => '/var/www/html/loberia/todo/templates/tareas.tpl',
      1 => 1652995533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formulario.tpl' => 1,
    'file:tabla.tpl' => 1,
  ),
),false)) {
function content_6286b5cf4cd3a7_15578031 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>TODO</title>
    </head>
    <body>
        <h1>Listado de Tareas</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:formulario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
