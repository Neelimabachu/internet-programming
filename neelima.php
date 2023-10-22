<!DOCTYPE html>
<html lang="en">
<head>
    <title>forms get</title>
</head>
<body>
 <title>Customer Information</title>
    <style>
        body {
            background-image: url('adminbackground.jpg'); /* Add the URL of your background image here */
            background-size: cover;
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            font-size: 24px;
        }

        #customer-form {
            margin: 20px;
        }

        .input-box {
            margin: 10px;
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #submit-button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #submit-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div id="header">Customer</div>
    <div id="customer-form">
        <form action="cakelist.html" method="post">
            <input type="text" class="input-box" name="name" placeholder="Customer Name" required><br>
            <input type="text" class="input-box" name="contact" placeholder="Contact Number" required><br>
            <input type="email" class="input-box" name="email" placeholder="Email Address" required><br>
            <input type="text" class="input-box" name="location" placeholder="Location" required><br>
            <input type="text" class="input-box" name="pincode" placeholder="Pincode" required><br>
            <input type="submit" id="submit-button" value="Submit">
        </form>
    </div>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name= $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $pin= $_POST['pin'];
   
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "neelima1";

  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `customer` (`name`, `contact`, `email`, `location`, `pin`) VALUES ('$name', '$contact', '$email', '$location', '$pin');";

  $result = mysqli_query($con, $sql);

  if ($result)
 {
    echo "Data inserted successfully";

  } 
else
 {
    echo "Data not inserted successfully";
  }
}
?>
<form action="/neelima/neelima.php" method="post">

  Name:<br>
  <input type="text" id="name" name="name" ><br><br>

  CONTACT:<br>
  <input type="text" id="contact" name="contact" ><br><br>

  EMAIL ADRESS:<br>
  <input type="text" id="email" name="email" ><br><br>

  LOCATION:<br>
  <input type="text" id="location" name="location" ><br><br>

  PINCODE:<br>
  <input type="text" id="pin" name="pin" ><br><br>

 
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>