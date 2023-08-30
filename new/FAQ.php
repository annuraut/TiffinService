<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #0082e6;
  color: white;
  /* cursor: pointer; */
  padding: 18px;
  width: 80%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  /* transition: 0.4s; */
  margin-left:150px; 
  margin-right:200px;
  margin-bottom:10px;
}

.active, .accordion:hover {
  background-color: #0082e6;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
  margin-left:400px; 
  margin-right:400px;
                                                                                                                                              
}
button {
  background-color: #0082e6;  
  padding:5px;
  border:none;
 
  padding-left:15px; 
  padding-right:15px; 
 
  }
  button a{
    color:white;
  }
  #faq{
    height:700px;
  }
</style>
</head>
<body>
  <section id="faq">

<?php
include 'hearder.php'
?>
<br><br>
<center>

<h2>F.A.Q.</h2><br>

<button class="accordion">How to apply job TiffinService website ?</button>
<div class="panel">
  <p>If you want to apply in Tiffinservice website then click on the link given below.</p><br>

  <br><br><br>
</div>

<button class="accordion">How to order food ?</button>
<div class="panel">
  <p>You will see all the thalis in the menu page, in which you will see the order button and price.</p><br><br><br>
</div>

<button class="accordion">How to apply for job?</button>
<div class="panel">
  <p>First of all you have to register for job in Tiffinserviceweek site, after this you have to login and then you can apply for the job.</p><br><br><br>
</div>
</center>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</section>

<?php
 include 'footer.php'
?>

</body>
</html>
