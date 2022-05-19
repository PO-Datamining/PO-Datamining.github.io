<?php
session_start();
set_time_limit(0);
date_default_timezone_set('America/Mexico_City');
require("man_funciones.php");

//$archivo="2015-12-02_Numeraria.pdf";

if(isset($_SESSION['username']) )
{
	$usr = $_SESSION['username'];
	$level = $_SESSION['nivel_acceso'];
	$descripcion="historia.php - Historia PDF";
	require("log.php");
	generaLogs_sesion($usr,$descripcion);
	$maxfecha=date("Y-m-d");
?>
<!doctype html>
<html>
<head>
<script>
function hola()
{
	element = document.getElementById("detalles");
        
	if (element.style.display=='none') {
		element.style.display='block';
	}
	else {
		element.style.display='none';
	}
}
</script>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<title>Información</title>
</head>
<style> 
.mi_info{
    border: 1px solid black;
    background-color: lightblue;
    padding-top: 20px;
    padding-right: 10%;
    padding-bottom: 50px;
    padding-left: 10%;
}



.contenedor-responsive {
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 30px;
  height: 0;
  overflow: hidden;
}
.contenedor-responsive iframe,
.contenedor-responsive object,
.contenedor-responsive embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
body {margin:0;
	/*letter-spacing: 2px;*/
	font-family: 'Open Sans', sans-serif;
	/*<!--background:url(imagenes/logo-simat.png)-->*/
	text-align:justify;
}

.icon-bar {
	width: 100%;
	text-align: center;
	background-color: #555;
	overflow: auto;
}

.icon-bar a {
	width: 25%;
	padding: 5px 0;
	float: left;
	transition: all 0.3s ease;
	color: white;
	font-size: 15px;
}
.icon-bar a:hover {
	background-color: #000;
}


.detalles-bar a:hover {
	background-color: #FFF;
}
.detalles-bar a {
	padding: 5px 0;
	transition: all 0.3s ease;
	color: #039;
}

.active {
	background-color: #4CAF50 !important;
}
a.nounderline:link   
{   
 text-decoration:none;   
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 200px;
    background-color: #58ACFA;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #0174DF;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    /*padding: 20px;*/
	alignment-adjust:central;
	width:100%;
	padding-top: 10px;
	padding-bottom: 10px;
}

h1{ font-size:150%}

.descarga {
	width: 100px;
	text-align: justify;
	background-color: #555;
	overflow: auto;
	padding: 14px 20px;
}

.descarga a {
	
	width: 100px;
	float: left;
	transition: all 0.3s ease;
	color: white;
	font-size: 15px;
}

.descarga a:hover {
	background-color: #000;
}     
</style>
<body>
<?php
require("bar.php");
if($level!=1){
?>
<div class="mi_info">
<h1>EMOD</h1>
<p>
	Esta Herramienta ayuda a evaluar el modelo AQFSMexDF con las salidas de 18z
	y 00z de la NOAA. Est&#225; dividido en cuatro secciones:
</p>
<p>
	1. Informe Diario
</p>
<p>
	2. PDF Historia
</p>
<p>
	3. Evaluaci&#243;n 18z
</p>
<p>
	4. Evaluaci&#243;n 00z
</p>
<p>
	<strong>1. Informe diario: </strong>
</p>
<p>
	Esta secci&#243;n contiene el informe diario del modelo, que presenta para
	el d&#237;a de hoy y ma&#241;ana lo siguiente:
</p>
<ul>
	<li>
		El m&#225;ximo diario de ZMCM con su desviaci&#243;n est&#225;ndar del
		mes actual de la estaci&#243;n que lo presenta.
	</li>
	<li>
		La probabilidad de una contingencia calculada para cada modelo.
	</li>
	<li>
		El m&#225;ximo de las estaciones con la desviaci&#243;n est&#225;ndar
		del mes de cada estaci&#243;n.
	</li>
	<li>
		La desviaci&#243;n est&#225;ndar por mes y la general de cada modelo.
	</li>
	<li>
		Las series de tiempo con 15 d&#237;as atr&#225;s y los dos d&#237;as
		pronosticados.
	</li>
</ul>
<hr>
<p>
	<strong>2. PDF Historia:</strong>
</p>
<p>
	En esta secci&#243;n se genera un archivo PDF, en los cuales se reporta
	toda la informaci&#243;n generada en la secci&#243;n "Evaluaci&#243;n del
	Modelo" y se pueden consultar los reportes hist&#243;ricos. Se generan dos
	archivos los cuales est&#225;n relacionados con la salida del modelo 18z o
	00z de acuerdo a los archivos meteorol&#243;gicos de la NOAA.
</p>
<p>
	NOTA: PDF 00Z disponibles desde 2017-01-03 y 18Z desde 2017-02-01
</p>
</div>
<?php
}
if($level==2)
{
?>
<div class="mi_info">
<h1 id="home">Evaluación del modelo (EMOD)</h1>
<p>
	Esta Herramienta ayuda a evaluar el modelo AQFSMexDF con las salidas de 18z
	y 00z de la NOAA. Est&#225; dividido en cuatro secciones:
</p>
<div class="detalles-bar"; style="text-decoration:none">
<p>
	<a href="#seccion1" style="text-decoration:none">1. Informe Diario </a>
</p>
<p>
	<a href="#seccion2" style="text-decoration:none">2. PDF Historia </a>
</p>
<p>
	<a href="#seccion34" style="text-decoration:none">3. Evaluaci&#243;n 18z </a>
</p>
<p>
	<a href="#seccion34" style="text-decoration:none"> 4. Evaluaci&#243;n 00z:</a>
</p>

<button name="btndetalles" onClick="javascript:hola()" >Detalles</button>
<ul id="detalles" style="display:none">
<li><a href="#uno" style="text-decoration:none">fecha actual + un día</a></li>
<li><a href="#dos" style="text-decoration:none">fecha actual</a></li>
<li><a href="#tres" style="text-decoration:none">fecha actual - un d&#237;a</a></li>
<li><a href="#cuatro" style="text-decoration:none">Estad&#237;stica</a></li>
<li><a href="#cinco" style="text-decoration:none">ST</a></li>
<li><a href="#seis" style="text-decoration:none">M&#225;ximo</a></li>
<li><a href="#siete" style="text-decoration:none">Probabilidad</a></li>
<li><a href="#ocho" style="text-decoration:none">Detalles</a></li>
<li><a href="#nueve" style="text-decoration:none">Diferencias</a></li>
<li><a href="#diez" style="text-decoration:none">ST sitio</a></li>
<li><a href="#once" style="text-decoration:none">Probabilidad Sitio</a></li>
<li><a href="#doce" style="text-decoration:none">Diferencias sitio</a></li>
</ul>
</div>
<hr>
<p>
	<h2 id="seccion1">1. Informe diario: </h2>
</p>
<p>
	Esta secci&#243;n contiene el informe diario del modelo, que presenta para
	el d&#237;a de hoy y ma&#241;ana lo siguiente:
</p>
<ul>
	<li>
		El m&#225;ximo diario de ZMCM con su desviaci&#243;n est&#225;ndar del
		mes actual de la estaci&#243;n que lo presenta.
	</li>
	<li>
		La probabilidad de una contingencia calculada para cada modelo.
	</li>
	<li>
		El m&#225;ximo de las estaciones con la desviaci&#243;n est&#225;ndar
		del mes de cada estaci&#243;n.
	</li>
	<li>
		La desviaci&#243;n est&#225;ndar por mes y la general de cada modelo.
	</li>
	<li>
		Las series de tiempo con 15 d&#237;as atr&#225;s y los dos d&#237;as
		pronosticados.
	</li>
</ul>
<hr>
<p>
	<h2 id="seccion2">2. PDF Historia:</h2>
</p>
<p>
	En esta secci&#243;n se genera un archivo PDF, en los cuales se reporta
	toda la informaci&#243;n generada en la secci&#243;n "Evaluaci&#243;n del
	Modelo" y se pueden consultar los reportes hist&#243;ricos. Se generan dos
	archivos los cuales est&#225;n relacionados con la salida del modelo 18z o
	00z de acuerdo a los archivos meteorol&#243;gicos de la NOAA.
</p>
<p>
	NOTA: PDF 00Z disponibles desde 2017-01-03 y 18Z desde 2017-02-01
</p>

<hr>
<h2 id="seccion34">3 y 4. Evaluaci&#243;n 18z y Evaluaci&#243;n 00z:</h2>

<p>
	Estas secciones presentan la evaluaci&#243;n estad&#237;stica del modelo
	con la salida 18z y 00z de la NOAA respectivamente y est&#225;n compuesta
	por:
</p>
<ul>
	<li id="uno">
		<strong><u>fecha actual + un d&#237;a</u>: </strong>
		Presenta dos mapas con la ubicaci&#243;n de las estaciones de monitoreo
		de la RAMA y cada una muestra el valor m&#225;ximo pronosticado para
		ma&#241;ana. Del lado izquierdo es la salida del pron&#243;stico de 48
		h y del lado derecho es la salida del modelo con el ajuste por el
		filtro de Kalman. En la parte superior de los mapas se observa la
		estaci&#243;n o estaciones que presentan el m&#225;ximo del d&#237;a en
		ppb y la categor&#237;a que corresponde con en el &#237;ndice
		metropolitano de la calidad del aire (IMECA).
	</li>
	<li id="dos">
		<strong><u>fecha actual</u>: </strong>
		Presenta cuatro mapas con la ubicaci&#243;n de las estaciones de
		monitoreo de la RAMA y cada una muestra el valor m&#225;ximo
		pronosticado para el d&#237;a de hoy. Del lado superior izquierdo es la
		salida del pron&#243;stico de 24 h y del lado superior derecho es la
		salida del modelo con el ajuste por el filtro de Kalman de 24h. En la
		ubicaci&#243;n inferior izquierdo es la salida de pron&#243;stico
		realizada ayer para 48 h que corresponde al d&#237;a de hoy, por
		&#250;ltimo, del lado inferior derecho es la salida del pron&#243;stico
		realizada ayer de 48 h que corresponde al d&#237;a de hoy y que incluye
		el ajuste por el filtro de Kalman.
	</li>
</ul>
<p>
	As&#237; mismo, en la parte superior de los mapas se observa la
	estaci&#243;n o estaciones que presentan el m&#225;ximo del d&#237;a en ppb
	y la categor&#237;a que corresponde con en el &#237;ndice metropolitano de
	la calidad del aire (IMECA).
</p>
<ul>
	<li id="tres">
		<strong><u>fecha actual - un d&#237;a</u>: </strong>
		Presenta 5 mapas con la ubicaci&#243;n de las estaciones de monitoreo
		de la RAMA y cada una muestra el valor m&#225;ximo pronosticado para el
		d&#237;a de ayer. Del lado superior izquierdo se encuentran los datos
		observados (medidos en cada una de las estaciones de la RAMA), del lado
		superior derecho es el modelo de 24 h realizada ayer. Abajo se observan
		tres mapas: lado izquierdo corresponde al modelo de 48 h pronosticado
		antier para ayer; en el centro y derecha los modelos con el ajuste de
		Kalman para el modelo de 24 horas y 48 horas respectivamente. En la
		parte superior de cada mapa se encuentra la estaci&#243;n o estaciones
		que presentan el m&#225;ximo del d&#237;a en ppb y la categor&#237;a
		que corresponde con en el &#237;ndice metropolitano de la calidad del
		aire (IMECA).
	</li>
	<li id="cuatro">
		<strong><u>Estad&#237;stica</u>: </strong>
		En esta opci&#243;n se observan los indicadores con los que se
		eval&#250;an los modelos contra los datos observados del d&#237;a de
		ayer. Los indicadores son:
	</li>
</ul>
<p>
	o Mean bias (MB), es el promedio de la diferencia entre los datos modelados
	y los observados, y muestra si las predicciones sobreestiman o subestiman.
</p>
<p>
	o Mean Gross Error (MGE), es el promedio del error absoluto, e indica el
	error medio independientemente de si la estimaci&#243;n esta sobre o sub
	estimada.
</p>
<p>
	o Normallised mean gross error (NMGE), este sesgo promedio normalizado es
	&#250;til para comparar los contaminantes a diferente escala de
	concentraci&#243;n y se normaliza dividiendo la diferencia absoluta entre
	modelado y observado, eliminando el efecto de sobre o sub estimaci&#243;n
	de la predicci&#243;n, entre las concentraciones observadas.
</p>
<p>
	o Root mean squared error (RMSE), este indicador es com&#250;nmente
	utilizado en estad&#237;stica y muestra en general que tan cercanos son los
	valores modelados a los observados.
</p>
<p>
	o Correlation coefficient (r), el coeficiente de correlaci&#243;n (Pearson)
	es una medida que muestra la fuerte relaci&#243;n lineal entre dos
	variables. Si existe una relaci&#243;n lineal perfecta con una pendiente
	positiva entre dos variables, r=1. Si la pendiente es negativa r=-1. Si la
	r=0 significa que no existe relaci&#243;n entre las variables.
</p>
<p>
	o Coefficient of Efficiency (COE), este indicador permite evaluar el
	rendimiento del modelo, es simple y f&#225;cil de interpretar. Un modelo
	perfecto tiene un COE=1, este indicador no tiene un l&#237;mite inferior,
	sin embargo, el COE=0 tiene un significado fundamental y muestra que el
	modelo no es capaz de predecir los valores observados, solo la media
	observada. Por lo tanto, dado que el modelo solo puede explicar la media
	observada y no la variaci&#243;n de los valores observados, este modelo no
	tiene ninguna ventaja predictiva. Cuando hay valores negativos en el COE,
	el modelo es menos eficaz que la media observada en la predicci&#243;n de
	la variaci&#243;n en las observaciones.
</p>
<p>
	o Index of Agreement (IOA), este &#237;ndice se utiliza com&#250;nmente en
	la evaluaci&#243;n de modelos. Su escala va de -1 a +1, cuando los valores
	son cercanos a +1 significa que el modelo tiene un mejor rendimiento. Una
	IOA=0.5, por ejemplo, indica que la suma de la magnitud del error es la
	mitad de la suma de la magnitud de la desviaci&#243;n observada; si
	IOA=0.0, significa que la suma de las magnitudes del error y la suma de las
	magnitudes de la desviaci&#243;n observada son equivalentes. Si IOA=-0.5,
	indica que la suma de las magnitudes del error es el doble de la suma de
	las magnitudes perfectas de desviaci&#243;n del modelo y de desviaci&#243;n
	observada. Los valores de IOA cercanos a -1.0, pueden significar que las
	desviaciones estimadas por el modelo sobre los observados son estimaciones
	malas de la desviaci&#243;n de los observados; pero tambi&#233;n puede
	significar que hay poca variabilidad observada, por lo tanto, se necesita
	tomar con cuidado la IOA cuando es cercana a -1.
</p>
<p>
	Estos indicadores se calcularon para las 4 opciones de las salidas del
	modelo.
</p>
<ul>
	<li id="cinco">
		<strong><u>ST</u>: </strong>
		Aqu&#237; se encuentran dos gr&#225;ficos de series de tiempo por
		estaci&#243;n de 12 d&#237;as atr&#225;s y dos d&#237;as posteriores a
		la fecha actual, el gr&#225;fico del lado izquierda contiene la
		informaci&#243;n para el modelo de 24 y el ajuste con el filtro de
		Kalman, el segundo gr&#225;fico del lado derecho muestra la
		informaci&#243;n de la simulaci&#243;n de 48 horas y su ajuste con el
		filtro de Kalman.
	</li>
	<li id="seis">
		<strong><u>M&#225;ximo</u>: </strong>
		Contiene una serie de tiempo din&#225;mica donde se presentan los
		m&#225;ximos diarios observados (como puntos) y los pronosticados (como
		l&#237;nea) para cada opci&#243;n de las salidas del modelo y
		considerando el m&#225;ximo para toda la ZMCM. Cada opci&#243;n
		presenta un &#225;rea sombreada que muestra la desviaci&#243;n
		est&#225;ndar del modelo en el mes. Del lado derecho de la gr&#225;fica
		est&#225;n las opciones. Si se quiere ver la desviaci&#243;n
		est&#225;ndar de la opci&#243;n deseada debe seleccionarse la variable
		Low y High de la opci&#243;n deseada. Si se quieren ver todas las
		opciones solo se necesita seleccionarlas, si se quieren quitar solo
		debe hacerse click en esa misma opci&#243;n.
	</li>
</ul>
<p>
	En la parte inferior de la gr&#225;fica se muestra una tabla con los
	indicadores de evaluaci&#243;n del modelo: n&#250;mero de datos (n), Mean
	bias (MB), Mean Gross Error (MGE), Root mean squared error (RMSE) y
	Correlation coefficient (r) y encima de la tabla se presentan 4
	pesta&#241;as para las diferentes opciones de salida del modelo.
</p>
<ul>
	<li id="siete">
		<strong><u>Probabilidad</u>: </strong>
		Esta secci&#243;n presenta las cuatro opciones de las salidas del
		modelo, en tablas y gr&#225;ficas. Las tablas muestran el n&#250;mero
		de casos y la probabilidad de los m&#225;ximos diarios de la ZMCM de
		todas las muestras y se presenta en tres opciones: 1) la probabilidad
		de un buen pron&#243;stico, que es cuando los observados y los
		simulados concuerdan; 2) la probabilidad de subestimar, que es cuando
		el modelo se queda por debajo de las observaciones y 3) la probabilidad
		de sobreestimar cuando la simulaci&#243;n se queda por arriba de los
		valores observados. Estas tablas presentan dos opciones en la parte
		superior es calculando la probabilidad considerando todos los datos
		registrados y la segunda que se encuentra en la parte inferior de la
		tabla, que muestra solo los d&#237;as que se presentan concentraciones
		por arriba del valor de la NOM, en este caso 95 ppb.
	</li>
</ul>
<p>
	Las gr&#225;ficas muestran la correlaci&#243;n entre los m&#225;ximos
	observados y los m&#225;ximos modelados para la ZMCM. Las l&#237;neas de
	colores se relacionan con el color de la clasificaci&#243;n del &#237;ndice
	de calidad del aire y separan los puntos de dispersi&#243;n de acuerdo a la
	clasificaci&#243;n del &#237;ndice de calidad del aire. Los puntos azules
	est&#225;n dentro del &#225;rea de buen pron&#243;stico, esto es que tanto
	el modelado como el observado est&#225;n dentro de la categor&#237;a que le
	corresponde. Los puntos grises que se encuentran por debajo de ellos son
	los subestimados y por arriba son los sobrestimados. El n&#250;mero que se
	encuentra en el inicio de cada categor&#237;a indica los casos de buen
	pron&#243;stico.
</p>
<ul>
	<li id="ocho">
		<strong><u>Detalles</u>: </strong>
		En este aparatado se presenta a detalle la distribuci&#243;n de los
		casos del buen pron&#243;stico, los sobreestimados y los subestimados
		de forma mensual de los m&#225;ximos para la ZMCM observados y
		modelados y se divide en dos opciones:
	</li>
</ul>
<p>
	o <strong><u>Resumen</u>: </strong>Aqu&#237; se observa una tabla y un mapa
	de las cuatro opciones de las salidas del modelo.
</p>
<p>
	o La tabla desglosa el n&#250;mero de casos en los que el modelo
	realiz&#243; un buen pron&#243;stico, los casos cuando se sobreestimo y los
	casos cuando se subestimo por cada mes del a&#241;o. El mapa que se observa
	en la parte inferior de la tabla, presenta la ubicaci&#243;n de las
	estaciones identificada por su acr&#243;nimo, las que tienen el color rojo
	significa que son estaciones que subestimaron y el n&#250;mero de veces que
	ocurri&#243;, esto para los casos de los m&#225;ximos de ozono que
	consideran &#250;nicamente valores por arriba de 95 ppb.
</p>
<p>
	o <strong><u>Todos los registros</u>: </strong>Esta opci&#243;n presenta
	una tabla con datos por d&#237;a de todo el periodo en el que se ha
	realizado la evaluaci&#243;n, los primeros 5 campos muestran el nombre del
	sitio que registr&#243; el m&#225;ximo de acuerdo a las 4 opciones del
	modelo m&#225;s los observados; los siguientes 5 campos es el valor del
	m&#225;ximo que registr&#243; cada uno de los sitios; los siguientes 5
	campos es la categor&#237;a del &#237;ndice que corresponde al valor del
	m&#225;ximo registrado; los siguientes 4 campos que comienzan con "sta",
	representan la calificaci&#243;n del resultado para cada modelo (= buen
	pron&#243;stico, -subestima, + sobreestima) y &#250;ltimo caso es el mes
	para cada caso.
	<br/>
	Si se desea ordenar la tabla por alguno de los campos del lado derecho de
	cada campo se encuentra una flecha, si se da click la tabla se
	ordenar&#225; por el campo seleccionado. Si se quiere filtrar el campo por
	alg&#250;n valor, categor&#237;a o sitio en la parte inferior del nombre
	del campo se encuentra un recuadro, en el cual, se puede colocar el valor
	que se quiere filtrar para que la tabla muestre &#250;nicamente los
	registros con ese valor. Todo esto con la finalidad de facilitar el
	an&#225;lisis.
</p>
<ul>
	<li id="nueve">
		<strong><u>Diferencias</u>: </strong>
		En esta secci&#243;n se muestran la estad&#237;stica de la diferencia
		entre los m&#225;ximos observados y los pronosticados para toda la ZMCM
		para las 4 opciones de las salidas del modelo. Los indicadores
		b&#225;sicos de estad&#237;stica son: la media y la desviaci&#243;n
		est&#225;ndar, en cuanto a los indicadores de las pruebas de normalidad
		a continuaci&#243;n se describen:
	</li>
</ul>
<p>
	o <strong>Curt&#243;sis.</strong> Indica la manera en que el pico y las
	colas de una distribuci&#243;n difieren de la distribuci&#243;n normal.
	Cuando este valor es 0 significa que siguen una distribuci&#243;n normal.
	Valor positivo significa que el pico es m&#225;s pronunciado que la
	distribuci&#243;n normal, con un valor negativo indica que el pico es
	m&#225;s plano comparado con la distribuci&#243;n normal. Miden que tanto
	los datos est&#225;n alrededor de la media.
</p>
<p>
	o <strong>Asimetr&#237;a.</strong> Indica el grado en que los datos no son
	sim&#233;tricos, y la forma de los datos. Cuando el valor es 0 significa
	que hay simetr&#237;a. Cuando es positiva, significa que hay
	subestimaci&#243;n del modelo. Cuando es negativa significa que se
	sobreestima los datos del modelo con respecto a los observados. En este
	caso se mide la mayor o menor simetr&#237;a de la distribuci&#243;n de las
	diferencias.
</p>
<p>
	o <strong>Prueba de normalidad Shapiro-Wilks</strong>. Esta prueba se usa
	para contrastar la normalidad de un conjunto de datos, en la cual la
	hip&#243;tesis nula plantea que las muestras provienen de una
	poblaci&#243;n normalmente distribuida. Si el valor es menor al alfa que en
	este caso puede ser 0.05 (nivel de confianza) entonces la hip&#243;tesis
	nula es rechazada y se concluye que los datos NO provienen de una
	distribuci&#243;n normal. Si el valor es mayor al alfa, no se rechaza la
	hip&#243;tesis y se concluye que los datos siguen una distribuci&#243;n
	normal.
</p>
<p>
	En la parte inferior se muestran cuatro gr&#225;ficos de las diferencias de
	los m&#225;ximos, el primero es un histograma con el que se observa
	claramente la curt&#243;sis y la asimetr&#237;a; el segundo del lado
	derecho es el boxplot que muestra la distribuci&#243;n de las diferencias;
	el tercero (izquierda inferior) muestra el gr&#225;fico Q-Q, el cual indica
	c&#243;mo se comportan los datos con respecto a la normal entre m&#225;s
	cercano est&#233;n de la l&#237;nea roja, significa que mejor
	distribuci&#243;n tienen con respecto a la normal; el cuarto (inferior
	derecho), muestra el dotplot que muestra el patr&#243;n de las diferencias
	cuando es aleatorio los puntos se distribuyen por toda la gr&#225;fica, en
	caso de que se observen tipo trompeta o con alg&#250;n patr&#243;n,
	significa que tendr&#237;an que realizarse m&#225;s pruebas
	estad&#237;sticas.
</p>
<ul>
	<li id="diez">
		<strong><u>ST sitio</u>: </strong>
		En esta secci&#243;n se muestran las series de tiempo por sitio de
		monitoreo. Existen dos opciones en la parte superior izquierda, la
		salida del modelo de 24 h y el de 48 h. La gr&#225;fica muestra los
		datos observados, modelados y ajustados con el filtro de Kalman, si el
		cursor se pone sobre el gr&#225;fico se pueden ver los valores de los
		datos. En la gr&#225;fica en el extremo superior izquierdo hay varias
		opciones para hacer zoom en la serie de tiempo, esto es, se puede
		seleccionar un mes (1m), por a&#241;o(YTD) o todo (all). As&#237;
		mismo, con la barra que se encuentra en la parte inferior de la
		gr&#225;fica, con el rat&#243;n se puede hacer zoom tanto del lado
		izquierdo como del derecho para seleccionar un periodo que se quiera
		analizar con m&#225;s detalle. En la parte inferior se observa una
		tabla con los indicadores de evaluaci&#243;n del modelo, que ya se
		explicaron en la secci&#243;n de "Estad&#237;stica". En la parte
		superior izquierda de la tabla se pueden seleccionar las cuatro
		opciones de salida del modelo.
	</li>
	<li id="once">
		<strong><u>Probabilidad Sitio</u>: </strong>
		Esta secci&#243;n eliges por el sitio de monitoreo que quieres observar
		y se presentan las cuatro opciones de las salidas del modelo, en tablas
		y gr&#225;ficas. Las tablas muestran el n&#250;mero de casos y la
		probabilidad de los m&#225;ximos diarios de la ZMCM de todas las
		muestras y se presenta en tres opciones: 1) la probabilidad de un buen
		pron&#243;stico, que es cuando los observados y los simulados
		concuerdan; 2) la probabilidad de subestimar, que es cuando el modelo
		se queda por debajo de las observaciones y 3) la probabilidad de
		sobreestimar cuando la simulaci&#243;n se queda por arriba de los
		valores observados. Estas tablas presentan dos opciones en la parte
		superior es calculando la probabilidad considerando todos los datos
		registrados y la segunda que se encuentra en la parte inferior de la
		tabla, que muestra solo los d&#237;as que se presentan concentraciones
		por arriba del valor de la NOM, en este caso 95 ppb.
	</li>
</ul>
<p>
	Las gr&#225;ficas muestran la correlaci&#243;n entre los m&#225;ximos
	observados y los m&#225;ximos modelados para el sitio elegido. Las
	l&#237;neas de colores se relacionan con el color de la clasificaci&#243;n
	del &#237;ndice de calidad del aire y separan los puntos de dispersi&#243;n
	de acuerdo a la clasificaci&#243;n del &#237;ndice de calidad del aire. Los
	puntos que se ubican dentro de la zona de la l&#237;nea recta se encuentran
	dentro del &#225;rea de buen pron&#243;stico, esto es que tanto el modelado
	como el observado est&#225;n dentro de la categor&#237;a que le
	corresponde. Los puntos que se encuentran por debajo de ellos son los
	subestimados y por arriba son los sobrestimados. El n&#250;mero que se
	encuentra en el inicio de cada categor&#237;a indica los casos de buen
	pron&#243;stico, los n&#250;meros a la derecha de las l&#237;neas junto al
	eje de las X, se&#241;ala el n&#250;mero de casos subestimados y los
	n&#250;meros que se encuentran a la izquierda junto a la l&#237;nea del eje
	de la y son los casos sobrestimados de cada una de las categor&#237;as.
</p>
<ul>
	<li id="doce">
		<strong><u>Diferencias sitio</u>: </strong>
		En esta secci&#243;n se puede elegir entre las 34 estaciones de la RAMA
		y presenta la estad&#237;stica de la diferencia entre los m&#225;ximos
		observados y los pronosticados de las 4 opciones de las salidas del
		modelo para el sitio seleccionado. Los indicadores b&#225;sicos de
		estad&#237;stica son: la media y la desviaci&#243;n est&#225;ndar, en
		cuanto a los indicadores de las pruebas de normalidad a
		continuaci&#243;n se describen:
	</li>
</ul>
<p>
	o <strong>Curt&#243;sis.</strong> Indica la manera en que el pico y las
	colas de una distribuci&#243;n difieren de la distribuci&#243;n normal.
	Cuando este valor es 0 significa que siguen una distribuci&#243;n normal.
	Valor positivo significa que el pico es m&#225;s pronunciado que la
	distribuci&#243;n normal, con un valor negativo indica que el pico es
	m&#225;s plano comparado con la distribuci&#243;n normal. Miden que tanto
	los datos est&#225;n alrededor de la media.
</p>
<p>
	o <strong>Asimetr&#237;a.</strong> Indica el grado en que los datos no son
	sim&#233;tricos, y la forma de los datos. Cuando el valor es 0 significa
	que hay simetr&#237;a. Cuando es positiva, significa que hay
	subestimaci&#243;n del modelo. Cuando es negativa significa que se
	sobreestimaci&#243;n los datos del modelo con respecto a los observados. En
	este caso se mide la mayor o menor simetr&#237;a de la distribuci&#243;n de
	las diferencias.
</p>
<p>
	o <strong>Prueba de normalidad Shapiro-Wilks.</strong> Esta prueba se usa
	para contrastar la normalidad de un conjunto de datos, en la cual la
	hip&#243;tesis nula plantea que las muestras provienen de una
	poblaci&#243;n normalmente distribuida. Si el valor es menor al alfa que en
	este caso puede ser 0.05 (nivel de confianza) entonces la hip&#243;tesis
	nula es rechazada y se concluye que los datos NO provienen de una
	distribuci&#243;n normal. Si el valor es mayor al alfa, no se rechaza la
	hip&#243;tesis y se concluye que los datos siguen una distribuci&#243;n
	normal.
</p>
<p>
	En la parte inferior se muestran cuatro gr&#225;ficos de las diferencias de
	los m&#225;ximos, el primero es un histograma con el que se observa
	claramente la curt&#243;sis y la asimetr&#237;a.; el segundo del lado
	derecho es el boxplot que muestra la distribuci&#243;n de las diferencias;
	el tercero (izquierda inferior) muestra el gr&#225;fico Q-Q, el cual indica
	c&#243;mo se comportan los datos con respecto a la normal entre m&#225;s
	cercano est&#233;n de la l&#237;nea roja, significa que mejor
	distribuci&#243;n tienen con respecto a la normal; el cuarto (inferior
	derecho), muestra el dotplot que muestra el patr&#243;n de las diferencias
	cuando es aleatorio los puntos se distribuyen por toda la gr&#225;fica, en
	caso de que se observen tipo trompeta o con alg&#250;n patr&#243;n,
	significa que tendr&#237;an que realizarse m&#225;s pruebas
	estad&#237;sticas.
</p>
<p>
	<strong><u> </u></strong>
</p>
<p>
	Por &#250;ltimo en el men&#250; principal en el extremo derecho est&#225;
	el &#237;cono para cerrar la sesi&#243;n que es recomendable realizarla por
	si se quiere volver a ingresar en otra ocasi&#243;n.
</p>

<p align="center"><a href="#home"><strong>Ir al principio</strong></a></p>

</div>
<p><i class="material-icons" style="font-size:16px;">timer</i>Nota: 00Z del d&iacute;a actual disponible a las 15:40 </p>
<?php
}

?>

</body>
</html>
<?php
}else
{
	page_error_sesion_no_valida();
}
?>