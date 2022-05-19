<?php
session_start();
set_time_limit(0);
date_default_timezone_set('America/Mexico_City');
$restringir=true;

	$usr = 'aterrazas' ;
	$level=4;
	$descripcion="evaluacionm_n_00z.php - Evaluación del modelo - ok acceso nivel2";
	require("log.php");
	generaLogs_sesion($usr,$descripcion);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<title>Evaluación modelo</title>
</head>
<style type="text/css">
.icon-bar {
	width: 100%;
	text-align: center;
	background-color: #555;
	overflow: auto;
}

.icon-bar a {
	width: 20%;
	padding: 5px 0;
	float: left;
	transition: all 0.3s ease;
	color: white;
	font-size: 15px;
}

.icon-bar a:hover {
	background-color: #999;
	color: white;
}


a.nounderline:link   
{   
 text-decoration:none;   
}  
</style>
<body>
<div class="navbar navbar-fixed-top";>
<?php
require("bar.php");
?>
</div>
<?php
    include('EMOD/00z_no2_co_so2.html');
?>
</body>
</html>
