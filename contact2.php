<?php
$showAlert = false;
$showError = false;
$server = "localhost";
$username = "root";
$password = "";
$database = "resort";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
   //  include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["msg"];
    
    $sql = "INSERT INTO `contact` ( `name`, `email`, `subject`,`msg`) VALUES ('$name', '$email', '$subject','$msg')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
               // echo"succesfully done";
               
            }
            else{
               $showError = "Error occured";
               // echo"error occur";
           }

    
    }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact2</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    
  <style>
    body {
    font-family: "Poppins", Arial, sans-serif;
    background: #fff;
    font-size: 15px;
    line-height: 1.8;
    font-weight: 400;
    color: #666666;
    overflow-x: hidden;
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
      
            
    .india{
      height:350px;
      width:300px;
      background: url("images/india2.jpg") no-repeat center/cover;
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
/* section */
.ftco-section2 {
    position: relative;
    width: 100%;
    display: block;
}
.ftco-section2 {
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
/* @media (min-width: 768px){
.container2 {
    max-width: 720px;
}
}
@media (min-width: 576px){
.container2 {
    max-width: 540px;
}
}
.container2 {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
} */
.mb-5 {
    margin-bottom: 3rem !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
/* .row2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
} */
.mb-4 {
    margin-bottom: 1.5rem !important;
}
@media (min-width: 768px){
.col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
}
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
#h3{
    line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-family: "Playfair Display", Arial, serif;
}
h3, #h3 {
    font-size: 1.75rem;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, #h3, .h4, .h5, .h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h2, .h2 {
    font-size: 2rem;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}.w-100 {
    width: 100% !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
@media (min-width: 768px){
.col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}
}
.contact-section2 .info {
    width: 100%;
}
.p-4 {
    padding: 1.5rem !important;
}
.bg-white {
    background-color: #fff !important;
}
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.contact-section2 .info {
    width: 100%;
}
.p-4 {
    padding: 1.5rem !important;
}
.bg-white {
    background-color: #fff !important;
}
.contact-section2 .contact-info p a {
    color: #1a1a1a;
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
/* .row2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
} */
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
@media (min-width: 768px){
.order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
}
}
@media (min-width: 768px){
.col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
}
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.contact-section2 .contact-form {
    width: 100%;
}
.p-5 {
    padding: 3rem !important;
}
.bg-white {
    background-color: #fff !important;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
form {
    display: block;
    margin-top: 0em;
}
.form-group {
    margin-bottom: 1rem;
}
.block-9 .form-control {
    outline: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    font-size: 15px;
}
.form-control {
    height: 52px !important;
    background: #fff !important;
    color: #000000 !important;
    font-size: 18px;
    border-radius: 0px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
button, input {
    overflow: visible;
}
input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.btn.btn-primary {
    background: #b69100;
    border: 1px solid #b69100;
    color: #fff;
}
button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
}
.btn {
    cursor: pointer;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}
.px-5 {
    padding-left: 3rem !important;
}
.px-5 {
    padding-right: 3rem !important;
}
.pb-3, .py-3 {
    padding-bottom: 1rem !important;
}
.py-3 {
    padding-top: 1rem !important;
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
button, [type="button"], [type="reset"], [type="submit"] {
    -webkit-appearance: button;
}
button, input {
    overflow: visible;
}
input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
#sec{
  height:800px;
}

  </style>
</head>

<body>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your message has been sent
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
    }
    if($showError){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Warning</strong> Invalid Error
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>   ';
    }
    ?>
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
    -webkit-font-smoothing: antialiased;" class="t t1">Contact us</span>
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
   <section class="ftco-section2 contact-section2 bg-light" id="sec">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="h3" id="h3" style="line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-size: 32px;
    font-family: 'icomoon' !important;">Contact Information</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3 d-flex">
<div class="info bg-white p-4">
<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="info bg-white p-4">
<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="info bg-white p-4">
<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="info bg-white p-4">
<p><span>Website</span> <a href="#">yoursite.com</a></p>
</div>
</div>
</div>
<div class="row block-9">
<div class="col-md-6 order-md-last d-flex">
<form action="" class="bg-white p-5 contact-form" method="post">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name" name="name" required="">
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="Your Email" name="email" required="">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject" name="subject" required="">
</div>
<div class="form-group">
<textarea  id="msg" cols="30" rows="7" class="form-control" placeholder="Message" name="msg" required=""></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
</div>
</form>
</div>
<div class="india col-md-6 d-flex" >

</div>
</div>
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

</html>