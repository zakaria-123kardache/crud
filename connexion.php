<?php

 $servername = 'db';
 $username = 'root';
 $password = 'rootpassword';
 $db ='students';

$link = mysqli_connect($servername,$username,$password,$db);

if ($link === false ){
    die ("error" . mysqli_connect_error() );
}
echo "conexion is found "


?>