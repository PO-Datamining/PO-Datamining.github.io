<!DOCTYPE html>
<html>
<link href='//fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Avenir" rel="stylesheet">
<style>
body {
	/*letter-spacing: 2px;*/
	/*font-family: 'Quattrocento Sans';font-size: 22px;*/
	font-family: 'Avenir',sans-serif ;
	font-size:18px;
	background-color:#555
	/*#008080*/
	
}

form {
    border: 10px solid #f1f1f1;
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
    background-color: #5499C7;
    color: white;
    padding: 14px 120px;
    margin: 8px ,8px, 8px, 8px;
    /*border: none;*/
    /*cursor: pointer;*/
   /* width: 50%;*/
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #4E626D;
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
	
	if(p1.length<5 | p2.length<5){
	
		espacios = true;
		
	}else{
	
		while (!espacios && (cont < p1.length)) {
		  if (p1.charAt(cont) == " " | p2.charAt(cont) == " " ||
			  p1.charAt(cont) == "'" | p2.charAt(cont) == "'" ||
			  p1.charAt(cont) == "%" | p2.charAt(cont) == "%" ||
			  p1.charAt(cont) == "_" | p2.charAt(cont) == "_" ||
			  p1.charAt(cont) == "/" | p2.charAt(cont) == "/" ||
			  p1.charAt(cont) == "$" | p2.charAt(cont) == "$" ||
			  p1.charAt(cont) == "'" | p2.charAt(cont) == "'" ||
			  p1.charAt(cont) == "\"" | p2.charAt(cont) == "\"" ||
			  p1.charAt(cont) == "#" | p2.charAt(cont) == "#" 
			 )
			espacios = true;
		  cont++;
		}
	}
	 
	if (espacios) {
	  alert (" -- Usuario/Contrasena incorrecta -- ");
	  return false;
	}
	
	
}
</script>
<body>



<br><br><br>
<table width="300" border="0" align="center" style="background-color:#FFF">
  <tr>
    <td>

<form method="post"  action="menu.php" id="miformulario">
  <div class="imgcontainer">
  	<h2 align="center">Acceso</h2>
    <img src="imagenes/logo-simat.png" alt="Avatar"  style="width:160px; display:block;margin:0 auto 0 auto;">
  </div>

<div align="center" style="width:500px">


  <div class="container" align="center">
  <label><b style="color:#F00"></b></label>
    <label><b>Usuario</b></label>
    <input type="text" placeholder="Ingresa nombre de usuario" name="uname" required id="usr">

    <label><b>Contrase&ntilde;a</b></label>
    <input type="password" placeholder="Ingresa contrase&ntilde;a" name="psw" required id="pwd">
     <br>  
    <button type="submit"><b style="font-size:16px">Iniciar</b></button>
    
  </div>

  <div class="container">
    <button type="button" onClick="limpiar()" value="Reset form" class="cancelbtn" ><b style="font-size:16px">Cancelar</b></button>
    
  </div>
</div>  
</form>
<script>
function limpiar() {
    document.getElementById("miformulario").reset();
}
</script>
</td>
  </tr>
</table>

</body>
</html>

