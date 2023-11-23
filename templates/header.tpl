<base href="home">
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

{if !empty($smarty.session.usuario)}
    <a href="http://localhost/ProyectosWeb2/Practico/adminPanel">Boton administrativo</a>
    <a href="http://localhost/ProyectosWeb2/Practico/logout">Cerrar sesion</a>
{/if}
    </header>
    {include file="formulario.tpl"}