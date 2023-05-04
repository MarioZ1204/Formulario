<?php
    include("../config/connectionDB.php");  
    $email = $_POST['email'];
    $passwd = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwd'"; 
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        //echo"el usuario existe ";
        header("location:http://127.0.0.1/pets_m/front/src/home.html");
    }else{
        //echo"el usuario no existe o datos incorrectos";
        //echo $conn->error;
        echo"<script>alert('Usuario no existe o datos son incorrectos'  )</script>";
        header("refresh:0; url=http://127.0.0.1/pets_m/front/src/login.html");
    }
?>