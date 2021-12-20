<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Sign Up</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <p class="title">Driver Hub</p>
    <div class="container-3">
        <form action="insert.php" method="GET" style="border:1px solid #ccc">
            <div class="container">
              <p>Fill the Form Below</p>
              <hr>
              <select name="user_type" id="User Type" required style="width: 49%;">
                <option value="User Type" style="color: black;">User Type</option>
                <option value="Passenger" style="color: black;">Passenger</option>
                <option value="Driver" style="color: black;">Driver</option>
                <option value="Car Owner" style="color: black;">Car Owner</option>
            </select>
            <input type="radio" name="gender" value="Male" style="margin-bottom:15px; margin-left:60px;"> <i style="font-size:25px">Male</i>
                <input type="radio" name="gender" value="Female" style="margin-bottom:15px; margin-left:15px;"><i style="font-size:25px">Female</i>
                <br>
              <label for="name">Name</label>
              <input type="text" placeholder="Enter Your Full Name" name="name" required>
          
              <label for="cell">Cell Phone No.</label>
              <input type="text" placeholder="Enter Contact Number" name="cell" required>
          
              <label for="email">Email</label>
              <input type="email" placeholder="Enter Email" name="email" required style="width:100%;">
                <br>
              <label>
                
              <label for="nid number">NID Number</label>
              <input type="text" placeholder="Enter Your NID Number" name="nid_number" required>
          
              <label for="address">Address</label><br>
              <select name="division" id="division" placeholder="Division" required style="width: 49%;">
                <option value="" style="color: black;">Division</option>
                <option value="Dhaka" style="color: black;">Dhaka</option>
                <option value="Rajshahi" style="color: black;">Rajshahi</option>
                <option value="Chattogram" style="color: black;">Chattogram</option>
                <option value="Rangpur" style="color: black;">Rangpur</option>
                <option value="Barishal" style="color: black;">Barishal</option>
                <option value="Sylhet" style="color: black;">Sylhet</option>
                <option value="Mymensingh" style="color: black;">Mymensingh</option>
                <option value="Khulna" style="color: black;">Khulna</option>
            </select>
              <input type="text" placeholder="District" name="district" required style="width: 49%;">
              <input type="text" placeholder="Area" name="area" required style="width: 49%;">
               <br>
              <label for="car_info">Car Information(<i style="color:red;">*must required for car owner and driver</i>)</label><br>
              <input type="text" placeholder="Model" name="model" style="width: 49%;">
              <input type="text" placeholder="Plate Number" name="plate number" style="width: 49%;">
              <input type="text" placeholder="Driving License Number" name="driving_license" style="width: 49%;">
              <input type="text" placeholder="License Validity" name="license_validity" style="width: 49%;">
              <input type="text" placeholder="License Type" name="license_type" style="width: 49%;">
                <br>             
              <label for="car_size">Seat No. : </label>
              <select name="car_size" id="car_size" style="width: 10%;">
                  <option value="4" style="color: black;">4</option>
                  <option value="6" style="color: black;">6</option>
                  <option value="8" style="color: black;">8</option>
                  <option value="12" style="color: black;">12</option>
              </select>
              <br>
          
              <label for="username">User Name</label><br>
              <input type="text" placeholder="Select a User Name" name="username" required style="width: 50%;">
              <br>

              <label for="password">Password</label>
              <label for="confirm_password" style="margin-left: 300px;">Confirm Password</label><br>
              <br>
              <input type="password" placeholder="Enter Password" name="password" required style="width: 45%;">

              <input type="password" placeholder="Confirm Password" name="confirm_password" required style="width: 45%; margin-left: 50px;">
          
              <div class="buttons">
                <button class="sign_up">Sign Up</button>
              </div>
            </div>
          </form>
    </div>
</body>
</html>