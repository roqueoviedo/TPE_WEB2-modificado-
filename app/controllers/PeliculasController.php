 <?php
require_once 'app/models/PeliculasModel.php';
require_once 'app/views/PeliculasView.php';
class PeliculasController{ // Maneja las solucitudes relacionas a las peliculas.
   private $model;
   private $view;

   public function __construct() {
    $this->model = new PeliculasModel(); // accede y manipula los datos de las películas
    $this->view = new PeliculasView(); // representa los datos de las películas al usuario
   }
   public function showHome() { //muestra la página de inicio de la aplicación de películas
    $this->view->showHome();
   }
   
   public function getAllMovies() {
    $movies = $this->model->getMovies(); //Realiza una peticion al modelo para que me devuelva todas las peliculas
    // actualizo la vista
    $this->view->showAllMovies($movies); // Realiza una peticion para que me muestre todas las peliculas
   }

   public function showXgenero($genero) {
   $generos = $this->model->getXgenero($genero); //Consulta al modelo y esa consulta se va a almacenar en una variable. 
   $this->view->showByGenre($generos); //Llamada a la vista 
   }

   public function showPeli($idPeli) {
   $pelicula = $this->model->consultaDescripcion($idPeli);
   $this->view->showByMovie($pelicula);
   }

   //Se agrega una nueva pelicula en la base de datos.

   //Se recogen los datos del formulario utilizando $_POST y se asignan a variables locales.
   public function nuevaPeli(){
   $titulo= $_POST['titulo']; 
   $anio= $_POST['anio'];
   $director= $_POST['director']; 
   $clasificacion= $_POST['clasificacion']; 
   $sinopsis= $_POST['sinopsis']; 
   $fk_genero= $_POST['fk_genero'];

   //La variable $_POST está definida y no está vacía y la variable $fk_genero no está vacía
   if ((isset($_POST)&& !empty($_POST))&& !empty($fk_genero)){ 
      $this->model->agregarPeli($titulo,$anio,$director,$clasificacion,$sinopsis,$fk_genero); //Llama al método agregarPeli() de la propiedad $model,El método agregarPeli() agrega una nueva película a la base de datos.
      $this->view->exito();// El método exito() muestra un mensaje de éxito al usuario
   }else{
      //Si datos de peliculas no son correctos.
      $this->view->error();
   }
   }

   public function eliminarPeli(){
      // Obtén el ID de la película que deseas eliminar desde $_POST
      $id = $_POST['id'];
   
      // Verifica si se proporcionó un ID válido
      if (!empty($id)) { 
         // Llama al método en tu modelo para eliminar la película
         $this->model->eliminarPelicula($id);
         $this->view->exito();
      } else {
         // Si no se proporcionó un ID válido, muestra un mensaje de error
         $this->view->error();
      }
   }

   public function editarPeli(){
      // Obtén el ID de la película que deseas editar desde $_POST
   $id= $_POST['id'];

   // Obtén los datos actualizados del formulario
   $titulo = $_POST['titulo'];
   $anio = $_POST['anio'];
   $director = $_POST['director'];
   $clasificacion = $_POST['clasificacion'];
   $sinopsis = $_POST['sinopsis'];
   $fk_genero = $_POST['fk_genero'];

   // Verifica si se proporcionó un ID válido
   if (!empty($id)) {
      // Llama al método en tu modelo para actualizar la información de la película
      $this->model->editarPelicula($titulo, $anio, $director, $clasificacion, $sinopsis, $fk_genero, $id);
      $this->view->exito();
   } else {
      // Si no se proporcionó un ID válido, muestra un mensaje de error
      $this->view->error();
   }
   }
}