<?php
session_start();
ini_set('display_errors', false);//mostrar u ocultar todos los errores
error_reporting(E_ALL);
$ciudad="Mexico";
switch ($ciudad) {
	case 'Mexico':
		date_default_timezone_set("America/Mexico_City");
	break;
	default:
		date_default_timezone_set("America/Mexico_City");
		break;
}
class Conectar
{
	protected function con()
	{
		$con = new mysqli("localhost","db_root","root","")or die("error de conexion comuniquese con su Administrador e");
		$con->set_charset("utf8");
		return $con;
	}
	protected function con_web93social()
	{
		$con = new mysqli("localhost","db_root","root","")or die("error de conexion comuniquese con su Administrador e");
		$con->set_charset("utf8");
		return $con;
	}
	protected function comillas_inteligentes($valor)
	{
		$conectar=Conectar::con();
		if(get_magic_quotes_gpc()){
			$valor=stripslashes($valor);
		}
		if(!is_numeric($valor)){
			$valor="'".$conectar->real_escape_string($valor)."'";
		}
		return $valor;
	}
	public static function ruta_web(){
		return "//".$_SERVER["HTTP_HOST"]."/PROYECTOAUS/";
	}
	public static function ruta_plantilla(){
		return "//".$_SERVER["HTTP_HOST"]."/PROYECTOAUS/";
	}
}
?>