<?php
session_start();

if ($_SESSION['veri'] == $_POST['veri']) {
    $dsn = new PDO ("mysql:host=localhost;charset=utf8;dbname=web03","root","");
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $sql="INSERT INTO `tickets` (`first_name`,`last_name`,`phone`,`password`)
    VALUES ('$firstname','$lastname','$phone','$password')";

    $dsn->query($sql);

    $response = array('succes' => true, 'message' =>'signup succes');
}else{
    echo "error";
}
?>


