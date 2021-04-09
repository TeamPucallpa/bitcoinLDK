<?php
require_once("Conexion.php");
class Usuario{

/* METODO CONSULTAR DE LOGIN DE USUARIO */ 
public function getLoginUser()
{
	$cn = new conexion();
	$cn->conectar();
	$sql = "SELECT * FROM tbl_usuarios";
	return $cn->getEjecucionQuery($sql);
}


/* METODO CONSULTAR DE LOGIN DE USUARIO */ 
public function getUserPerfil($id)
{
	$cn = new conexion();
	$cn->conectar();
	$sql = "SELECT * FROM tbl_usuarios WHERE id = '$id' ";
	return $cn->getEjecucionQuery($sql);
}

/* METODO CONSULTAR DE LOGIN DE USUARIO */ 
public function getUsuario()
{
	$cn = new conexion();
	$cn->conectar();
	$sql = "SELECT * FROM tbl_usuarios WHERE rol = 'usuario' ";
	return $cn->getEjecucionQuery($sql);
}

public function getUsuarioMes()
{
	$cn = new conexion();
	$cn->conectar();
	$sql = "SELECT mes FROM tbl_usuarios WHERE rol = 'usuario' 
					GROUP BY mes HAVING COUNT(*) > 0 ORDER BY mes
				 ";
	return $cn->getEjecucionQuery($sql);
}

/* Saber cuantas personas se registraron por fecha*/
public function getGraficosUsuario($year,$mes){
	$cn = new conexion();
	$cn->conectar();
	$sql = "SELECT mes, COUNT(*) as total_usuario FROM tbl_usuarios 
					WHERE rol = 'usuario' AND anio = '$year' AND mes = '$mes' 
					GROUP BY mes HAVING COUNT(*) > 0 ORDER BY mes";
	return $cn->getEjecucionQuery($sql);
}


/* REGISTRAR USUARIO */
public function add_user($nombre,$apellido,$celular,$correo,$clave,$fecha,$anio,$mes,$referido){
	$cn = new conexion();
	$cn->conectar();
	$sql="INSERT INTO tbl_usuarios(nombre,apellido,celular,correo,clave,fecha,anio,mes,referido) VALUES ('$nombre','$apellido','$celular','$correo','$clave','$fecha','$anio','$mes','$referido')";
	return $cn->getEjecucionQuery($sql);
}

public function delete_user($id){
	$cn = new conexion();
	$cn->conectar();
	$sql="DELETE FROM tbl_usuarios WHERE id = '$id' ";
	return $cn->getEjecucionQuery($sql);
}

public function update_user($id,$nombre,$apellido,$celular,$correo){
	$cn = new conexion();
	$cn->conectar();
	$sql="UPDATE tbl_usuarios 
				SET nombre = '$nombre', 
						apellido = '$apellido',
						celular = '$celular',
						correo = '$correo' 
				WHERE id='$id' ";
	return $cn->getEjecucionQuery($sql);
}


public function update_user_clave($id,$nombre,$apellido,$celular,$correo,$clave){
	$cn = new conexion();
	$cn->conectar();
	$sql="UPDATE tbl_usuarios 
				SET 
						nombre = '$nombre', 
						apellido = '$apellido',
						celular = '$celular',
						correo = '$correo',
						clave = '$clave'
				WHERE id = '$id' ";
	return $cn->getEjecucionQuery($sql);
}

}