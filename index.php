

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
			$level=1;
			if($level==1){
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
        <img class="mySlides" src="imagenes/tp logo.png"
          style="width:25%;align:left;" > <h1>Bienvenido</h1>
        </div>
        
        
		<?php
        require("bar.php")
        ?>
        <br><br>
        <section align="center">
          <img class="mySlides" src="imagenes/tp logo.png"
          style="width:100%; align:center" >
        </section>
        </body>
        </html>
