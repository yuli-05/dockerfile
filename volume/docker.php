<!DOCTYPE html>
<html>
    <head>
        <title>Docker</title>
    </head>
    <body>
        <H1 style="color:blue;" align="center"> COMMIT EN DOCKER </H1>
        <font face="Comic Sans MS,arial" size=4>"
        Una de las funciones menos conocidas de Docker es la posibilidad guardar el estado actual de un contenedor como si fuera una imagen, si venimos de entornos de virtualizacion, seria el equivale al “snapshot”.
        Para utilizarlo basta con ejecutar:
        <b>docker commit NombreDelcontenedor_o_id nombredelaimagen:tag</b>
        <p>La ejecución es inmediata, y la imagen resultante a parte de guardar los datos de la imagen base del contenedor de origen, también guarda todos los cambios realizados manualmente dentro del contenedor, ya sean datos, cambios directos que se hicieron accediendo al contenedor o archivos copiados por medio de docker cp</p>

    
        </font> 
        
            <div align="center"><img src="https://2.bp.blogspot.com/-t7qL18TM_ug/W888g09abnI/AAAAAAAARLM/8r5fIFujOWMyU5RQJWxHMYL_Rwl5c3BcgCLcBGAs/s1600/DockerSave.png"></div>
    </body>
</html>