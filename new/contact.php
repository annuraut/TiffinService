<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    *{
        margin:0px;
        padding:0px;

    }
    .for{
        display:inline-flex;
    }
    #contact{
        height:600px;
    }
    .form{
        border-radius: 10px;
        box-shadow: 5px 10px 15px;
        margin-right:800px;
        margin-left:500px;
        margin-top:50px;
        padding-top:50px;

    }

    input{
        padding:5px;
    }
    .btn{
      
        padding-top:10px;
        padding-bottom:10px;
        padding-left:339px;
        padding-right:205px;
        background-color:#0082e6;
        border:none;
        color:white;
        font-size:20px;
       
    }

    .for1{
        padding-left:100px;
    }
    h1{
        margin-left:150px;
    }
   </style>
</head>
<body>
    
<?php
include 'hearder.php'
?>
<section id="contact">

<form action="" method="post">
    <div class="form">
        <h1>Contact Us</h1><br><br>
        <div class="for1">

<div class="for">
<label>FIRST NAME :- </label>
<input type="text" name="fname" placeholder="Enter your first name"  required>
</div><br><br><br>

<div class="for">
<label>LAST NAME :- </label><br>
<input type="text" name="lname" placeholder="Enter your last name"  required>
</div> <br><br><br> 

<div class="for">
<label>EMAIL :- </label>
<input type="email" name="email" placeholder="Enter your email"  required>
</div><br><br><br>

<div class="for">
<label>PHONE NUMBER :- </label>
<input type="number" name="num" placeholder="Enter your number"  required>
</div><br><br><br>

<div class="for">
<label>WHAT DO YOU HAVE IN MIND :- </label>
<textarea name="text" id="" placeholder="write here..."></textarea>
</div><br><br><br>
</div>
<button class="btn" name="submit">submit</button>

</div>
</form>
</section>

<?php
include 'footer.php'
?>

<?php
    include 'conn.php';

   if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $text = $_POST['text'];

    $q = "INSERT INTO `contact_us`(`fname`, `lname`, `num`, `text`) 
    VALUES ('$fname','$lname','$email','$num','$text')";
   $query = mysqli_query($con,$q);
   if($query){
          header("location:display.php");
        }else
       {
        echo "error";
     }
   } 
   ?>
      
</body>
</html>