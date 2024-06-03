<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>room</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js.css">
  <style>
      body{
          overflow-x:hidden;
          
      }
      * {
      margin: 0px;
      
    }

    .nav {
      background-color: black;
      height: 60px;
      width: 100%;

    }
    #icon {
      margin-top: 15px;
      /* padding: 7px 2px; */
    }

    .ul1 {
      display: flex;
      flex-direction: row;
      list-style: none;
      float: left;
    }
    #head {
      color: wheat;
      justify-content: center;
      align-items: center;
      padding: 10px 5px;
      font-size: 20px;
      font-style: italic;
      font-family: cursive;
      font-weight: bold;
    }

    .btnn {
      background-color: yellowgreen;
      color: wheat;
      border:1px solid wheat;
      margin: 10px 2px;
      margin-right: 0%;

      margin-left: 700px;


    }
    #a :hover {
      color: yellowgreen;
      background-color: wheat;
      border:1px solid yellowgreen;
    
    }

    #one {
     
      opacity: 1;
      z-index: 12px;
      height: 650px;
      animation-name: example;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      animation-delay: 200ms;

    }
    @keyframes example {
  0%{
    background: url("images/bg_2.jpg.webp") no-repeat center/cover;
    
  }
  100% {
    background: url("images/bg_2.jpg.webp") no-repeat center/cover;
    }
}
      
            
.container{
     
     height: 400px;
     padding: 100px;
     padding-top: 10px;
    
   }
   .itemss{
     display: flex;
     flex-direction: row-reverse;
    
     width:750px;
     font-size: 16px;
     font-style: italic;
   
     height: 400px;
     
    

   }
   .b{
     padding: 6px 14px ;

     margin-top: 30px;
     
     text-decoration: none;
     
     color:black ;
     display:inline;
   }
   a.b{
        color:white;
        font-weight:bold;
    }
    a.b:hover {
      color: cornsilk;
      
    
    }
    

    /* .icon2{
      
      font-size: 38px;
      font-weight: bold;
      font-style: italic;
      padding-top: 8px;
      margin-top: 8px;
      color:black ;
      margin-bottom: 0%;
      
    } */
    .textty{
        display:flex;
        flex-direction:row;
       
        width: 400px;
        margin-left: -180px;
    }
    .t{
      font-family: Outfit;
  font-style: normal;
  font-weight: 400;
  font-size: 30px;
  line-height: 36px;
  letter-spacing: -0.02em;
  max-width: 800px;
  

    }
    
    .t1,.t2 {
    display: block;
    animation-name: slide;
    animation-duration: 6s;
    animation-timing-function: ease-in;
  }
  .t1 {
  
    animation-delay: 10ms;
    animation-fill-mode: forwards;
    padding: 10px 8px;
    
    font-size: 42px;
    font-style: italic;
    
    
  }
  .t2 {
   
    animation-delay: 200ms;
    animation-fill-mode: both;
    padding-top: 4px;
    /* margin-left: 60px; */
    font-size: 28px;
    font-weight: bold;
    font-style: italic;
  }
  @keyframes slide {
    0%,
    50% {
      transform: translateY(100%);
      opacity: 0;
    }
     
    60%,
    100% {
      transform: translateY(0);
      opacity: 1;
    
    }
  }

     
  .ftco-section {
    position: relative;
    width: 100%;
    display: block;
}
.ftco-footer {
    font-size: 16px;
    padding: 7em 0;
    background: #232323;
}
.ftco-bg-dark {
    background: #3c312e;
}
.ftco-section {
    padding: 6em 0;
    position: relative;
}
figcaption, figure, footer, header, main, nav, section {
    display: block;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
footer {
    display: block;
}

@media (min-width: 768px){
.container {
    max-width: 720px;
}
}
@media (min-width: 576px){
.container {
    max-width: 540px;
}
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.mb-5 {
    margin-bottom: 3rem !important;
}
.ftco-heading-2{
  color: aliceblue;
}
.ftco-footer p {
    color: rgba(255, 255, 255, 0.7);
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.ftco-footer a {
    color: rgba(255, 255, 255, 0.7);
}
.pb-2, .py-2 {
    padding-bottom: 0.5rem !important;
}
.py-2 {
    padding-top: 0.5rem !important;
}
.d-block {
    display: block !important;
}
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #b69100;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
.block-23 ul {
    padding: 0;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.block-23 ul li .icon, .block-23 ul li .text {
    display: table-cell;
    vertical-align: top;
}
.block-23 ul li span {
    color: rgba(255, 255, 255, 0.7);
}

li {
    text-align: -webkit-match-parent;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}

ul {
    list-style-type: disc;
}

.row2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
/* user agent stylesheet  2 section*/
.ftco-section {
    position: relative;
    width: 100%;
    display: block;
}
.ftco-no-pb {
    padding-bottom: 0px;
}
.ftco-section {
    padding: 6em 0;
    position: relative;
}
.bg-light {
    background: #f8f9fa !important;
}
.bg-light {
    background-color: #f8f9fa !important;
}
figcaption, figure, footer, header, main, nav, section {
    display: block;
}
.px-0 {
    padding-left: 0 !important;
}
.px-0 {
    padding-right: 0 !important;
}
.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.pb-3, .py-3 {
    padding-bottom: 1rem !important;
}
.mb-5 {
    margin-bottom: 3rem !important;
}
.justify-content-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.no-gutters > .col, .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}
/* .ftco-animate {
    opacity: 0;
    visibility: hidden;
} */
.text-center {
    text-align: center !important;
}
@media (min-width: 768px){
.col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
}
}
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
.ftco-animated {
    -webkit-animation-duration: .5s;
    animation-duration: .5s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
.heading-section .subheading {
    font-size: 13px;
    display: block;
    margin-bottom: 5px;
    color: #b69100;
    text-transform: uppercase;
    letter-spacing: 2px;
}.heading-section h2 {
    font-size: 38px;
    font-weight: 400;
    position: relative;
}
.mb-4 {
    margin-bottom: 1.5rem !important;
}
h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
    line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-family: "Playfair Display", Arial, serif;
}
h2, .h2 {
    font-size: 2rem;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.no-gutters > .col, .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.room-wrap {
    width: 100%;
    background: #fff;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.code {
    width: 100%;
    background: #fff;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
@media (min-width: 768px){
.d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
}
element.style {
    background-image: url(images/r1.jpg);
}
.room-wrap .img {
    width: 100%;
    height: 360px;
    display: block;
}
.insta-img, .room-img, .hero-wrap, .img, .blog-img, .user-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #b69100;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
.room-wrap .half {
    width: 100%;
    position: relative;
}
.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.room-wrap .text {
    width: 100%;
}
.text-center {
    text-align: center !important;
}
.p-4 {
    padding: 1.5rem !important;
}.room-wrap .text p {
    color: rgba(255, 255, 255, 0.9);
}
.mb-0 {
    margin-bottom: 0 !important;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.star span {
    color: #b69100;
    margin: 0 4px;
}
.room-wrap .text p {
    color: rgba(255, 255, 255, 0.9);
}
.mb-0 {
    margin-bottom: 0 !important;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.room-wrap .text span.price {
    font-size: 26px;
    color: #b69100;
    position: relative;
}
.mr-1 {
    margin-right: 0.25rem !important;
}
.room-wrap .text span.per {
    font-size: 14px;
    color: #666666;
}
.room-wrap .text h3 {
    font-size: 30px;
    margin-bottom: 5px;
}
.text h3 a {
    color: #000000;
}
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #b69100;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
.room-wrap .text p {
    color: rgba(255, 255, 255, 0.9);
}
.pt-1 {
    padding-top: 0.25rem !important;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.room-wrap .text .btn-custom {
    display: inline-block;
    color: #000000;
    border: 2px solid rgba(0, 0, 0, 0.1);
}
.pl-3, .px-3 {
    padding-left: 1rem !important;
}
.pr-3, .px-3 {
    padding-right: 1rem !important;
}
.pb-2, .py-2 {
    padding-bottom: 0.5rem !important;
}
.py-2 {
    padding-top: 0.5rem !important;
}
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #b69100;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
.room-wrap .half {
    width: 100%;
    position: relative;
}
.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.room-wrap .half {
    width: 100%;
    position: relative;
}
.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.room-wrap .text {
    width: 100%;
}
.text-center {
    text-align: center !important;
}
.p-4 {
    padding: 1.5rem !important;
}
/* [class^="icon-"], [class*=" icon-"] {
    font-family: 'icomoon' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
} */
.room-wrap .half.left-arrow:after {
    position: absolute;
    top: 50%;
    left: -15px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    content: '';
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 12px 15px 12px 0;
    border-color: transparent #fff transparent transparent;
}
.room-wrap .half:after, .room-wrap .half:before {
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.room-wrap .half {
    width: 100%;
    position: relative;
}
.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.room-wrap .text {
    width: 100%;
}
.half:hover {
  background-color: rgb(174, 230, 119);
  
  color:white;
}
.text-center {
    text-align: center !important;
}
.p-4 {
    padding: 1.5rem !important;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
  </style>
</head>

<body>
  <!-- <nav class="nav">
    <div class="cont">
      <ul class="ul1">
        <li>
          <img src="flowers.jpg" id="icon" alt="" height="30px" height="40px" style="border-radius:50% ;">
        </li>
        <li>
          <p id="head">the wave</p>
        </li>
        <li id="a" >
          <div class="btnn" width="150px" style="border-radius:40%; padding:5px;">
            <a>Book Now</a>
          </div>

        </li>
      </ul>


    </div>

  </nav> -->
  <section id="one">
    
    <div class="container text-center">
      <!-- <div class="icon text-center" >
       
        the wave
      </div> -->
   <div class="itemss">
    <div class="lamp ">
    <a class="b" href="home.php">Home</a>
     <a class="b"  href="room.php">Rooms</a>
     <a class="b"  href="resturant.php" >Resturant</a>
     <a class="b"  href="about.php">About</a>
     <a class="b"  href="contact2.php">Contact</a>
     <a class="b"  href="booking.php">Booking</a>
    </div>


   </div>
   <div class="textty">
   <h3 class="text1">
       <span style="color:white;font-size: 90px;
    font-family: 'icomoon' !important;speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;" class="t t1">Rooms</span>
       <span style="color: white; font-size: 26px;font-family: 'icomoon' !important;speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;" class="t t2">Comes a fine place to serve its name.</span>
     </h3>
   </div>
   </section>
   <section class="ftco-section bg-light ftco-no-pb">
<div class="container-fluid px-0">
<div class="row no-gutters justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
<span class="subheading">Roxandrea Rooms</span>
<h2 class="mb-4">Hotel Master's Rooms</h2>
</div>
</div>
<div class="row no-gutters">
<div class="col-lg-6">
<div class="room-wrap d-md-flex">

<a href="rooms-single.html" class="img" style="background-image: url(images/r1.jpg);"></a>
<div class="half left-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
<h3 class="mb-3"><a href="single_room.php">Suite Room</a></h3>
<p class="pt-1"><a href="single_room.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
</div>
</div>


<!-- </div> -->
<!-- </div> -->
<!-- <div class="col-lg-6"> -->
<!-- <div class="room-wrap d-md-flex"> -->

<a href="rooms-single.html" class="img" style="background-image: url(images/r2.jpg);"></a>
<div class="half left-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
<h3 class="mb-3"><a href="classic_room.php">Classic Room</a></h3>
<p class="pt-1"><a href="classic_room.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
</div>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="room-wrap d-md-flex">
<!-- <a href="#" class="img " style="background-image: url(images/r3.jpg);"></a> -->

<div class="half right-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
<h3 class="mb-3"><a href="family_room.php">Family Room</a></h3>
<p class="pt-1"><a href="family_room.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>

</div>
</div>
<a href="#" class="img " style="background-image: url(images/r3.jpg);"></a>

<!-- </div>
</div> -->
<!-- <div class="col-lg-6">
<div class="room-wrap d-md-flex"> -->

<a href="#" class="img order-md-last" style="background-image: url(images/ro1.jpg);"></a>
<div class="half right-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
<h3 class="mb-3"><a href="deluxe_room.php">Deluxe Room</a></h3>
<p class="pt-1"><a href="deluxe_room.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
</div>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="room-wrap d-md-flex">

<a href="rooms-single.html" class="img" style="background-image: url(images/ro2.jpg);"></a>
<div class="half left-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
<h3 class="mb-3"><a href="luxury_room.php">Luxury Room</a></h3>
<p class="pt-1"><a href="luxury_room.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
</div>
</div>

<!-- </div>
</div>
<div class="col-lg-6">
<div class="room-wrap d-md-flex"> -->

<a href="rooms-single.html" class="img" style="background-image: url(images/ro3.jpg);"></a>
<div class="half left-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p>
<h3 class="mb-3"><a href="superior_room.php">Superior Room</a></h3>
<p class="pt-1"><a href="superior_room.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
   <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container2">
    <div class="row2 mb-5">
    <div class="col-md">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Roxandrea</h2>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-4 ml-md-5">
    <h2 class="ftco-heading-2">Useful Links</h2>
    <ul class="list-unstyled">
    <li><a href="#blog" class="py-2 d-block">Blog</a></li>
    <li><a href="room.php" class="py-2 d-block">Rooms</a></li>
    <li><a href="#seven" class="py-2 d-block">Amenities</a></li>
    <li><a href="#six" class="py-2 d-block">Gift Card</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Privacy</h2>
    <ul class="list-unstyled">
    <li><a href="booking.php" class="py-2 d-block">Booking</a></li>
    <li><a href="about.php" class="py-2 d-block">About Us</a></li>
    <li><a href="contact2.php" class="py-2 d-block">Contact Us</a></li>
    <li><a href="#five" class="py-2 d-block">Services</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Have a Questions?</h2>
    <div class="block-23 mb-3">
    <ul style="list-style: none;">
    <li><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
    <li><span class="text">+2 392 3929 210</span></a></li>
    <li><span class="text">info@yourdomain.com</span></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="row2">
    <div class="col-md-12 text-center">
    <p>
    Copyright ©<script>document.write(new Date().getFullYear());</script>2023 All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    </p>
    </div>
    </div>
    </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>