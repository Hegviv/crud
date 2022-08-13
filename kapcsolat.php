<?php

$con = mysqli_connect("localhost","root","","crud");

if(!$con){
    die('Kapcsolat sikertelen!'. mysqli_connect_error());
}

?>