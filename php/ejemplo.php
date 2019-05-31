<?php
$boton1="";
$boton2="";
$boton3="";

/* Pegunta si la variable ha sido definida/botón ha sido pulsado*/
if(isset($_POST['boton1']))$boton1 = $_POST['boton1'];
if(isset($_POST['boton2']))$boton2 = $_POST['boton2'];
if(isset($_POST['boton3']))$boton3 = $_POST['boton3'];

if($boton1)
{
    echo"Se ha pulsado el botón1"
}

if($boton2)
{
    echo"Se ha pulsado el botón2"
}

if($boton3)
{
    echo"Se ha pulsado el botón3"
}
?>