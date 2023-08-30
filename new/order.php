<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    form{
      
    }
</style>
</head>
<body>

<center>
    <h1>Order Now</h1>
    <form action="" method="post">
       
        First Name : 
        <input type="text" name="fname" placeholder="Enter first name" required><br><br>

        Last Name : 
        <input type="text" name="lname" placeholder="Enter last name" required><br><br>
        Email : 
        <input type="email" name="email" placeholder="Enter email" required><br><br>
        Mobile Number : 
        <input type="number" name="contact" placeholder="Enter mobile number" required><br><br>
        Order :
        <select required>
        <option value="">..Select..</option>
        <option value="Daily" name="cus_orders">Daily</option>
        <option value="1 Month" name="cus_orders">1 Month</option>
        <option value="One one time" name="cus_orders">Only for one time</option><br><br>
        </select><br><br>  
        Address : 
        <textarea name="address" id="" placeholder=" Write this address..." required></textarea><br><br>
        Description :
      <textarea name="des" id=""placeholder="Write this..." required></textarea><br><br>

      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    include 'conn.php';

   if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $cus_orders = $_POST['cus_orders'];
    $address = $_POST['address'];
    $des = $_POST['des'];

    $q = "INSERT INTO `order`(`fname`, `lname`, `email`, `contact`, `cus_orders`, `address`, `des`) 
    VALUES ('$fname','$lname','$email','$contact','$cus_orders','$address','$des')";
   $query = mysqli_query($con,$q);
   }
   ?>
        <script>
            alert("Your Order successfully complit....");
        </script>
       
</center>
    
</body>
</html>