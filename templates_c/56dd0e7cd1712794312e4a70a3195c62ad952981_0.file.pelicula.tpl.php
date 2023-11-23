<?php
/* Smarty version 4.3.4, created on 2023-11-17 04:52:38
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6556e386a458c1_69254555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56dd0e7cd1712794312e4a70a3195c62ad952981' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\pelicula.tpl',
      1 => 1700189964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6556e386a458c1_69254555 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value, 'peli');
$_smarty_tpl->tpl_vars['peli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
$_smarty_tpl->tpl_vars['peli']->do_else = false;
?> 
       
    <li><?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['peli']->value->anio;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['peli']->value->director;?>
</li>    
    <li><?php echo $_smarty_tpl->tpl_vars['peli']->value->clasificacion;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['peli']->value->sinopsis;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>     <?php }
}
