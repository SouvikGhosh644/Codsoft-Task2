<?php

$connect = mysqli_connect("localhost", "root", "", "ir");



if(!$connect){
    echo "error!";
}
else{

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO `reg`(`id`, `name`, `email`, `password`,`mobile`) VALUES ('','$name','$email','$password','$mobile')";
if (mysqli_query($connect , $sql)) {
    # code...
    echo "data inserted successfuly";
    echo "You inserted" . "\n Name = '$name'" . "\n Email = '$email'" . "\n Password = '$password'";
}
else{
    echo "error inserting data!!!";
}
}






?>