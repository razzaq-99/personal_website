<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','testing');
if($conn->connect.error){
    die('Connect_failed : ', .$conn->connect.error);
}
else{
    $stmt = $conn->prepare("insert into registration(name,email,number,message) values(?,?,?,?)");
    
    $stmt->bind_param("ssis",$name,$email,$number,$message);

    $stmt->execute();

    echo "message sent successfully:";
    $stmt->close();
    $conn->close();
}
?>