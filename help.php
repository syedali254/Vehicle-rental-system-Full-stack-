<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername="localhost";
$username="root";
$password="";
$dbname="vehicle_rent";

//set conn
$conn=new mysqli($servername,$username,$password,$dbname);

//check conn
if($conn->connect_error){
    die("error 404".$conn->connect_error);
}
//set datas
$name=$_POST['name'];
$email=$_POST['email'];
$problem=$_POST['problem'];

//inkect into db
$sql="INSERT INTO help_request(name,email,problem) VALUES('$name','$email','$problem')";
//
if($conn->query($sql)===TRUE){
    echo "Your problem has been submitted successfully we will get back to you soon";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
