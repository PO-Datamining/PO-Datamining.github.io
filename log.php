<?php
function generaLogs_sesion($usr,$descripcion)
{
	date_default_timezone_set('America/Mexico_City');
	$hoy = date("Y-m-d H:i:s");
	$f = fopen("logs/Logs_sesion.TXT","a");
	$cadena=$hoy.",".$usr.",".$descripcion;
    fputs($f,$cadena."\r\n") or die("no se pudo crear o insertar el fichero");
    fclose($f);
	
	$f = fopen("logs/Log_".$usr.".TXT","a");
	$cadena=$hoy.",".$usr.",".$descripcion;
    fputs($f,$cadena."\r\n") or die("no se pudo crear o insertar el fichero");
    fclose($f);
}

function generaLogs_sesion_UNION($usr,$descripcion)
{
	date_default_timezone_set('America/Mexico_City');
	$hoy = date("Y-m-d H:i:s");
	$f = fopen("../logs/Logs_sesion.TXT","a");
	$cadena=$hoy.",".$usr.",".$descripcion;
    fputs($f,$cadena."\r\n") or die("no se pudo crear o insertar el fichero");
    fclose($f);
	
	$f = fopen("../logs/Log_".$usr.".TXT","a");
	$cadena=$hoy.",".$usr.",".$descripcion;
    fputs($f,$cadena."\r\n") or die("no se pudo crear o insertar el fichero");
    fclose($f);
}