<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    require_once "conn.php";
    require_once "validate.php";
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $sql = "insert into users values( '', '$name' , '$email' , '" . md5($password) . "')";
    if(!$conn->query($sql)){
        echo "success";
    }else{
        echo "failure";
    }

}
?>