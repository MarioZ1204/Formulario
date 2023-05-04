<?php
include("../config/connectionDB.php");

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$idnum = $_POST['id_num'];
$address = $_POST['address'];
$celPhone = $_POST['cel_phone'];
$email = $_POST['email'];
$pass = md5($_POST['passwd']);

$sql = "INSERT INTO users(first_name,last_name,numbre_id,address,celphone,email,password)
VALUES('$fname','$lname','$idnum','$address','$celPhone','$email','$pass')";


if($conn->query($sql)=== true){
    //echo ".:: USER HAS BEEN CREATED SUCCESFULLY ::.";
    echo"<script>alert('USER HAS BEEN CREATED SUCCESFULLY')</script>";
    header("refresh:0; url=http://127.0.0.1/pets_m/front/src/login.html");
}else{
    //echo "ERROR".$conn->error."<br>".$sql;
    echo"<script>alert('USER WASENT CREATED SUCCESFULLY)</script>";
    header("refresh:0; url=http://127.0.0.1/pets_m/front/src/create_user.html");
}

?>