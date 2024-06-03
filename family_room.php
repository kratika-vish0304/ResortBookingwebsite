<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>family_room</title>
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
    .items{
      display: flex;
      flex-direction: row-reverse;
      
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
    

    .icon{
      
      font-size: 38px;
      font-weight: bold;
      font-style: italic;
      padding-top: 8px;
      margin-top: 8px;
      color:black ;
      margin-bottom: 0%;
      
    }
    .text{
    display:flex;
    flex-direction:left;  
     /* border:1px solid red; */
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

/* @media (min-width: 768px)
.container {
    max-width: 720px;
}
@media (min-width: 576px)
.container {
    max-width: 540px;
} */
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

.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
user agent stylesheet
div {
    display: block;
}
.part1{
    display:flex;
    flex-direction:row;
} 
.cont9{
 
 width: 100%;
 margin:30px;
 
}
.category{
    margin:30px 10px;
    width: 100%;
    
}
#h3 {
    font-size: 22px;
    text-align:center;
    margin-bottom: 35px;
    margin-top: 15px;
    line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-weight:bold;
    padding-left: 10px;
    font-family: "Playfair Display", Arial, serif;
}
.category li{

position: relative;
    margin-bottom: 10px;
    /* margin: auto; */
    padding-bottom: 10px;
    padding-left: 10px;
    border-bottom: 1px dotted #dee2e6;
    list-style: none;
}
.category li a {
    display: block;
    /* margin: auto; */
    text-align:center;
    color:#b69100;
    font-size:19px;
    text-decoration: none;
    background-color: transparent;
    
}
.part2{
    margin: 15px;
    padding:15px;
}
.num{
    margin: 30px;
    display:flex;
    flex-direction:row;
}
.discription h2{
    line-height: 1.5;
    color: #836800;
    font-size: 32px;
    font-weight:400;
    font-style:italic;
}
.discription p{
    font-family: "Poppins", Arial, sans-serif;
    background: #fff;
    font-size: 15px;
    line-height: 1.8;
    font-weight: 400;
    color: #666666;
}
.num ul li{
    font-family: "Poppins", Arial, sans-serif;
    background: #fff;
    font-size: 15px;
    line-height: 1.8;
    font-weight: 400;
    color: #666666;
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
   <div class="items">
    <div class="lamp ">
    <a class="b" href="home.php">Home</a>
     <a class="b"  href="room.php">Rooms</a>
     <a class="b"  href="resturant.php" >Resturant</a>
     <a class="b"  href="about.php">About</a>
     <a class="b"  href="contact2.php">Contact</a>
     <a class="b"  href="booking.php">Booking</a>
    </div>


   </div>
   <div class="text">
     <h3 class="text1">
       <span style="color:white;font-size: 90px;
    font-family: 'icomoon' !important;speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;" class="t t1">Family Room</span>
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
   <section class="two" id="two">
       <div class="part1">
       <div class="cont9"  >
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="margin: auto;">
              <img src="images/r3.jpg" class="d-block" alt="..." width="650px">
            </div>
            <div class="carousel-item">
              <img src="images/bb2.jpg" class="d-block" alt="..." width="650px">
            </div>
            <div class="carousel-item">
              <img src="images/bb3.jpg" class="d-block" alt="..." width="650px">
            </div>
            <div class="carousel-item">
              <img src="images/bb4.jpg" class="d-block" alt="..." width="650px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        

        </div>
        <div class="category">
        <h3 id="h3">Categories</h3>
           
        <li><a href="single_room.php">Suite Room</a></li>
            <li><a href="deluxe_room.php">Deluxe Room</a></li>
            <li><a href="family_room.php">Family Room</a></li>
            <li><a href="superior_room.php">Superior Room</a></li>
            <li><a href="luxury_room.php">Luxury Room</a></li>
            <li><a href="classic_room.php">Classic Room</a></li>
            <li><a href="">Classic Room</a></li>
      </div>
       </div>
       <div class="part2">
           <div class="discription">
               <h2>Family Room</h2>
               <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
               <div class="num">
                   <ul>
                       <li>max:3 person</li>
                       <li>size: 45 "m2"</li>
                   </ul>
                   <ul>
                       <li>view:sea view</li>
                       <li>bed:1</li>
                   </ul>
               </div>
               <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
           </div>
           <button style="background-color:orange;border:1px solid white;"><a href="booking.php" style="color:white;">Book Now</a></button>
       </div>
   </section>
   <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
    <div class="row mb-5">
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
    <div class="row">
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