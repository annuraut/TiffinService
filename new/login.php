
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
      *{
        margin:0;
        padding:0;
      }

      .container1{
        background-color:#0082e6;
        margin-left:500px;
        margin-right:600px;
        margin-top:80px;
        padding-bottom:50px;
        padding-top:20px;
        box-shadow: 5px 10px 15px;
        border-radius:10px;
      }
      .s1{
        margin-left:200px;
        margin-top:100px;
        margin-right:80px;
        padding-top:50px;
        padding-bottom:50px;
        border-radius:10px;
        padding-left:50px;
        padding-right:100px;
        background-color:white;
  
      }
      #login{
        height:650px; 
      }
      input{
        padding:5px;
      }
      button{
        padding-left:20px;
        padding-right:120px;
        padding-top:10px;
        padding-bottom:10px;
        text-align: center;
        background-color:#0082e6;
        border:none;
        color:white;
      }
    </style>
</head>
<body>
  <?php
   include 'hearder.php'
  ?>
  <section id="login">


    <form action="" method="post">
      <div class="container1">
       
        <div class="s1">
        <h1>Login To Your Account</h1><br><br>
            <input type="text" name="name" placeholder="Username "  required><br><br>
            <input type="password" placeholder="Password" name="pass" required><br><br>
            <button type="submit">Submit</button> <br><br>
            <p>
              Don't have an account? <a href="registration.php">Signup Now</a>
            </p>
        </div>
      </div>

    </form>
    </section>

    <?php

    include 'footer.php';
    ?>
    
</body>
</html>