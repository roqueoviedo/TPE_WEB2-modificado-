<?php
/* Smarty version 4.3.4, created on 2023-11-23 21:45:30
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655fb9ea5a1e15_26581864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55330e333b8d3f272caa753c302ddca88b628825' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\adminPanel.tpl',
      1 => 1700772327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655fb9ea5a1e15_26581864 (Smarty_Internal_Template $_smarty_tpl) {
?><a>ESTE ES EL PANEL DE ADMINISTRADOR</a>
<link rel="stylesheet" href="http://localhost/ProyectosWeb2/Practico/css/style.css">
<div class="nuevaPelicula">
<h1>Nueva pelicula</h1>  
<form id="nuevaPelicula" action='nuevaPelicula' method="post">
    <input type="text" name="titulo" id="titulo" placeholder="Ingrese un titulo de una pelicula" required>
    <input type="text" name="anio" id="anio" placeholder="Ingrese el año" required>
    <input type="text" name="director" id="director" placeholder="Ingrese el director" required>
    <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese la clasificacion" required>
    <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese la sinopsis" required>

    <select name="fk_genero" required>
    <option value="">Seleccionar un genero</option>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        
        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
"> <?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <input type="submit" value="Enviar">
</form>

    <div class="borrarPelicula">
    <h1>Borrar pelicula</h1>  
    <form id="borrarPelicula" action='borrarPelicula' method="post">
        
        <select name="id" required>
        <option value="">Seleccionar una pelicula</option>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?> 
       
            <option value ="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    
        <input type="submit" value="borrar">
    </form>

    <div class="editarPelicula">
    <h1>Editar pelicula</h1>  
    <form id="editarPelicula" action='editarPelicula' method="post">
        
        <select name="fk_genero" required>
        <option value="">Seleccionar una genero</option>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genero']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
            
            <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
"> <?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <select name="id" required>
        <option value="">Seleccionar una pelicula</option>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?> 
       
            <option value ="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese un nuevo titulo de una pelicula" required>
        <input type="text" name="anio" id="anio" placeholder="Ingrese un nuevo año" required>
        <input type="text" name="director" id="director" placeholder="Ingrese un nuevo director" required>
        <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese una nueva clasificacion" required>
        <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese una nueva sinopsis" required>
    
        <input type="submit" value="editar">
    </form>        

</div>
<?php }
}
