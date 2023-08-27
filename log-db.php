<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "ir");



if(!$connect){
    echo "error!";
}
else{

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `reg`";
$result = mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($result)) {

    # code...
    if (($row['password']==$password)&&($row['email']==$email)) {
        # code...
        // echo "Welcome " . $row['name'] . " login successful";
        $_SESSION["Name"]=$row['name'];
        // $ms = "Welcome ".$row['name'];
        header("location: home1.php");
    }
    else {
        # code...
        header("location:login1.php");
    }
}

}






?>