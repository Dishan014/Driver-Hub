<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Driver</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
  <div class="header">
    <ul>
        <li style="margin-left: 0px;"><a href="Car_owner_homepage.html">Home</a></li>
        <li><a href="Car_owner_history.php">History</a></li>
        <li><a href="Find_a_driver.php">Find a Driver</a></li>
        <li><a href="Car_owner_settings.php">Settings</a></li>
        <li style="margin-left: 620px;"><a href="sign_out.php">Sign Out</a></li>
    </ul>
  </div>
    <div class="container-4">
        <form action="" style="border:1px solid #ccc">
            <div class="container">
                <label style="font-size: 23px; color: red;">
                    <input type="radio" name="category" style="margin-bottom:15px"> Only Driver
                    <input type="radio" name="category" style="margin-bottom:15px"> Driver with Car
                  </label>
              <hr>
          
              <label for="location">Location :</label>
              <input type="text" placeholder="Enter Your Location" name="location" required>
          
              <label for="destination">Destination :</label>
              <input type="text" placeholder="Enter Your Destination" name="destination" required>

              <label for="duration">Duration</label><br>
              <label for="from">From:</label>
              <input type="date" name="from" required>
              <label for="to" style="margin-left: 30px;">To:</label>
              <input type="date" name="to" required>
                <br>
              <label for="car_size">Seat No. : </label>
              <select name="car_size" id="car_size">
                  <option value="4" style="color: black;">4</option>
                  <option value="6" style="color: black;">6</option>
                  <option value="8" style="color: black;">8</option>
                  <option value="12" style="color: black;">12</option>
              </select>
              <br>
              <label>
                <input type="radio" name="gender" style="margin-bottom:15px"> Male
                <input type="radio" name="gender" style="margin-bottom:15px">Female
              </label>
          
              <div class="buttons">
                <button class="search">Search</button>
              </div>
            </div>
          </form>
    </div>
</body>
</html>