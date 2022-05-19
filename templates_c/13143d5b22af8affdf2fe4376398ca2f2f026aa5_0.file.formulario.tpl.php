<?php
/* Smarty version 3.1.39, created on 2022-05-19 21:25:08
  from '/var/www/html/loberia/todo/templates/formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6286b5b407bdf4_61377035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13143d5b22af8affdf2fe4376398ca2f2f026aa5' => 
    array (
      0 => '/var/www/html/loberia/todo/templates/formulario.tpl',
      1 => 1652995494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6286b5b407bdf4_61377035 (Smarty_Internal_Template $_smarty_tpl) {
?>        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
agregar" method="post">
                            
            <label>Título: <input type="text" name="titulo"></label></p>
            <label>Descripcion: <textarea name="descripcion" cols="50" rows="10"></textarea></label></p>
            <label>Prioridad:   
                <select name="prioridad">
                    <option value="5">5 - Mas alta</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1 - Mas Baja</option>
                </select></label></p>

            <input type="submit">
                            
        </form><?php }
}
