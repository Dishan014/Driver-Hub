
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="homepages.css">
</head>
<body>
    <div class="header">
        <ul>
            <li style="margin-left: 0px;"><a href="Car_owner_homepage.php">Home</a></li>
            <li><a href="Car_owner_history.php">History</a></li>
            <li><a href="Find_a_driver.php">Find a Driver</a></li>
            <li><a href="Car_owner_settings.php">Settings</a></li>
            <li style="margin-left: 620px;"><a href="sign_out.php">Sign Out</a></li>
        </ul>
    </div>
    <?php
        session_start();
        
        $qry=mysqli_query($mysqli,"SELECT * FROM users_info where Email_Address='dadishan307@gmail.com'");
    ?>
    <div class="personal_info">
        <h1><u style="color: rgb(6, 110, 6); font-size: 45px;">Personal Information</u></h1>
        <p>Name : <i></i></p><?php echo $qry['Email_Address']; ?>
        <p>Gender : <i></i></p>
        <p>Email<sub style="color: rgb(168, 6, 6);">(<a href="" style="color: rgb(14, 14, 133); text-decoration: none;">Change</a>)</sub> : <i></i></p>
        <p>Contact No.<sub style="color: rgb(168, 6, 6);">(<a href="" style="color: rgb(14, 14, 133); text-decoration: none;">Change</a>)</sub> : <i></i></p>
        <p>NID No. : <i></i></p>
        <p>Address : <i></i></p>
    </div>
    <hr>
</body>
</html>