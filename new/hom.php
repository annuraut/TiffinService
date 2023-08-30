<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar | CodingNepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
}
/* ........................................header............................................ */
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
section{
  background: url(bg1.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh - 80px);
}

/*............................ home.................................................. */

#home{
  height:780px; 
}
 .text{
   
    height:10px;
    margin-top:200px;
    margin-left:100px;
    margin-right:200px;
    padding-right:150px;
    padding-left:100px;
   
}
h1{
    font-size:50px;
    font-family: 'Times New Roman', Times, serif;
}
h3{
    font-size:30px;
    font-family: 'Times New Roman', Times, serif;
}
h4{
    font-size:25px;
    font-family: 'Times New Roman', Times, serif;
}
img{
    height:650px;
    margin-left:5px;
    padding-right:10px;
    margin-top:90px;
}
.container{
    display:inline-flex;
}
button{
    padding:15px 15px 15px 15px;
    background-color:#0082e6;
     border:#0082e6;
    border-radius:5px;
    color:white;
    font-size:20px;
    margin-left:50px;
    margin-top:50px;
}
button a{
  color:white;
}


/* ............................................................images............................................ */

#images{
  height:800px;
}

#images img{
  height :235px;
}

#images .ima{
  display : inline-block;
  margin-top:0px;
}

#images .ima p{
  font-size:20px;
  color:#0082e6;
}
#images .ima:hover{
  background-color:black;
  opacity: 0.5;
}


/* ........................................................footer css............................................ */
#footer{
  height:250px;
  width: 1000px;
  
}
.footer{
  display:inline-flex;
  background-color:black;
  padding-top: 60px;
  padding-bottom:50px;
  
}
.line1{
  height:200px;
  width:500px;
  margin-left:100px;
}
.line1 p{
  color:white;
}
.line2{
 
  height:200px;
  width:450px;
  margin-left:200px;
  
}
.line2 a{
  padding-top:5px;
  color:white;
  font-size:18px;
}
.line3{
 
  height:200px;
  width:450px;
  margin-left:150px;
  margin-right:50px;
 
}
.line3 input{
 
  padding-left:170px;
  padding-right:100px;
  padding-top:12px;
  padding-bottom:12px;
  border:2px solid;
  box-shadow:: 5px 10px 15px;
  text-align: left;
}
.line3 button{
  /* padding-left:150px;
  padding-right:208px; */
  padding-left:200px;
  padding-right:155px;
  padding-top:12px;
  padding-bottom:12px;
  text-align: center;
  margin-left:0px;
  margin-top:5px;
}
h1{
  color:#0082e6;
}

/* contact us */
#contact{
  height:650px;
}
 .map{
  display:inline-block;
  
 }

 #contact form{
  float:left
   width:500px;
   margin-top:0px;
   height:500px;
   /* border:3px solid; */
   margin-left:150px;
   margin-right:0px;
   /* padding:200px; */
   padding-left:100px;
   padding-top:50px;
   padding-right:100px;
   border-radius: 15px;
   box-shadow: 5px 10px 15px;

 }
 .map1{
  float:right;
  width:700px;
  height:500px;
  margin-right: 150px;
  border:none;
 }
 .btn{
  padding:20px;
  border:none;
  background: #0082e6;
  color:white;
  
 }
 #contact input{
  padding:5px;
 border-radius:8px;
 }

 
 #contact textarea{
  border-radius:8px;
 }

    </style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">TiffinService</label>
      <ul>
        <li><a class="active" href="hom.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="manu.php">Manu</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="registration.php">Registration</a></li>
      </ul>
    </nav>
    <section id="home">
       <div class="container">
    
    <div class="text">
       <h1>Tiffin Service</h1><br>
     <h3> Good food healthy food</h3>
     <h4>Home food pure food</h4><br><br>
     <button><a href="about.php"> Read More</a></button>
     <button><a href="service.php">Call Now</a></button>

    </div>
    <div class="txt">
        
     <img src="s1.jpg" alt="">
        
    </div>
    </div>
    </section>


    <section id="images">
      <center>

    <h1>Types Of Cuisine</h1>

    <div class="imags">
   

    <div class="ima">

    <img src="https://www.rajbhog.com/wp-content/uploads/2021/01/Delights-From-The-Land-Of-Gujarat-870x635.jpg" alt=""><br>
                <p>Gujarati Cuisine</p>

    </div>

    <div class="ima">
    <img src="https://images.slurrp.com/prod/articles/s33zz5opfx.webp" alt=""><br>
                <p>Bihari Cuisine</p>
    </div>

    <div class="ima">
    <img src="https://sukhis.com/app/uploads/2022/05/image2-3.jpg" alt=""><br>
                <p>North Indian Cuisine</p>
    </div>


    <div class="ima">
    <img src="https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/eazytrendz%2F2304%2Ftrend20190218075608.jpg" alt=""><br>
                <p>Punjabi Cuisine</p>
            
    </div>

    <div class="ima">
    <img src="https://sukhis.com/app/uploads/2022/04/image3-4.jpg" alt=""><br>
                <p>South Indian cuisine</p>

    </div>


    <div class="ima">
    <img src="https://duyt4h9nfnj50.cloudfront.net/resized/8df72921f457b55dfc3fc83819f6ebf4-w2880-56.jpg" alt=""><br>
                <p>Chinese Cuisine</p>

    </div>


    <div class="ima">
    <img src="https://www.blueosa.com/wp-content/uploads/2020/01/the-best-top-10-indian-dishes.jpg" alt=""><br>
                <p>Indian Cuisine</p>

    </div>

    <div class="ima">
    <img src="https://static.toiimg.com/thumb/82654714.cms?resizemode=4&width=1200" alt=""><br>
                <p>Rajasthani Cuisine</p>

    </div>

    <div class="ima">
    <img src="https://i0.wp.com/travelikan.com/wp-content/uploads/2023/06/Oh-Calcutta.jpg?fit=734%2C479&ssl=1" alt=""><br>
            <p>Bengali Cuisine</p>
    </div>


    <div class="ima">
      <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2017/10/Idiyappam.jpg" alt="">
            
     <p>Kerala Cuisine</p>

    </div>
</div>
    </center>
    </section>
  
     <?php
// include 'contact1.php';
?> 


<section id="contact">
     
<div class="contact">
  <div class="map">
  <form action="">
     <div class="form">
      <h1>Contact us</h1><br>
      Name : <input type="text" placeholder="Enter your name...." name="name" required><br><br><br>
      Email : <input type="email" placeholder="Enter your name...."  name ="email" required><br><br><br>
      Message : <textarea name="massage" id="" cols="30" rows="10"required placeholder="Write this...."></textarea><br><br>
      <center><input type="submit" name="submit" class="btn"></center>
      

     </div>

  </form>
  </div>


    <div class="map1">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.598118757234!2d72.86256309682416!3d21.180275621980787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fbe10e201f7%3A0xd40ff219cd74238b!2sKrishna%20Krupa%20society%20parvatgam!5e0!3m2!1sen!2sin!4v1690097690709!5m2!1sen!2sin" width="700" height="500" style="border:0;"></iframe>
  </div>
 


</div>

</section>


  

    <section id="footer">
      
    <div class="footer">
      <div class="line1">
           <h1>TiffinService</h1>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, beatae. Nobis sapiente vero sequi quo, labore dignissimos perspiciatis pariatur quae! Obcaecati incidunt architecto distinctio? Ipsum ea illo sequi commodi nulla.</p>
      </div>
      <div class="line2">
        <h1>Quick Links</h1>
            <a href="FAQ.php">F.A.Q.</a><br>
            <a href="about.php">About us</a><br>
            <a href="">Teams Of Service</a><br>
            <a href="contact.php">Contact Us</a><br>
            <a href="job.php">Careers</a><br>
            
      </div>
      <div class="line3">
        <h1>Subscribe</h1>
        <form action="">
          <input type="text" placeholder="Your email id here"  required><br>
          <button>Subscribe</button> 
        </form>
        
      </div>

    </div>

    </section>
  </body>
</html>