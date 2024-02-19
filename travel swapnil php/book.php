<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Booking Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form method="post">
 
  <label for="name">Name:</label>
    <input type="text" id="name" name="fullname" required>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>



    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phoneN" required>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>



    <label for="guest">Number of People:</label>
    <input type="text" id="guest" name="guest" required>
    <label for="arrival">Arrival time:</label>
    <input type="date" id="arrival" name="arrivaltime" required>
    <label for="leaving">Leaving:</label>
    <input type="date" id="leaving" name="leaving" required>
  
  
     
    
    <button type="submit" name="send">Book Now</button>
  </form>
</body>
</html>
<?php
$connection = mysqli_connect("localhost","root","","book_db");
if($connection){
  echo ".";
}

if(isset($_POST['send'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phoneN'];
    $address = $_POST['address'];
   
    $guests = $_POST['guest'];
    $arrivals = $_POST['arrivaltime'];
    $leaving = $_POST['leaving'];
    
   // $requests = "INSERT INTO bookings VALUES ($name, $email, $phone, $address, $guests, $arrivals, $leaving)";
   $requests = "INSERT INTO bookings (fullname,emails,phoneN,addressN,guest,arrivaldate,leaving) VALUES ('$name','$email','$phone','$address','$guests','$arrivals','$leaving')";
    
    $result = mysqli_query($connection, $requests);
    if($result){
        echo "inserted succesfully!";
      header('location: index.php');
    } 
    
    

}
?>