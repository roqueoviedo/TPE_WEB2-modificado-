
<?php
require_once('./libs/Smarty.class.php');

class PeliculasView{
    private $smarty; // Solo tiene acceso en esa clase
    public function __construct() {
    $this->smarty = new Smarty();
    }
    public function showHome(){
        $smarty = new smarty(); // Declaramos el smarty
        $smarty->display('templates/header.tpl');       
    }
    
    public function showAllMovies($movies){
        $smarty = new smarty(); // Declaramos el smarty
        $smarty->assign('movies', $movies);
        $smarty->display('templates/listadoPeli.tpl');
       
    }

    public function showByGenre($generos){
        $smarty = new smarty();
        $smarty->assign('generos', $generos);
        $smarty->display('templates/listadoDeGenero.tpl');
    }

    public function showByMovie($pelicula) {
        $smarty = new smarty();
        $smarty->display('templates/header.tpl');
        $smarty->assign('pelicula', $pelicula);
        $smarty->display('templates/pelicula.tpl');
    }

    public function exito(){
        $smarty = new smarty();
        $smarty->display('templates/exito.tpl');
        header("refresh:2; url=adminPanel");
    }

    public function error(){
        $smarty = new smarty();
        $smarty->display('templates/error.tpl');
        header("refresh:2; url=adminPanel");
    }

    public function adminPanel($genero, $peliculas){
        $smarty = new smarty();
        $smarty->assign('genero',$genero);
        $smarty->assign('peliculas',$peliculas);
        $smarty->display('templates/adminPanel.tpl');
    }

    }
    
