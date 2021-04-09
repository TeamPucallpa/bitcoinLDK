<?php 
date_default_timezone_set('America/Lima');
require_once("../config/config.php");
require_once("../models/Usuario.php");
$hoy = date('Y-m-d'); //Consulto la fecha de hoy
$year = date('Y'); //Consulto la fecha de hoy
$mes_actual = date('n');
$obj = new Usuario;
$accion  = isset($_GET["a"]) ? $_GET['a']  : "leer"; 
switch ($accion) {
    case 'save':
      $referido = trim($_POST['referido']);
      $nombre   = trim($_POST['nombre']);
      $apellido = trim($_POST['apellido']);
      $email    = trim($_POST['email']);
      $celular  = trim($_POST['celular']);
      $clave    = trim($_POST['password']);

      if($obj->add_user($nombre,$apellido,$celular,$email,$clave,$hoy,$year,$mes_actual,$referido)){
        header("location:".URL_BASE."views/index?p=inscripciones");
      }else{
        header("location:".URL_BASE."views/index?p=inscripciones");
      }
      break;
    case 'read':
      $resultado = $obj->getUsuario();
      while($fila = $resultado->fetch_array(MYSQLI_ASSOC))
      {
          echo "<tr>
                <td>".$fila["nombre"]."</td>
                <td>".$fila["apellido"]."</td>
                <td>".$fila["celular"]."</td>
                <td>".$fila["correo"]."</td>
                <td>".$fila["registrado"]."</td>
                <td class='text-center'>
                <button type='button' 
                        class='btn btn-danger modalDelete'
                        data-toggle='modal'
                        data-target='#modalDelete'
                        onclick='modalDelete(".$fila["id"].")'>
                        <i class='fas fa-trash'></i>
                </button>
                <button type='button' 
                        class='btn btn-success modalUpdate' 
                        data-toggle='modal' 
                        data-target='#modalUpdate'
                        onclick='modalUpdate(".$fila["id"].",".'"'.$fila["nombre"].'"'.",".'"'.$fila["apellido"].'"'.",".'"'.$fila["celular"].'"'.",".'"'.$fila["correo"].'"'.")'>
                        <i class='fas fa-edit'></i>
              </button>
                </td>
          </tr>";
      }
      break;
    case 'update':
        $id         =  trim($_POST['id']);
        $nombre     =  trim($_POST['nombre']);
        $apellido   =  trim($_POST['apellido']);
        $celular    =  trim($_POST['celular']);
        $correo     =  trim($_POST['correo']);
        $clave      =  trim($_POST['clave']);
        // echo "php__".$id."\n";
        // echo "php__".$nombre."\n";
        // echo "php__".$apellido."\n";
        // echo "php__".$celular."\n";
        // echo "php__".$correo."\n";
        // echo "php__".$clave."\n";
        if(!empty($clave)){
          echo  $obj->update_user_clave($id,$nombre,$apellido,$celular,$correo,$clave) ? "Si" :  "No";
        }else{
          echo  $obj->update_user($id,$nombre,$apellido,$celular,$correo) ? "Si" :  "No" ;
        }
      break;
    case 'delete':
        $id_cliente = $_POST['id'];
        echo $obj->delete_user($id_cliente) ? "Si" : "No";
      break;

    case 'perfil':
      $id = $_POST['id'];
      $resultadoPerfil = $obj->getUserPerfil($id);
          while($val = $resultadoPerfil->fetch_array(MYSQLI_ASSOC))
        {
          $datos = array(
                        "id" => $val['id'],
                        "nombre" => $val['nombre'],
                        "apellido" => $val['apellido'],
                        "celular" =>  $val['celular'],
                        "correo" => $val['correo'],
                        "clave" => $val['clave'],
                    );
        }
        echo json_encode($datos);
      break;

    case 'perfil-update':

          $id_profile = trim($_POST["profile_id"]);
          $nombre = trim($_POST['profile_nombre']);
          $apellido = trim($_POST['profile_apellido']);
          $celular = trim($_POST['profile_celular']);
          $email = trim($_POST['profile_email']);
          $clave = trim($_POST['profile_password']);

          
          // echo "php_".$id_profile;
          // echo "php_".$nombre;
          // echo "php_".$apellido;
          // echo "php_".$celular;
          // echo "php_".$email;
          // echo "php_".$clave;
          
          ;
          ($obj->update_user_clave($id_profile,$nombre,$apellido,$celular,$email,$clave)) ? header("location:".URL_BASE."view/panel?p=perfil") : "error" ;
      break;
    case 'reporte-graficos':
          $datosInfo = array();
          $mesesArray = ["",'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
      
          $resultados_usuarios = $obj->getUsuarioMes();
          while($datosUsuarios = $resultados_usuarios->fetch_array(MYSQLI_ASSOC))
          {
            $resultados_reporte = $obj->getGraficosUsuario($year,$datosUsuarios['mes']);
            while($dataReporte = $resultados_reporte->fetch_array(MYSQLI_ASSOC))
            {     
                $mounthExtraer = $mesesArray[$dataReporte['mes']];
                $total_usuarios = $dataReporte['total_usuario'];
                $clientes = array(
                          "mes" => $mounthExtraer,
                          "total" => "$total_usuarios"
                        );
                $datosInfo[] = $clientes;
            } 
          }


            echo json_encode($datosInfo);
      break;
  default:
    # code...
    break;
}