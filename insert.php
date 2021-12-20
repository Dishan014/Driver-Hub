<?php
    include "database_link.php";

    $user_type=$_GET['user_type'];
    $name=$_GET['name'];
    $gender=$_GET['gender'];
    $nid_number=$_GET['nid_number'];
    $email=$_GET['email'];
    $cell=$_GET['cell'];
    $address=$_GET['division'];
    $car_info=$_GET['model'];
    $user_name=$_GET['username'];
    $password=$_GET['password'];

    // $SELECT = "SELECT User Name form user info where User Name =? Limit 1";

    $command = "INSERT into user info values('$user_type', '$name', '$gender', '$nid_number', '$email', '$cell', '$address', '$car_info', '$user_name', '$password')";
   $conn->query($command);
   echo "Added Successful";
?>