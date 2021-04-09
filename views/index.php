<?php 
ob_start();
session_start();
require("../config/config.php");
if(isset($_SESSION['user'])){
  $accion =  isset($_GET['p']) ? $_GET['p'] : "leer" ;
  #El usuario accedio correctamente
  $idUsuario =  $_SESSION['user']['id'];
  $nombre    =  ucwords(strtolower($_SESSION['user']['nombre']));
  $apellido  =  ucwords(strtolower($_SESSION['user']['apellido']));
  $correo    =  $_SESSION['user']['correo'];
  $celular   =  $_SESSION['user']['celular'];
  $rol       =  ucwords(strtolower($_SESSION['user']['rol']));
  require_once("cpanel.php");
}else{
  require_once("login.php");
}
ob_end_flush();
 ?> 