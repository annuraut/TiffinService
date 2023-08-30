<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   
   .s1{
    display:inline-flex;
   }
.container {
  position: relative;
  width: 50%;
  margin-left:30px;
  
}

.image {
  display: block;
  width: 333px;
  height: 250px;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0px;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
  opacity: 0.90;

}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

/* second image */

.container1 {
  position: relative;
  width: 50%;
  margin-left:30px;

}

.image {
  display: block;
  width: 333px;
  height: 250px;
}

.overlay1 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0px;
  transition: .5s ease;
}

.container1:hover .overlay1 {
  height: 100%;
  opacity: 0.90;

}

.text1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

/* third image */
.container2 {
  position: relative;
  width: 50%;
  margin-left:30px;

}

.image {
  display: block;
  width: 333px;
  height: 250px;
}

.overlay2 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0px;
  transition: .5s ease;
}

.container2:hover .overlay2 {
  height: 100%;
  opacity: 0.90;

}

.text2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

/* fourth image */

.container3 {
  position: relative;
  width: 50%;
  margin-left:30px;

}

.image {
  display: block;
  width: 333px;
  height: 250px;
}

.overlay3 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0px;
  transition: .5s ease;
}

.container3:hover .overlay3 {
  height: 100%;
  opacity: 0.90;

}

.text3 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

/* fifthe image */

.container4 {
  position: relative;
  width: 50%;
  margin-left:30px;

}

.image {
  display: block;
  width: 333px;
  height: 250px;
}

.overlay4 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0px;
  transition: .5s ease;
}

.container4:hover .overlay4 {
  height: 100%;
  opacity: 0.90;

}

.text4 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

/* six image */

.container5 {
  position: relative;
  width: 50%;
  margin-left:30px;

}

.image {
  display: block;
  width: 333px;
  height: 250px;
}

.overlay5 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0px;
  transition: .5s ease;
}

.container5:hover .overlay5 {
  height: 100%;
  opacity: 0.90;

}

.text5 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>

<?php

include 'hearder.php';
?>
<br> 
<center>
<h1 style="color:blue; margin-bottom:">manu</h1>  
</center> 
<div class="s1">

<div class="container">
  <img src="s.webp" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">
        <h3 style="color:black;">Gujarati Thali</h3>  
        <h4>Price : ₹200</h4>   
        <button style="background-color:darkblue;border:none;"><a href="order.php" style="text-decoration:none;color:white; padding:10px;">Order Now</a></button>
    </div>
  </div>
</div>


<div class="container1">
  <img src="manu1.jpg" alt="Avatar" class="image">
  <div class="overlay1">
    <div class="text1">
        <h3 style="color:black;">Bihari Thali</h3>  
        <h4>Price : ₹150</h4>   
        <button style="background-color:darkblue;border:none;"><a href="order.php" style="text-decoration:none;color:white; padding:10px;">Order Now</a></button>
    </div>
  </div>
</div>


<div class="container2">
  <img src="manu2.jpg" alt="Avatar" class="image">
  <div class="overlay2">
    <div class="text2">
        <h3 style="color:black;">South Indian Thali</h3>  
        <h4>Price : ₹100</h4>   
        <button style="background-color:darkblue;border:none;"><a href="order.php" style="text-decoration:none;color:white; padding:10px;">Order Now</a></button>
    </div>
  </div>
</div>

<div class="container3">
  <img src="manu3.jpg" alt="Avatar" class="image">
  <div class="overlay3">
    <div class="text3">
        <h3 style="color:black;">Rajasthani Thali</h3>  
        <h4>Price : ₹150</h4>   
        <button style="background-color:darkblue;border:none;"><a href="order.php" style="text-decoration:none;color:white; padding:10px;">Order Now</a></button>
    </div>
  </div>
</div>


<div class="container4">
  <img src="manu4.jpg" alt="Avatar" class="image">
  <div class="overlay4">
    <div class="text4">
        <h3 style="color:black;">Punjabi Thali</h3>  
        <h4>Price : ₹500</h4>   
        <button style="background-color:darkblue;border:none;"><a href="order.php" style="text-decoration:none;color:white; padding:10px;">Order Now</a></button>
    </div>
  </div>
</div>


<div class="container5">
  <img src="manu5.webp" alt="Avatar" class="image">
  <div class="overlay5">
    <div class="text5">
        <h3 style="color:black;">Bengali Thali</h3>  
        <h4>Price : ₹500</h4>   
        <button style="background-color:darkblue;border:none;"><a href="order.php" style="text-decoration:none;color:white; padding:10px;">Order Now</a></button>
    </div>
  </div>
</div>

</div>

</body>
</html>
