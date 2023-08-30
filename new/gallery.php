<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        #gall{
            height:900px;
            margin-left:30px;
        }
        .img1 img{
            height:220px;
            margin:25px;
        }
        .img1{
            display:inline-block;
        }

        h1{
            margin-left:0px;
            margin-top:5px;
        }

        /* footer css */
 #footer{
       height:250px;
       margin-right:300px;
 }
        .footer{
  display:inline-flex;
  background-color:black;
  padding-top: 60px;
  padding-bottom:65px;
  padding-right:21px;
  margin-right:30px;
  
}
.line1{

  /* margin-right:850px;
  margin-left: 50px; */
  height:200px;
  width:500px;
  margin-left:100px;
}
.line1 p{
  color:white;
}
.line2{
  /* border:3px solid;
  margin-right: 500px; */
  height:200px;
  width:450px;
  margin-left:200px;
  
}
.line2 a{
  padding-top:5px;
  color:white;
  font-size:18px;
  text-decoration: none;
}
.line3{
  /* margin-right: 100px; */
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
  padding-right:185px;
  padding-top:12px;
  padding-bottom:12px;
  text-align: center;
  margin-left:0px;
  margin-top:5px;
  background-color:#0082e6;
  border:none;
  color:white;
}
h1{
  color:#0082e6;
  font-size:35px;
}
    </style>
</head>
<body>
 <?php
   include 'hearder.php';
 ?>
<section id="gall">
    <h1>Gallery</h1>

<div class="img">
    <div class="img1">
        <img src="https://sukhis.com/app/uploads/2022/04/image3-4.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://content.jdmagicbox.com/comp/def_content/south_indian_restaurants/default-south-indian-restaurants-3.jpg?clr=" alt="">
    </div>

    <div class="img1">
        <img src="https://cdn4.sharechat.com/gcpstagingtestingtag_72e8fc82-cbd3-4214-a0e8-12ab4da98be0-a175d4a4-1777-4ffc-938c-dda48bdde1f3_cmprsd_40.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://s3.scoopwhoop.com/son/thali/south.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://www.rajbhog.com/wp-content/uploads/2021/01/Delights-From-The-Land-Of-Gujarat-870x635.jpg" alt="">
    </div>
    
    <div class="img1">
        <img src="https://static.toiimg.com/thumb/msid-80362218,width-1280,resizemode-4/80362218.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://realbharat.org/wp-content/uploads/2018/03/Gujarati-Food-7.jpg" alt="">
    </div>

    
    <div class="img1">
        <img src="https://content.jdmagicbox.com/comp/def_content/gujarati-restaurants/shutterstock-345618029-gujarati-restaurants-3-2kwyf.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://static.toiimg.com/photo/87629679.cms" alt="">
    </div>

    <div class="img1">
        <img src="https://static.toiimg.com/thumb/61531367.cms?width=1200&height=900" alt="">
    </div>

    <div class="img1">
        <img src="https://i0.wp.com/i.pinimg.com/originals/2e/e6/ae/2ee6ae552eb5c71a362d4ec0b1ed853e.jpg?resize=640%2C480&ssl=1" alt="">
    </div>

    <div class="img1">
        <img src="https://www.esamskriti.com/essays/docfile/42_2704.jpg" alt="">
    </div>

    <div class="img1">
        <img src=" https://upload.wikimedia.org/wikipedia/commons/5/5f/Royal_Rajasthani_Thali_at_Suvarna_Mahal%2C_Ram_Bagh_Hotel%2C_Jaipur.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/10/rajasthani_thali.jpg" alt="">
    </div>

    <div class="img1">
        <img src="https://rajasthanjourneys.com/wp-content/uploads/2023/04/Rajasthani-Cuisine.jpg" alt="">
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
              <a href="">F.A.Q.</a><br>
              <a href="">About us</a><br>
              <a href="">Teams Of Service</a><br>
              <a href="">Contact Us</a><br>
              <a href="">Careers</a><br>
        </div>
        <div class="line3">
          <h1>Subscribe</h1>
          <form action="">
            <input type="text" placeholder="Your email id here" required><br>
            <button>Subscribe</button>
          </form>
          
        </div>
  
      </div>
  
      </section>


    
</body>
</html>