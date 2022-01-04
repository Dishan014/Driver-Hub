<?php 

session_start(); 

include "database_link.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: index.php?error=Email is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE Email_Address='$email' AND Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email_Address'] === $email && $row['Password'] === $pass) {

                echo "Logged in!";

                $_SESSION['Email_Address'] = $row['Email Address'];

                $_SESSION['User_Type'] = $row['User_Type'];

                $_SESSION['id'] = $row['Email_Address'];

                header("Location: car_owner_homepage.php");
                //$qry=mysqli_query($mysqli,"SELECT * FROM users_info WHERE Email_Address='".$_SESSION['$email'];."'");

                exit();

            }
            else{

                header("Location: index.php?error=Incorrect Email or Password!!!");

                exit();

            }

        }
        else{

            header("Location: index.php?error=Incorrect Email or Password!!!");

            exit();

        }

    }

}
else{

    header("Location: index.php");

    exit();

} 