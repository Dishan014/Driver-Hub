<?php
    include "database_link.php";

    session_start();

        include("connection.php");
        include("functions.php");

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($email) && !empty(!password) && !is_numeric($email))
            {
                $query = "select * from users where Email Address = '$email' limit 1";

                $result = mysqli_query($con,$query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['password'] === $password)
                        {
                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: passenger_homepage.php");
                            die;
                        }
                    }
                }
                echo "Please enter some valid info";
            }
            else
            {
                echo "Please enter some valid info";
            }
        }

?>