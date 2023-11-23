<?php
require_once './app/controllers/PeliculasController.php';
require_once './app/controllers/UsuarioController.php';
//Se define una constante llamada BASE_URL
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/'); 

$action = 'home';

if (!empty($_GET['action'])){ // Si el inicio de nuestra pagina no esta vacio y la palabra que le sigue es diferente de home
    $action = $_GET['action']; //Define la barra con la accion que se escribio en la url PorEj:Practico/perfiles
}
else {
    $action = 'home';
}

$param = explode('/',$action);

$cPeli = new PeliculasController; // cPeli es el controlador de las peliculas
$usuario = new UsuarioController; // usuario es el controlador de los usuarios
switch ($param[0]) {
    
    //Muestra la página de inicio llamando a showHome()
    case 'home':
        $cPeli->showHome();      
        break;
    
    //verifica si hay un parámetro y muestra películas relacionadas con ese género     
    case 'genero':
        if (isset($param[1])){ // Si hay seteado un parametro en la posicion 1 
            if (intval($param[1])){// Y este valor es un numero voy a mostrar lo siguiente
                $cPeli->showXgenero($param[1]);
            } 
            else{
            echo "error 404 not found";
            } 
        }else {
            $cPeli->getAllMovies();
        }   
        
        break;

    case 'pelicula':
        if (isset($param[1])){ // Si hay seteado un parametro en la posicion 1 
            if (intval($param[1])){// Y este valor es un numero voy a mostrar lo siguiente
                $cPeli->showPeli($param[1]);
            } 
            else{
            echo "error 404 not found";
            } 
        }else {
            $cPeli->getAllMovies();
        }   
        
        break;
        
    //login
    case 'register':
            $usuario->register();
        break;
    case 'login':
            $usuario->login();
        break;
    case 'adminPanel':
            $usuario->showAdmin();
        break;
    case 'logout':
            $usuario->logout();
        break; 
        
    //Panel de control del administrador.
    case 'nuevaPelicula':
        $cPeli->nuevaPeli();
        break;
        
    case 'borrarPelicula':
        $cPeli->eliminarPeli();
        break;
        
    case 'editarPelicula':
        $cPeli->editarPeli();
        break; 
           
    default:
        echo "Error 404 not found";
        break;

    

}