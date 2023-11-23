<?php
/* Smarty version 4.3.4, created on 2023-11-16 00:18:33
  from 'C:\xampp\htdocs\ProyectosWeb2\Practico\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655551c99fe543_93363227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c89990679a5a9dca947b1869ab1e2cb39be6c8b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectosWeb2\\Practico\\templates\\header.tpl',
      1 => 1700090300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formulario.tpl' => 1,
  ),
),false)) {
function content_655551c99fe543_93363227 (Smarty_Internal_Template $_smarty_tpl) {
?><base href="home">
<link rel="stylesheet" href="http://localhost/ProyectosWeb2/Practico/css/style.css">
<title>Peliculas asombrosas</title>
</head>
    <header>
<nav id="nav">
    <ul>
        <li><a href="http://localhost/ProyectosWeb2/Practico/pelicula">Peliculas</a></li>
        <li><a href="http://localhost/ProyectosWeb2/Practico/genero/1">Comedia</a></li>
        <li><a href="http://localhost/ProyectosWeb2/Practico/genero/2">Terror</a></li>
        <li><a href="http://localhost/ProyectosWeb2/Practico/genero/4">Ciencia Ficcion</a></li>
        <li><a href="http://localhost/ProyectosWeb2/Practico/genero/3">Acción</a></li>
    </ul>
</nav>
</header>

<?php if (!empty($_SESSION['usuario'])) {?>
    <a href="http://localhost/ProyectosWeb2/Practico/adminPanel">Boton administrativo</a>
    <a href="http://localhost/ProyectosWeb2/Practico/logout">Cerrar sesion</a>
<?php }?>
    </header>
    <?php $_smarty_tpl->_subTemplateRender("file:formulario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
