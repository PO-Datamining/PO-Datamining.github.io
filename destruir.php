<?php
session_start();

  if (isset($_SESSION['username'])) {
	$usr=$_SESSION['username'];
	$descripcion="Sesion finalizada";
	require_once"log.php";
	generaLogs_sesion($usr,$descripcion);
  }
  
  
session_destroy();

?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Avenir" rel="stylesheet">
<style>
body {
	font-family:Avenir,sans-serif;
	/*font-family: Verdana,sans-serif;*/
	/*letter-spacing: 2px;*/
}

form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 18px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 220px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

.cancelbtn {
	color: white;
    width: auto;
    padding: 10px 18px;
    background-color: #4E626D;
	font-size:16px;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 24px 0;
}

img.avatar {
    width: 50%;
    border-radius: 50%;
}

.container {
    padding: 10px 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<script type="text/javascript">
function validarPasswd(){
	var p1 = document.getElementById("usr").value;
    var p2 = document.getElementById("pwd").value;
	
	var espacios = false;
	var cont = 0;
	 
	while (!espacios && (cont < p1.length)) {
	  if (p1.charAt(cont) == " " | p2.charAt(cont) == " " ||
	  	  p1.charAt(cont) == "'" | p2.charAt(cont) == "'" ||
		  p1.charAt(cont) == "%" | p2.charAt(cont) == "%" ||
		  p1.charAt(cont) == "@" | p2.charAt(cont) == "@" ||
		  p1.charAt(cont) == "/" | p2.charAt(cont) == "/" ||
		  p1.charAt(cont) == "$" | p2.charAt(cont) == "$" ||
		  p1.charAt(cont) == "'" | p2.charAt(cont) == "'" ||
		  p1.charAt(cont) == "\"" | p2.charAt(cont) == "\"" ||
		  p1.charAt(cont) == "#" | p2.charAt(cont) == "#" 
	     )
		espacios = true;
	  cont++;
	}
	 
	if (espacios) {
	  alert (" -- Usuario/Contraseña no valido -- ");
	  return false;
	}
	
	
}
</script>
<body>

<h2 align="center">Sesi&oacute;n Finalizada</h2>

<table width="300" border="0" align="center">
  <tr>
    <td>

<form action="index.php">
  <div class="imgcontainer">
    <img src="imagenes/logo-simat.png" alt="Avatarr" class="avatarr" style="width:160px; display:block;margin:0 auto 0 auto;">
  </div>

<div align="center">
  <div class="container" style="background-color:#f1f1f1">
  <input type="submit" value="Iniciar Sesi&oacute;n" class="cancelbtn"/> 
  </div>
</div>  
</form>

&nbsp;</td>
  </tr>
</table>
</body>
</html>