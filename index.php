<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="title">Driver Hub</p>
    <div class="container-2">
        <form action="" style="border:1px solid #ccc">
            <p style="text-align: center;">User Type</p>
            <div class="container">
                <label style="margin-left: 80px; font-size: 23px;">
                    <input type="radio" name="category" style="margin-bottom:15px"> Passenger
                    <input type="radio" name="category" style="margin-bottom:15px"> Car Owner
                    <input type="radio" name="category" style="margin-bottom:15px"> Driver
                  </label>
              <hr>
          
              <label for="user_name">User Name</label>
              <input type="text" placeholder="Enter User Name" name="user_name" required>
          
              <label for="password">Password</label>
              <input type="password" placeholder="Enter Password" name="password" required>
          
              <div class="buttons">
                <button class="sign_in">Sign In</button>
              </div>
              <b class="f_password"><a href="forgot_Password.php">Forgot Password?</a></b>
              <hr>
              <button style="width: 50%; margin-left: 25%; background-color: rgb(134, 26, 26);"><a style="text-decoration: none;" href="sign_up.php">Create New Account</a></button>
            </div>
          </form>
    </div>
</body>
</html>