t <- proc.time() # Inicia el cronómetro
pathwork<-"C:/xampp/htdocs/emod7/EMOD"
usuario="jaguilar"
password="jaguilar"

library(rmarkdown)
setwd(paste0(pathwork))
source(paste0(pathwork,"/funcion_emod.R"))
previo=TRUE
source('18z_o3.R')
#Datos_disponibles=TRUE
if(Datos_disponibles==TRUE){modelo_18z=TRUE;}else{modelo_18z=FALSE}

source('00z_o3.R')
if(Datos_disponibles==TRUE){modelo_00z=TRUE;}else{modelo_00z=FALSE}

render('informe_resumen.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"informe_resumen.html")
#proc.time()-t
previo=FALSE

if(modelo_18z==TRUE){
  source('18z_pm25_no2.R')
  source('18z_moviles.R')
}
if(modelo_00z==TRUE){
  source('00z_pm25_no2.R')
  source('00z_moviles.R')
}

render('informe_resumen.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"informe_resumen.html")

render('18z_o3_pm25.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"18z_o3_pm25.html")
render('00z_o3_pm25.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"00z_o3_pm25.html")

render('18z_moviles.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"18z_moviles.html")
render('00z_moviles.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"00z_moviles.html")

if(modelo_18z==TRUE){source('18z_co_so2.R')}
render('18z_no2_co_so2.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"18z_no2_co_so2.html")

if(modelo_00z==TRUE){source('00z_co_so2.R')}
render('00z_no2_co_so2.Rmd',output_format = "all",run_pandoc = TRUE)
fix_html(pathwork,"00z_no2_co_so2.html")

proc.time()-t # termina el cronómetro


print (  "inicia la parte de EVEST" )


source ("C:/xampp/htdocs/emod7/EVEST/R/Iniciar_EVEST.R")


print (  "inicia la parte de METEORO" )

source ("C:/xampp/htdocs/emod7/EVEST/R/Iniciar_EVEST.R")

source ("C:/xampp/htdocs/emod7/METEORO/R/Iniciar METEORO.R")



