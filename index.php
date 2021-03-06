
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- For navbar -->

<link rel="stylesheet" href="css/index.css"> <!-- My css file -->

<link href="css/Bebas.Neue.css" rel="stylesheet"> <!-- Font(orange letters) -->

<link rel="stylesheet" href="css/slideshow.w3.css"><!-- Write your comments here -->

<link href="css/Oswald.css" rel="stylesheet"><!-- Write your comments here -->
<title>Pizza 2go </title>
<link rel="shortcut icon" href="img/pizza_title.png" type="image/png">

</head>
<body>
<div class="container">

<?php include("header.php"); ?>



<div class="ordering">

<p style="font-family: 'Bebas Neue',cursive;font-size:65px;color:#FF6347;margin-left:50px;margin-top:50px;">--------START YOUR ORDER</p>

  <div class="btn-group ordering-buttons" style ="position: absolute;top:80px;" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary ordering-button1"  style="font-family: 'Bebas Neue',cursive;font-size:20px;">DELIVERY</button>

  <p style="font-family: 'Bebas Neue',cursive;font-size:25px;color:#FF6347;margin-left:650px;margin-top:0px;;">OR</p>

  <button type="button" class="btn btn-secondary ordering-button2" style="font-family: 'Bebas Neue',cursive;font-size:20px;">CARRY OUT
  </button>
</div>

</div>

<div class="slideshow-cover">

<div>
<div class="w3-content w3-section slideshow" style="max-width:585px">
  <img class="mySlides" src="img/pizza1.jpg" style="width:100%">
  <img class="mySlides" src="img/pizza3.jpg" style="width:100%">
    <img class="mySlides" src="img/pizza4.jpg" style="width:100%">
  <img class="mySlides" src="img/pizza5.jpg" style="width:100%">
    <img class="mySlides" src="img/pizza7.jpg" style="width:100%">
        <img class="mySlides" src="img/pizza8.jpg" style="width:100%">
    <img class="mySlides" src="img/pizza9.jpg" style="width:100%">


</div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

<div class="CCA">

<div class="coca-cola">
<div class="coca1">
<img src="img/coca1.jpg" width="200px" height="110px" >
</div>

<div class="coca2">
<img src="img/coca2.jpg" width="200px" height="110px" >
</div>

<div class="coca3">
<img src="img/coca3.jpg" width="200px" height="110px" >
</div>

<div class="coca4">
<img src="img/coca4.jpg" width="160px" height="110px" >
</div>
<div class="coca5">
<img src="img/coca5.jpg" width="200px" height="110px" >
</div>

<div class="coca6">
<img src="img/coca6.jpg" width="200px" height="110px" >
</div>

</div>





<div class="contact-d" id="contact" style="margin-top: 950px !important;">

<div class="phone-text">

 <pre style="color:black">           Call Us at Number:
           +387 (0)33 000 111 
  </pre> 
</div>

<div class="number">

</div>

<div class="location-text">
<pre style="color:black">               Our Main Location:
               128 Lakewood Blvd., Lakewood, CA 90712
               located between Target and Macy's
  </pre> 
</div>

<div class="location">
</div>

<div class="email-text">
<pre style="color:black">             Our E-Mail is:
             info@pizza2go_onlineorder.com
  </pre> 

</div>

<div class="email">
</div>

</div>

<div class="about-cover" id="about">

<div class="about">
<pre style="font-family: 'Oswald', sans-serif;;font-size:14px;color:#848484">
  By placing an order with Pizza 2go, you agree to be bound by  the terms set out here.Please note that (a) a minimum purchase 
  of Rs. 500 is required for delivery; (b) all our prices include VAT; (c) Our drivers carry less than Rs. 500 in cash. Please 
  ensure that the amount that you remit to him does not require change in excess of Rs. 500; (d) service is available only in 
  the areas of Home Delivery of Pizza 2go,Monday to Sunday (including public holidays) from 09h00 to 22h00;(e) the hours of 
  operation may however vary from store to store;(f) Pizza 2go reserves the right to make unannounce price changes at any time;
  (g) cheques are not accepted as payment method;  and (h) the data provided by customers will be included in the user and 
  promotional database,owned by DOMC Ltd, which endeavours to comply with the Data Protection Act 2017.
</pre>


</div>
</div>
</div>



</div> 
</body>





</html>