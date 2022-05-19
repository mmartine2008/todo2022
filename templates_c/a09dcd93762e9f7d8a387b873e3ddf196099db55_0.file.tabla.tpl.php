<?php
/* Smarty version 3.1.39, created on 2022-05-19 21:33:09
  from '/var/www/html/loberia/todo/templates/tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6286b7957541f4_65142438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a09dcd93762e9f7d8a387b873e3ddf196099db55' => 
    array (
      0 => '/var/www/html/loberia/todo/templates/tabla.tpl',
      1 => 1652995985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6286b7957541f4_65142438 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Prioridad</th>
            <th>Borrar</th>
            <th>Finalizar</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
$_smarty_tpl->tpl_vars['tarea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value['prioridad'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
eliminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Borrar</a></td>
            <?php if ($_smarty_tpl->tpl_vars['tarea']->value['finalizada'] == 0) {?>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
terminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Finalizar</a></td>
            <?php } else { ?>
                <td></td>
            <?php }?>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table><?php }
}
