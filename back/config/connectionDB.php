<?php
//Developer: Mario Zambrano 
$host ="127.0.0.1";
$username = "root";
$password = "";
$dbname = "pets";
$port = "3306";
$conn = new mysqli($host,$username,$password,$dbname,$port);

if($conn->connect_error){
 echo "La Conexión Falló ".$conn->connect_error;

}else{
    echo"Conexión Satisfactoria";
}


?>