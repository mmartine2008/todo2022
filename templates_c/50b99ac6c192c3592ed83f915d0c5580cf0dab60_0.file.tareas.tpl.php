<?php
/* Smarty version 3.1.39, created on 2022-05-19 21:32:34
  from '/var/www/html/loberia/todo/templates/tareas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6286b772088294_45036242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b99ac6c192c3592ed83f915d0c5580cf0dab60' => 
    array (
      0 => '/var/www/html/loberia/todo/templates/tareas.tpl',
      1 => 1652995949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formulario.tpl' => 1,
    'file:tabla.tpl' => 1,
  ),
),false)) {
function content_6286b772088294_45036242 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>TODO</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="container">
            <h1>Listado de Tareas</h1>
            <?php $_smarty_tpl->_subTemplateRender("file:formulario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </body>
</html><?php }
}
