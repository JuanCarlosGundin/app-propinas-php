<?php
if (isset($_POST['submit'])){
    $cuenta=$_POST['coste'];
    $servicios=$_POST['servicio'];
    $personas=$_POST['personas'];
    if(!(is_nan($personas))){
        $result=((float)$cuenta*(float)$servicios)/(float)$personas;
    }
//header("Location:../index.php?result=".$result);
    if(is_nan($result)){
        header("location:../index.php");
    }else{header("Location:../index.php?pito=$result");}
}else{
    header("location:../index.php");
}