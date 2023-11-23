<?php

class Helper
{

  function __construct()
  {
  }

  public function login($user) //Para iniciar una sesión PHP y luego guarda algunas variables de sesión relacionadas con el usuario.
  {
    // Inicio la sesión;

    session_start();
    $_SESSION['ID_US'] = $user->id_us;
    $_SESSION['USUARIO'] = $user->usuario;
  }
  // ----
  public function logout()//Este método se encarga de cerrar la sesión del usuario. Utiliza session_start() para iniciar la sesión (si aún no está iniciada) y luego utiliza session_destroy() para destruir la sesión, eliminando todas las variables de sesión.
  {
    session_start();
    session_destroy();
  }
  public function checkLoggedIn() //Este método verifica si el usuario está autenticado. Si la sesión no está activa, la inicia con session_start(). Luego, verifica si la variable de sesión ID_US está definida. Si no está definida, redirige al usuario a una página de inicio de sesión.
  {
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    if (!isset($_SESSION['ID_US'])) {
      header('Location:' . LOGIN);
      die();
    }
  }
  public function getLoggedUserName() //Este método devuelve el nombre de usuario del usuario autenticado. Al igual que en checkLoggedIn(), verifica y, si es necesario, inicia la sesión antes de intentar acceder a $_SESSION['USUARIO'] para obtener el nombre de usuario.
  {
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    return $_SESSION['USUARIO'];
  }
}
