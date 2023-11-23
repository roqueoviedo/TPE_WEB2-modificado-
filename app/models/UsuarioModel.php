<?php
class UsuarioModel{
    private $db;
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_movieonline;charset=utf8', 'root', '');
  }

  public function crearUsuario($usuario,$email,$contrasenia){
    $sentencia = $this->db->prepare('INSERT INTO db_usuario (usuario, email, contrasenia) VALUES (?,?,?)');
    $sentencia->execute([$usuario,$email,$contrasenia]);
  }

  public function getUsuario($email){
      $sentencia = $this->db->prepare("SELECT * FROM db_usuario WHERE email =?");
      $sentencia->execute(array($email));
      return $sentencia->fetch();
    }

  public function verificarUsuario($usuario){
    $query = $this->db->prepare('SELECT * FROM db_usuario WHERE usuario = ?');
        $query->execute(array($usuario));
        return $query->fetch(PDO::FETCH_OBJ);
  }

 
  
}


?>