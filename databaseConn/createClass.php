<?php
if(isset($_POST['name']) && isset($_POST['section']) && isset($_POST['subject'])){
    require_once "conn.php";
    require_once "validate.php";
    $name = validate($_POST['name']);
    $email = validate($_POST['section']);
    $password = validate($_POST['subject']);
    $sql = "insert into classroom values( '', '$name' , '$section' , '$subject')";
    if(!$conn->query($sql)){
        echo "success";
    }else{
        echo "failure";
    }

}
?>