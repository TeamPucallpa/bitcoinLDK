<?php
require_once("../models/Usuario.php");

$obj=new Usuario();
$resultado=$obj->getLoginUser();

$encontrados=0;

$user=$_POST['email_celular'];
$clave=$_POST['password'];

$codigo=0;
$nombre="";
$privilegio="";
$ruta="";

while ($row=$resultado->fetch_array(MYSQLI_ASSOC))
{
	if ($row['correo']==$user || $row['celular']==$user)
	{
		if ($row['clave']==$clave) 
		{

    			#encontro al usuario
          $encontrados=1;
          session_start();	#creamos una seccion
          $_SESSION['user'] = $row; #adjuntamos todo el registro correcto
                            #a la variable session
          break;
		}else
		{
			$encontrado=0;
		}

	}else{
          $encontrados=0;
	}
}

if ($encontrados)
{
	  $ruta="Location: ../views/index"; 
	  header($ruta);
}else{
	 $ruta="Location: ../views/index?msg=danger"; 
 	 header($ruta);
}



?>