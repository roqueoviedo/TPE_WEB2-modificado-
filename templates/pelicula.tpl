<ul>
    {foreach from = $pelicula item = $peli} 
       
    <li>{$peli->titulo}</li>
    <li>{$peli->anio}</li>
    <li>{$peli->director}</li>    
    <li>{$peli->clasificacion}</li>
    <li>{$peli->sinopsis}</li>
    {/foreach}
</ul>     