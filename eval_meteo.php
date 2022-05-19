<?php
session_start();
#require "man_funciones.php";
//if (isset($_POST["psw"]) & isset($_POST["uname"]))
 //{
	 
	 $where="server";
	 
	 //$email = $_POST["email"];
	 //$captcha = sha1($_POST["captcha"]);
	 //@$cookie_captcha = $_COOKIE["captcha"];
	 $pw = "aterrazas";
	 $usr = "aterrazas";
	 
	 //echo "usr and pw: ".$usr." ".$pw;
	 
	 

	//Acciones ,consulta bd etc
	//echo "<p style='color:blue' align='center'><em>Validando Datos Enviados</em></p>";
	//setcookie("captcha",'', time()-3600);
	
	if($where=="local")
	{
		$con_inicio=mysqli_connect("192.168.9.116","djgonzalez","djgonzalez","modelo_aqfsmexdf");
	}
	else
	if($where=="server")
	{
		$con_inicio=mysqli_connect("192.168.9.116","badecabasico","badecabasico116","modelo_aqfsmexdf");
	}
	
	$consulta="SELECT user,password,nivel_acceso from usuarios_evaluacionm where user='$usr' " ;
	$sel=mysqli_query($con_inicio,$consulta) or die (mysqli_error($con_inicio));
	
	$sesion=mysqli_fetch_array($sel);//$email==$sesion['mail'] &&
	mysqli_close($con_inicio);
	
	//if(  $pw==$sesion['password'])
	//{
		$_SESSION['username'] = $usr;
		$descripcion="Sesion Iniciada";
		$level=$_SESSION['nivel_acceso']=$sesion['nivel_acceso'];
		require("log.php");
		generaLogs_sesion($usr,$descripcion);
		//echo "<p style='color:blue' align='center'> Sesion Exitosa</p>"; 
		
		//all manager here
		//------------------------------------------------------
		
		//$usr="invited"
		?>


        <!DOCTYPE html>
        <html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href='//fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
        <style>
        body {margin:0;
            /*letter-spacing: 2px;*/
            font-family: 'Quattrocento Sans';font-size: 18px;
            /*<!--background:url(imagenes/logo-simat.png)-->*/
        }
        
        .icon-bar {
            width: 100%;
            text-align: center;
			color: white;
            background-color: #555;
            overflow: auto;
        }
        
        .icon-bar a {
            
			<?php
			$level=6;
			if($level==6){
			?>
            width: 33%;
			<?php
			}
			
            ?>
            
			
            padding: 50px 0;
            float: left;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }
        
        .icon-bar a:hover {
            background-color: #000;
        }
        
        .active {
            background-color: #4CAF50 !important;
        }
        a.nounderline:link   
        {   
         text-decoration:none;   
        }   
        </style>
        <body>
        
        <div class="icon-bar"; padding: 50px 0;>
        <h1>Evaluacion Meteorología</h1>
        </div>
        
        
		<?php
        require("bar.php")
        ?>
        <br><br>
       
        </body>
        </html>
