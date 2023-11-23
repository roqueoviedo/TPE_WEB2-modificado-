<?php
/* Smarty version 4.3.4, created on 2023-11-17 01:51:11
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6556b8ff078867_23758977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2357bfdfc2818f959aa0588bda35f62599a7694c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\formulario.tpl',
      1 => 1700178011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6556b8ff078867_23758977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="containerlogin">
        <div class="formuLogin">
            <h1>Inicio de sesion Administrador</h1>  
            <form id="login" action='login' method="post">
                <h3>Logueate</h3>
                <input for="usuario" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
                <input for="email" type="text" name="email" id="email" placeholder="Ingrese su email">
                <input type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese su contraseña">
                <input type="submit" value="Enviar">
            </form>
        </div>

        <div class="formuRegistro">
        <h1>Registrate</h1>  
        <form id="register" action='register' method="post">
            <input for="usuario" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
            <input for="email" type="text" name="email" id="email" placeholder="Ingrese su email">
            <input type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese una contraseña mayor a 5 digitos">
            <input type="submit" value="Enviar">
        </form>
    </div>


</section><?php }
}
