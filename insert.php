<?php
    include "database_link.php";

    $user_type=$_GET['user_type'];
    $name=$_GET['name'];
    $gender=$_GET['gender'];
    $nid_number=$_GET['nid_number'];
    $email=$_GET['email'];
    $cell=$_GET['cell'];
    $division=$_GET['division'];
    $district=$_GET['district'];
    $area=$_GET['area'];
    $model=$_GET['model'];
    $plate_number=$_GET['plate_number'];
    $driving_license_number=$_GET['driving_license_number'];
    $license_validity=$_GET['license_validity'];
    $license_type=$_GET['license_type'];
    $size=$_GET['car_size'];
    $password=$_GET['password'];

    $command = "INSERT into user_info values('$user_type', '$name', '$gender', '$nid_number', '$email', '$cell', '$password')";
    $conn->query($command);
    $command = "INSERT into _address values('$email', '$division', '$district', '$area')";
    $conn->query($command);
    $command = "INSERT into car_info values('$email', '$model', '$plate_number', '$driving_license_number', '$license_validity', '$license_type', '$size')";
    $conn->query($command);
    $command = "INSERT into users values('$user_type', '$email', '$password')";
    $conn->query($command);
    echo "Account has been Created Successful";
   
?>