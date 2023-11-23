<?php
require_once 'app/models/PeliculasModel.php';
require_once 'app/views/PeliculasView.php';
require_once 'app/models/UsuarioModel.php';
//require_once 'app/views/UsuarioView.php';
require_once './helpers/Auth.Helper.php';
define('HOME', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/login');

class UsuarioController{
    private $peliModel;
    private $peliView;
    private $usuarioModel;
    //private $usuarioView;
    private $helper;
    public function __construct() {

        $this->peliModel = new PeliculasModel();
        $this->peliView = new PeliculasView();
        $this->usuarioModel = new UsuarioModel();        
        //$this->usuarioView = new UsuarioView();
        $this->helper = new Helper();
        if(session_status() != PHP_SESSION_ACTIVE){ //Se verifica si la sesión no está activa utilizando session_status(), y si no está activa, se inicia con session_start().
            session_start();
        }
    }

   public function showAdmin(){ //esto asegura que solo los usuarios autenticados pueden acceder al panel de administrador.
    $this->helper->checkLoggedIn();
    $genero = $this->peliModel->getGenero();
    $peliculas = $this->peliModel->getMovies();
    $this->peliView->adminPanel($genero, $peliculas);   
    }

    public function register(){ //Obtención de datos del formulario.
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $password = $_POST['contrasenia'];
    
    // si las variables $usuario, $email y $password están definidas y no son vacías. Si se cumplen significa que se proporcionaron datos válidos en el formulario.
        if (isset($usuario) && isset($email)&& isset($password)){
            if (!empty($usuario) && !empty($email)&& !empty($password)){ 

            $hash = password_hash($password,PASSWORD_DEFAULT); //Se utiliza la función password_hash para generar un hash seguro de la contraseña proporcionada.             
            $this->usuarioModel->crearUsuario($usuario,$email,$hash); //Este método se encarga de insertar el nuevo usuario en la base de datos.
            echo('Te has registrado con exito');
            header("Location: home");  
            }else{
                echo('Parametro invalido');
               //error los parametros ingresados no son validos 
            }
        }else{
            echo('Error');
            //Error debe ingresar valores para registrarse correctamente
        }
        

       
    }

    public function login(){
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST["contrasenia"];
        $verificarDatos=$this->usuarioModel->verificarUsuario($usuario);//Hace una consulta a la base de datos para encontrar el usuario ingresado
        if(!empty($verificarDatos)){ //Si no esta vacia es por que se encontro un usuario en la base de datos.
            echo ('ok');
            var_dump($verificarDatos);
            var_dump(password_verify($contrasenia,$verificarDatos->contrasenia));
         if (password_verify($contrasenia,$verificarDatos->contrasenia)){
            echo('ok2');
            //Este if nos verifica que haya un usuario en la base de datos igual al usuario ingresado por nuestro cliente
            $this->helper->login($verificarDatos);
            header("Location: adminPanel");
         }
    
        }else{
            //$this->usuarioView->showError();
            echo ('Login incorrecto');
        }

    }

    public function logout(){
        $this->helper->logout();
        header("Location: home");
    }
}    
?>