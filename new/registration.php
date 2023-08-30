


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        *{
        margin:0px;
        padding:0px;

    }
    .for{
        display:inline-flex;
    }

    #registration{
        height:700px;
    }

    .form{
        border-radius: 10px;
        box-shadow: 5px 10px 15px #0082e6;
        margin-right:500px;
        margin-left:500px;
        margin-top:50px;
        padding-top:50px;
        padding-bottom:50px;
        padding-left:160px;
        padding-right:50px;

    }
    input{
        padding-top:10px;
        padding-bottom:10px;
        padding-right:35px;
        padding-left:20px;
        display:inline-block;
        margin:20px;
    }
    .btn{
      
        padding-top:10px;
        padding-bottom:10px;
        padding-left:339px;
        margin-left:20px;
        padding-right:100px;
        background-color:#0082e6;
        border:none;
        color:white;
        font-size:20px;
        border-radius: 5px;
        text-align: center;
       
    }

   
    h1{
        margin-left:200px;
        color:#0082e6;
        font-size:30px;
    }
    p{
        margin-left:200px;
    }
    </style>
</head>
<body>
<?php
  include 'hearder.php'

  ?>
   

 <section id="registration">

 <form action="" method="post">
    <div class="form">
        <h1>Registration</h1><br><br>
        <div class="for1">

<div class="for">

<input type="text" name="fname" placeholder="Enter your first name"  required>
</div>

<div class="for">

<input type="text" name="lname" placeholder="Enter your last name"  required>
</div> 

<div class="for">

<input type="email" name="email" placeholder="Enter your email"  required>
</div>

<div class="for">

<input type="number" name="mobile" placeholder="Enter your mobile number"  required>
</div>

<div class="for">

<input type="text" name="city" placeholder="Enter your city"  required>
</div>
<div class="for">

<input type="password" name="pass" placeholder="Enter password"  required>
</div><br><br><br>


<!-- <button class="btn">submit</button><br><br> -->
<input type="submit" name="submit">
<p>Already have an account ? <a href="login.php">Login</a></p>
</div>

</form>

 </section>
 <?php
  include 'conn.php';

  if(isset($_POST['submit'])){
    $name= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $city= $_POST['city'];
    $pass= $_POST['pass'];

    $q="INSERT INTO `reg`( `fname`,`lname`,`email`,`mobile`,`city`,`pass`) VALUES ('$name','$lname','$email','$mobile','$city','$pass')";

    $query = mysqli_query($con, $q);
    // echo "successfull";
    if($query){
        
        ?>
        <script>
            alert("successfull....");

        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("not inserted...."); 
        </script>

        <?php
    }
    
    
  }

  ?>
</body>
</html>