<div class="icon-bar" >


<?php
if($level==1)
{
?>	
    <a href= "evaluacionm.php";  style="text-decoration:none" ><i class="material-icons" style="font-size:30px;">timeline</i><br>Resumen General</a>
	<a href= "tiempo_real.php";  style="text-decoration:none" ><i class="material-icons" style="font-size:30px;">schedule</i><br>Comparacion Tiempo Real</a>
    <a href="18z_o3_pm25.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">assignment</i><br>Reporte 18Z</a>
	<a href="00z_o3_pm25.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">assignment</i><br>Reporte 00Z</a>
	<a href="eval_aire.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Evaluacion Calidad del Aire</a>
	<a href="eval_meteo.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Evaluacion Meteorología</a>
    <a href="historia.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">description</i><br>PDF Historia</a>
	<a href="informacion.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">help_outline</i><br>Info</a>
    
<?php
	}
?>

<?php
if($level==2)
{
?>	
    	
	<a href="18z_o3_pm25.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Modelo 18Z</a>
    <a href="00z_o3_pm25.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_increase</i><br>Modelo 00Z</a>
        
<?php
	}
?>

<?php
if($level==3)
{
?>	
    	
	<a href="18z_o3_pm25.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Evaluaci&oacute;n 18Z O3 y PM25</a>
    <a href="18z_moviles.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_increase</i><br>Evaluaci&oacute;n 18Z Moviles O3 y PM25</a>
	<a href="18z_no2_co_so2.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_increase</i><br>Evaluaci&oacute;n 18Z NO2 CO y SO2</a>
        
<?php
	}
?>

<?php
if($level==4)
{
?>	
    	
	<a href="00z_o3_pm25.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Evaluaci&oacute;n 00Z O3 y PM25</a>
    <a href="00z_moviles.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_increase</i><br>Evaluaci&oacute;n 00Z Moviles O3 y PM25</a>
	<a href="00z_no2_co_so2.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_increase</i><br>Evaluaci&oacute;n 00Z NO2 CO y SO2</a>
        
<?php
	}
?>



<?php
if($level==5)
{
?>	
    	
	<a href="EVEST18z/menu.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Modelo 18z</a>
	<a href="EVEST52z/menu.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Modelo 00z</a>
    
	
    
<?php
	}
?>

<?php
if($level==6)
{
?>	
    	
	<a href="METEORO18z/menu.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Modelo 18z</a>
	<a href="METEORO52z/menu.php"  style="text-decoration:none"><i class="material-icons" style="font-size:30px;">format_indent_decrease</i><br>Modelo 00z</a>
    
	
    
<?php
	}
?>

<?php
if($level!=1)
{
?>	
    <a href= "menu.php";  style="text-decoration:none" ><i class="material-icons" style="font-size:30px;">home</i><br>Menu</a> 
    
<?php
	}
?>

<a href="destruir.php" style="text-decoration:none"><i class="material-icons" style="font-size:30px;">exit_to_app</i><br>Cerrar Sesi&oacute;n</a>

</div>
