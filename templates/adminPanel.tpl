<a>ESTE ES EL PANEL DE ADMINISTRADOR</a>
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

    {foreach from = $genero item = $genre}
        
        <option value="{$genre->id_genero}"> {$genre->genero}</option>
        
        {/foreach}
    </select>

    <input type="submit" value="Enviar">
</form>

    <div class="borrarPelicula">
    <h1>Borrar pelicula</h1>  
    <form id="borrarPelicula" action='borrarPelicula' method="post">
        
        <select name="id" required>
        <option value="">Seleccionar una pelicula</option>
    
        {foreach from = $peliculas item = $pelicula} 
       
            <option value ="{$pelicula->id}">{$pelicula->titulo}</option>
            {/foreach}
        </select>
    
        <input type="submit" value="borrar">
    </form>

    <div class="editarPelicula">
    <h1>Editar pelicula</h1>  
    <form id="editarPelicula" action='editarPelicula' method="post">
        
        <select name="fk_genero" required>
        <option value="">Seleccionar una genero</option>
    
        {foreach from = $genero item = $genre}
            
            <option value="{$genre->id_genero}"> {$genre->genero}</option>
            
            {/foreach}
        </select>

        <select name="id" required>
        <option value="">Seleccionar una pelicula</option>
    
        {foreach from = $peliculas item = $pelicula} 
       
            <option value ="{$pelicula->id}">{$pelicula->titulo}</option>
            {/foreach}
        </select>
    
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese un nuevo titulo de una pelicula" required>
        <input type="text" name="anio" id="anio" placeholder="Ingrese un nuevo año" required>
        <input type="text" name="director" id="director" placeholder="Ingrese un nuevo director" required>
        <input type="text" name="clasificacion" id="clasificacion" placeholder="Ingrese una nueva clasificacion" required>
        <input type="text" name="sinopsis" id="sinopsis" placeholder="Ingrese una nueva sinopsis" required>
    
        <input type="submit" value="editar">
    </form>        

</div>
