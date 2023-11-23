<?php
/* Smarty version 4.3.4, created on 2023-11-23 21:40:01
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\listadoDeGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655fb8a15c74f3_57538435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90bfd28c6023de386749d5b15b4d622864420a12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\listadoDeGenero.tpl',
      1 => 1700770269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_655fb8a15c74f3_57538435 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>

<h1 id= "encabezado">Listado de generos</h1>
<table>
    <thead>
        <tr>
            <th>Título</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->titulo;?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>      
</nav>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
