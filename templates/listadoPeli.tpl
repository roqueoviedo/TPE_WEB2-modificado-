
<nav>

<h1 id= "encabezado">Listado de peliculas</h1>
<ul>
    {foreach from = $movies item = $movie} 
       
    <li><a href="http://localhost/ProyectosWeb2/Practico/pelicula/{$movie->id}">{$movie->titulo}</a></li>
    {/foreach}
</ul>      
</nav>
{include file = "footer.tpl"}