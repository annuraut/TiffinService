<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style>
      
    
        .slide {
          
            border: 2px solid black;
        
            padding-bottom: 20px;
            padding-right: 150px;
            padding-left: 150px;
            margin-left: 0px;
            text-align:center;
            /* background-color: lightgreen; */
        }
 
 #job{
  height: 800px;
 }
img{
  height:450px;
  border:0.5px solid #0082e6;
  box-shadow:5px 10px 15px #0082e6;
  border-radius:10px;
}

.jobs{
  display:inline-flex;
}
.job{
  margin-right:50px;
  /* border:3px solid; */
  margin-left:100px;
  padding-left:10px;
}
  h1 {
    text-align: center;
    color:#0082e6;
    font-size:50px;
    padding-top:25px;
    padding-bottom:25px;
   }

 button {
  background-color: #0082e6;  
  padding:5px;
  border:none;
  
  color:white;
  padding-left:15px; 
  padding-right:15px; 
 
  }
  button a{
    text-decoration: none;
    color:white;
  }
    </style>
</head>
<body>
  <?php
  include 'hearder.php'

  ?>
  <section id="job">
    <h1>Careers</h1>
    <div class="jobs">
      <div class="img">
      <img src="ss.png" alt="">
      </div>
    <div class="job">

    <div class="slide">
    <br> <h2>Cook</h2> <br> 
        
        <h4>Qualification :- 12th Pass </h4>
         
        <!-- <span id="slidetoggle">Read more....</span> -->
        <p id="hello"><b> Skills :- </b> Must know how to cook Like,Bihari Food, Rajasthani Food, Marathi Food, South Food<br>
<b> Language :- </b> English ,hindi,Gujarati <br>   
<b> Experience :- </b> 1-5 years <br>
<b> location :- </b> Surat <br>
<b>Salary :- 10,000 - 15,000</b><br><br>
<button><a href="login.php">Apply</a></button>
</p> 
<span id="slidetoggle">Read more....</span>
    </div><br>


    <div class="slide">
    <br>  <h2>Account Assistant</h2><br>
        
        <h4>Qualification :- Graduate </h4>  
         
        <!-- <span id="slidetoggle">Read more....</span> -->
        <p id="hello1"><b> Skills :- </b> Telly,Account Assistant, GST <br>   
<b> Experience :- </b> 0-2 years <br>
<b> location :- </b> Surat <br>
<b>Salary :- 10,000 - 15,000</b><br><br>
<button><a href="login.php">Apply</a></button>
</p> 
<span id="slidetoggle1">Read more....</span>
    </div><br>
    
      </div>

      </div>


<script>


$(document).ready(function() {
            $("#slidetoggle").click(function () {
                $("#hello").slideToggle();
            });
        });



        $(document).ready(function () {
            $("#slidetoggle1").click(function () {
                $("#hello1").slideToggle("slow");
            });
        });


</script>
</section>

<?php
include 'footer.php'
?>
</body>
</html>
