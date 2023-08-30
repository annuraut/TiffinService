<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .box {background: red;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .box {background: green;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .box {background: blue;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .box {background: orange;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
/* @media only screen and (min-width: 1200px) {
  .box {background: pink;}
}
.box{
    padding:50px;
    border:3px solid blue;
    margin-right:500px;
  } */
    </style>
</head>

<body>
    <div class="box">
        <h1>hello</h1>
    </div>
</body>
</html>