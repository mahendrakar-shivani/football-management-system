<?php
if (!session_id()) {
  session_start();
}
include_once('db.php');

?>




<!DOCTYPE html>
<html>

<head>
  <title>UCL DATABASE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="slider.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <?php
  include('navbar.php');
  ?>


  <div style="max-height: 800px" class="slideshow-container">
    <div class="lft_rft">
      <i onclick="plusSlides(-1)" class="fa fa-chevron-left" id="mainslider_btn_left" style="font-size: 36px"></i>
    </div>

    <div class="lft_rft">
      <i onclick="plusSlides(1)" class="fa fa-chevron-right" id="mainslider_btn_right" style="font-size: 36px"></i>
    </div>

    <div class="mySlides fade">
      <img src="./images/img4.jpg" style="width: 100%;" />
    </div>

    <div class="mySlides fade">
      <img src="./images/img1.jpg" style="width: 100%;" />
    </div>

    <div class="mySlides fade">
      <img src="./images/img2.jpeg" style="width: 100%;" />
    </div>

    <div class="mySlides fade">
      <img src="./images/img3.jpeg" style="width: 100%;" />
    </div>
  </div>
  <br />
  <div style="text-align: center" class="dot_box">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>




</body>

</html>
<script src="./slider.js"></script>