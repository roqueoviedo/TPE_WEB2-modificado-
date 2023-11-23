<nav>

<h1 id= "encabezado">Listado de generos</h1>
<table>
    <thead>
        <tr>
            <th>Título</th>
        </tr>
    </thead>
    <tbody>
        {foreach from = $generos item = $genero}
        <tr>
            <td>{$genero->titulo}</td>
        </tr>
        {/foreach}
    </tbody>
</table>      
</nav>
{include file = "footer.tpl"}
