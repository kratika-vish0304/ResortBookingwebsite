<?php

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>home</title>
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
  .cont3{
    display: flex;
    flex-direction: row;
    /* margin: 25px; */
    margin:auto ;
    margin-top: 60px;
    
    
  }
  .cd1{
    margin: 30px;
    position: relative;
  overflow: hidden;
  border-radius: 0px;
  }
  .cb1:hover{
    background-color: #639187;
    color: wheat;
    
    
  }
  



#third{
  background: url("images/grass.jpg") no-repeat center/cover;
  opacity: 0.7;
  height: 600px;
}
#two{
  height: 450px;
  
}
.head4{
  
  font-size: 40px;
    color: gray;
    text-align: center;
    font-family: 'Great Vibes',cursive;
    font-weight: 400;
    font-style: italic;
    text-transform: none;
    margin-top: 120px;
    
}
.pfour{
  margin-top: 50px;
  font-size: 30px;
  color: black;
    line-height: 40px;
    text-align: center;
}
.divfour{
  font-size: 22px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: black;
   margin-top: 50px;
  
}
.hr{
  margin-left: 270px;
  margin-top: 30px;
  
}
.divfour:hover{
 
  animation-name: noline;
  animation-duration: 1s;
  animation-iteration-count: 1;
  animation-delay: 0.08s;

}
@keyframes noline {
  0%{
    font-size: 22px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: black;
   margin-top: 50px;
   
  }
 
  100%{
    font-size: 26px;
   font-weight: bold;
   font-family: cursive;
   text-transform: uppercase;
   opacity: 0.2;
  }
}
#five{
  background-color: rgb(65, 64, 64);
  height: 680px;
 
 
}
.cont5{
  display: flex;
  flex-direction: row;
}
.cont6{
  display: flex;
  flex-direction: row;
}
.ccont{
  
  width: 900px;
  margin: 40px 10px;
  height: 250px;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: aliceblue;
  
}

.imggg img{
  width: 80px; 
  height: 80px;
  /* opacity: 0; */
  
  
}
.imggg:hover{
  opacity: 0.5;
}
#six{
  height: 500px;
}
.cont7{
  display: flex;
  flex-direction: row;
  
}
.cont8{
 
  width: 45%;
}
.cont9{
 
  width: 60%;
  margin: 50px;
  margin-right: 0px;
  margin-left: 0px;
}
.cont10{
 margin: auto;
  height: 70%;
}
#h6{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 20px;
  text-align: center;
  margin-top: 50%;
  
}
#p6{
  text-align: center;
  line-height: 16px;
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 10px;
    transform-origin: 50% 50%;
    transform: translate(0px, 0px);
    opacity: 1;
    visibility: visible;
    margin: 10px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgb(216, 209, 209);
    
}
.cont11{
  margin-left: 20px;
}
#seven{
  height: 800px;
  margin-bottom: 10px;
}
.two7{
  font-size: 40px;
    color: #859b8f;
    text-align: center;
    font-family: 'Great Vibes',cursive;
    font-weight: 400;
    font-style: italic;
    text-transform: none;
    margin-top: -5px;
}
.one7{
  font-size: 34px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: black;
   margin-top: 50px;
   
}
.btn2 , .btn3{
  background-color: gray;
  color: bisque;
   margin: 0px;
   margin-top: 10px;
   width: 100%;
   padding: 10px;
   
  }
  .cont13{
    display: flex;
    flex-direction: row;
    margin: 25px;
    margin-top: 60px;
    
  }
  .card-one{
    margin: 5px ;
    margin-left: 18px;
    margin-right: 8px;
  }
  .ppp{
    border-bottom: 1px dashed gray;
    padding: 2px 0px;
  }
  .ps{
    font-size: 18px;
    font-family: monospace;
    color: rgb(54, 53, 53);
    padding: 6px 0px;
  }
  h5{
    font-size: 1.25rem;
  }
  .cont14{
    background-color: #3b3e47;;
    height: 50px;
    width: 100%;
    margin: 0px;
    padding: 10px;
  }
  .cont14_a{
    text-decoration: none;
    font-size: larger;
    color: honeydew;
   
  }
  .card-one-body:hover {
    color: ivory;
    background-color: #639187;
  }
  /* .lamp{
   
    margin: auto;
   
    margin-top: 30px;
    
  } */
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
user agent stylesheet
div {
    display: block;
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
.ftco-booking .container div[class*=col-] {
    padding-right: 10px;
    padding-left: 10px;
}
.aside-stretch {
    background: rgba(182, 145, 0, 0.8);
}
.pr-1 {
    padding-right: 0.25rem !important;
}
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.booking-form {
    width: 100%;
}
form {
    display: block;
    margin-top: 0em;
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
.ftco-booking .container div[class*=col-] {
    padding-right: 10px;
    padding-left: 10px;
}
.booking-form .form-group {
    position: relative;
    width: 100%;
    display: block;
    margin-bottom: 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.align-self-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important;
}
.align-items-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important;
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.form-group {
    margin-bottom: 1rem;
}
.booking-form .form-group .wrap {
    width: 100%;
    display: block;
}
.px-4 {
    padding-left: 1.5rem !important;
}
.px-4 {
    padding-right: 1.5rem !important;
}
.pb-3, .py-3 {
    padding-bottom: 1rem !important;
}
.py-3 {
    padding-top: 1rem !important;
}
.align-self-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important;
}
.bg-white {
    background-color: #fff !important;
}
.booking-form .form-group label {
    font-weight: 600;
    font-size: 12px;
    color: #000000;
    text-transform: uppercase;
    letter-spacing: 2px;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
}
.booking-form .form-control {
    border: none !important;
    height: 40px !important;
    padding-left: 0;
    padding-right: 0;
    color: black !important;
    font-size: 18px;
    border-radius: 0px;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    font-family: "Playfair Display", Arial, serif;
    background: transparent !important;
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
.col, .col-sm-12, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-12, .col-md, .col-lg-4, .col-lg-6, .col-lg-8, .col-lg-12 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
/*for blog*/
.ftco-section {
    position: relative;
    width: 100%;
    display: block;
}
.ftco-section {
    padding: 6em 0;
    position: relative;
}

 .container101 {
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
.row11 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
.row11 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}




.text-center {
    text-align: center !important;
}
/* @media (min-width: 768px)
.col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
} */
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
    color: orange;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.heading-section h2 {
    font-size: 38px;
    font-weight: 400;
    position: relative;
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

.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
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



.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
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

@media (min-width: 768px){
.blog-entry {
    margin-bottom: 30px;
}
}
 .align-self-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important;
}
element.style {
    background-image: url(flowers.jpg);
}

.block-20 {
    overflow: hidden;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 250px;
    position: relative;
    display: block;
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

.blog-entry .text {
    position: relative;
    border-top: 0;
    border-radius: 2px;
}

.text-center {
    text-align: center !important;
}

.mt-3 {
    margin-top: 1rem !important;
}
.mb-2 {
    margin-bottom: 0.5rem !important;
}


.blog-entry .meta > div {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
    font-size: 15px;
}
.blog-entry .meta > div a {
    font-size: 12px;
    text-transform: uppercase;
    color: #b3b3b3;
    font-weight: 500;
    letter-spacing: 1px;
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
.blog-entry .text .heading {
    font-size: 20px;
    margin-bottom: 16px;
}
h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
    line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-family: "Playfair Display", Arial, serif;
}
h3, .h3 {
    font-size: 1.75rem;
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
.blog-entry .text .heading a {
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

.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
@media (min-width: 768px){
.col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
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
/*food*/
element.style {
    background-image: url(images/restaurant-pattern.jpg);
}
.ftco-section {
    position: relative;
    width: 100%;
    display: block;
}
.ftco-section {
    padding: 6em 0;
    position: relative;
}
.ftco-menu {
    background-repeat: repeat;
    background-position: center center;
}
figcaption, figure, footer, header, main, nav, section {
    display: block;
}
element.style {
}

.container {
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
}
.heading-section h2 {
    font-size: 38px;
    font-weight: 400;
    position: relative;
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
/* .ftco-animate {
    opacity: 0;
    visibility: hidden;
} */
.pricing-entry {
    width: 100%;
    display: block;
    margin-bottom: 30px;
    background: #f8f9fa;
    background: #fff;
    padding: 30px 20px;
    -webkit-box-shadow: 0px 15px 24px -21px rgb(0 0 0 / 21%);
    -moz-box-shadow: 0px 15px 24px -21px rgba(0, 0, 0, 0.21);
    box-shadow: 0px 15px 24px -21px rgb(0 0 0 / 21%);
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
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

element.style {
    background-image: url(images/menu-1.jpg);
}
.pricing-entry .img {
    width: 100px;
    height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
}
.insta-img, .room-img, .hero-wrap, .img, .blog-img, .user-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
@media (min-width: 768px){
.order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
}
}
element.style {
}
.pricing-entry .desc {
    width: calc(100% - 100px);
}
@media (min-width: 768px){
.text-md-right {
    text-align: right !important;
}
}
.pr-3, .px-3 {
    padding-right: 1rem !important;
}
element.style {
}
.pricing-entry .text {
    width: 100%;
    display: block;
    position: relative;
    z-index: 0;
}
.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
@media (min-width: 768px){
.d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
}
}
.pricing-entry .text h3 {
    width: calc(100% - 80px);
    font-size: 24px;
    background: #fff;
}
@media (min-width: 768px){
.order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13;
}
}
h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
    line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-family: "Playfair Display", Arial, serif;
}
h3, .h3 {
    font-size: 1.75rem;
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
@media (min-width: 768px){
.pricing-entry .text h3.heading-left span {
    padding-right: 0;
    padding-left: 20px;
}
}
.pricing-entry .text h3 span {
    padding-right: 20px;
    background: #fff;
}
@media (min-width: 768px){
.pricing-entry .text .price.price-left {
    text-align: left;
}
}
.pricing-entry .text .price {
    width: 80px;
    color: #b69100;
    text-align: right;
    font-size: 20px;
    background: #fff;
}
.d-block {
    display: block !important;
}
.pricing-entry .desc p {
    margin-bottom: 0;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
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
element.style {
}
/* .ftco-animate {
    opacity: 0;
    visibility: hidden;
} */
.pricing-entry {
    width: 100%;
    display: block;
    margin-bottom: 30px;
    background: #f8f9fa;
    background: #fff;
    padding: 30px 20px;
    -webkit-box-shadow: 0px 15px 24px -21px rgb(0 0 0 / 21%);
    -moz-box-shadow: 0px 15px 24px -21px rgba(0, 0, 0, 0.21);
    box-shadow: 0px 15px 24px -21px rgb(0 0 0 / 21%);
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
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
/* .ftco-animate {
    opacity: 0;
    visibility: hidden;
} */
.pricing-entry {
    width: 100%;
    display: block;
    margin-bottom: 30px;
    background: #f8f9fa;
    background: #fff;
    padding: 30px 20px;
    -webkit-box-shadow: 0px 15px 24px -21px rgb(0 0 0 / 21%);
    -moz-box-shadow: 0px 15px 24px -21px rgba(0, 0, 0, 0.21);
    box-shadow: 0px 15px 24px -21px rgb(0 0 0 / 21%);
}
.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
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
element.style {
    background-image: url(images/menu-5.jpg);
}
.pricing-entry .img {
    width: 100px;
    height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
}
.insta-img, .room-img, .hero-wrap, .img, .blog-img, .user-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.pricing-entry .desc {
    width: calc(100% - 100px);
}
.pl-3, .px-3 {
    padding-left: 1rem !important;
}
.pricing-entry .text h3 {
    width: calc(100% - 80px);
    font-size: 24px;
    background: #fff;
}
h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
    line-height: 1.5;
    color: #000000;
    font-weight: 400;
    font-family: "Playfair Display", Arial, serif;
}
h3, .h3 {
    font-size: 1.75rem;
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
.pricing-entry .text h3 span {
    padding-right: 20px;
    background: #fff;
}
.pricing-entry .text .price {
    width: 80px;
    color: #b69100;
    text-align: right;
    font-size: 20px;
    background: #fff;
}
.d-block {
    display: block !important;
}
.pricing-entry .desc p {
    margin-bottom: 0;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
#resturant{
  height:1400px;
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
        <li id="a">
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
       <span style="color:white;font-size: 60px;
    font-family: 'icomoon' !important;speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;" class="t t1">The wave welcomes you here</span>
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
  <section id="two" class="wbp_animate_when_almost_visible">
    <div class="cont3"  > 
    
      
          <div class="card cd1" style="width: 20rem;background-color: rgb(215, 225, 228); margin: auto; border-radius: 10px;" loading="lazy">
            <img src="images/ro1.jpg" class="card-img-top" alt="...">
            <div class="card-body cb1">
              <h5 class="card-title text-center" style="font-style: italic;" >Appliances</h5>
              <p class="card-text text-center" style="font-size: 18px;font-style: italic;">A midsummer night’s dream - a classic right? You bet it is..the stay at the Resort, offers the king-size gorgeous pool!</p>
              <div class="btn2" style="text-align:center"><a href="booking.php" style="color:orange">Book Now</a></div>
              <div class="btn3" style="text-align:center"><a href="about.php" style="color:orange">Enquiry</a></div>
            </div>
          </div>

          <div class="card cd1" style="width: 20rem;background-color:rgb(215, 225, 228) ;margin: auto; border-radius: 10px;">
            <img src="images/ro2.jpg" class="card-img-top" alt="...">
            <div class="card-body cb1" >
              <h5 class="card-title text-center" style="font-style: italic;">Window view</h5>
              <p class="card-text text-center" style="font-size: 18px;font-style: italic;">Misty Mount is truly a home away from home. A charming lobby welcomes you and instantly you feel at home! </p>
              <div class="btn2 container-fluid" style="text-align:center"><a href="booking.php" style="color:orange">Book Now</a></div>
              <div class="btn3" style="text-align:center"><a href="about.php" style="color:orange">Enquiry</a></div>
            </div>
          </div>

          <div class="card cd1" style="width: 20rem;background-color: rgb(215, 225, 228); margin: auto; border-radius: 10px;">
            <img src="images/ro3.jpg" class="card-img-top" alt="...">
            <div class="card-body cb1">
              <h5 class="card-title text-center" style="font-style: italic;">Rooms</h5>
              <p class="card-text text-center" style="font-size: 18px;font-style: italic;">The dining experience at Misty Mount is gourmet's delight! Indulge in different cuisines-remember your home!</p>
              <div class="btn2 container-fluid" style="text-align:center"><a href="booking.php" style="color:orange">Book Now</a></div>
              <div class="btn3" style="text-align:center"><a href="about.php" style="color:orange">Enquiry</a></div>
              
            </div>
          </div>
        
      
    </div>
  </section>
  
  <section id="third">
    <div class="cont4">
      <div class="head4">Rich in heritage. Best in comfort</div>
      <p class="pfour">With the everlasting beauty that stood for many years comes<br> a fine<br>
        resort to serve its name</p>
      <div class="divfour text-center">I WANT TO PLAN MY HOLIDAY HERE
        <hr class="hr text-center" width="500px" style="margin: auto;margin-top: 30px;">
      </div>
    </div>
  </section>
  <section id="five">
    <div class="cont5">
      <div id="ccont1" class="ccont"><div class="imggg"><img src="images/ico4-hover.png" alt=""><br>EASY RESERVATION</div><br><p>The online reservation is quite simple and straightforward. You decide when you want to come to Misty Mount and book accordingly. Simple!</p></div>


      <div id="ccont2" class="ccont"><div class="imggg"><img src="images/ico1-hover.png" alt=""><br>BEST FOOD MENU</div><br>
      <p>We serve Continental, Chinese and Indian cuisines. Not to mention many regional flavors and tastes. A feast for your taste buds!</p></div>


      <div id="ccont3" class="ccont"><div class="imggg"><img src="images/ico2-hover.png" alt=""><br>ENJOY SILENCE IN PRIVACY</div><br><p>The quietude of the place coupled with our discreet room service would leave you to yourself in toto. You can be as private as possible!</p></div>
      </div>


      <div class="cont6">
      <div id="ccont4" class="ccont"><div class="imggg"><img src="images/ico3-hover.png" alt=""><br>IN THE BEST LOCALE</div><br>
      <p>The quintessential locales of the Misty Mount is unbelievable. You can disappear into the woods in a no time, yet come back quickly.</p></div>


      <div id="ccont5" class="ccont"><div class="imggg"><img src="images/ico6-hover.png" alt=""><br>JUST YOU & NATURE</div><br><p>We know your preparation before arriving at Misty Mount.  We take care and ensure nobody comes in between you and Nature!</p></div>


      <div id="ccont6" class="ccont"><div class="imggg"><img src="images/ico5-hover.png" alt=""><br>STAFF AT YOUR DISPOSAL</div><br><p>In Misty Mount, our staff will appear mysteriously when you want them. The next moment you won’t find them! That is our room service!</p></div>
    </div>
  </section>
  
  <section id="six">
    <div class="cont7">
      <div class="cont8">
        <div class="cont10">
          <h6 id="h6">beauty of the wave</h6>
          <p id="p6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestiae velit qui quis ad laborum perspiciatis alias accusamus eius, porro nesciunt tempore illo consequatur eaque voluptas </p>
          <div class="cont11"  >
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="images/bb1.jpg" alt="" width="70px" height="50px"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="images/bb2.jpg" alt="" width="70px" height="50px"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="images/bb3.jpg" alt="" width="70px" height="50px"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img src="images/bb4.jpg" alt="" width="70px" height="50px"></button>
          </div>
          
        </div>
      </div>
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
              <img src="images/bb1.jpg" class="d-block" alt="..." width="650px">
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
    </div>
  </section>
  <section  id="resturant" class="ftco-section ftco-menu" style="background-color:white;">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated" style="margin-bottom:50px;margin-top:-50px">
<span class="subheading">Restaurant</span>
<h2 >Restaurant</h2>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated" >
<div class="img order-md-last" style="background-image: url(images/biryani.jpg);"></div>
<div class="desc pr-3 text-md-right" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3 class="order-md-last heading-left"><span>Biryani</span></h3>
<span class="price price-left">$20.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img order-md-last" style="background-image: url(images/paneer.jpg);"></div>
<div class="desc pr-3 text-md-right" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3 class="order-md-last heading-left"><span>Paneer Sizzler</span></h3>
<span class="price price-left">$29.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img order-md-last" style="background-image: url(images/grilled.jpg);"></div>
<div class="desc pr-3 text-md-right" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3 class="order-md-last heading-left"><span>Grilled potatoes</span></h3>
<span class="price price-left">$20.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img order-md-last" style="background-image: url(images/noodles.jpg);"></div>
<div class="desc pr-3 text-md-right" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3 class="order-md-last heading-left"><span>Spicy Noodles</span></h3>
<span class="price price-left">$20.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img" style="background-image: url(images/cold_bevrages.jpg);"></div>
<div class="desc pl-3" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3><span>Cold Bevreges</span></h3>
<span class="price">$49.91</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img" style="background-image: url(images/ultimate_over.jpg);"></div>
<div class="desc pl-3" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3><span>Ultimate Overload</span></h3>
<span class="price">$20.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img" style="background-image: url(images/sprouts.jpg);"></div>
<div class="desc pl-3" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3><span>Sprouts Salad</span></h3>
<span class="price">$20.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
<div class="pricing-entry d-flex ftco-animate fadeInUp ftco-animated">
<div class="img" style="background-image: url(images/pineapple.jpg);"></div>
<div class="desc pl-3" style="margin-top:110px">
<div class="d-md-flex text align-items-center">
<h3><span>Ham &amp; Pineapple</span></h3>
<span class="price">$20.00</span>
</div>
<div class="d-block">
<p>A small river named Duden flows by their place and supplies</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

  <section id="seven" >
    <p class="one7 text-center">OUR PRICING</p>
    <p class="two7 text-center">Glance at our great resort</p>
    <div class="cont13" >
      <div class="card card-one" style="width: 20rem;background-color: rgb(215, 225, 228); margin: auto;" style="margin-bottom: 10px;">
        <img src="images/r1.jpg" class="card-img-top" alt="...">
        <div class="card-body card-one-body" >
          <h5 class="card-title text-center ">CLASSIC</h5><br>
          <p class="card-text text-center ppp ps">2 beds in room</p>
          <p class="card-text text-center ppp ps">4 people in room</p>
          <p class="card-text text-center ppp ps ">1200 sqf</p>
          <p class="card-text text-center ppp ps">split ac</p>
          <p class="card-text text-center ps">Starts From<b>$60.00/Night</b></p><br>
         <div class="cont14 text-center"><a href="booking.php" class="cont14_a">Book now</a></div>
         
        </div>
      </div>

      
      <div class="card card-one" style="width: 20rem;background-color: rgb(215, 225, 228); margin: auto;margin-bottom: 10px;">
        <img src="images/r2.jpg" class="card-img-top" alt="...">
        <div class="card-body card-one-body">
          <h5 class="card-title text-center">MODERN</h5><br>
          <p class="card-text text-center ppp ps">2 beds in room</p>
          <p class="card-text text-center ppp ps">4 people in room</p>
          <p class="card-text text-center ppp ps ">1200 sqf</p>
          <p class="card-text text-center ppp ps">split ac</p>
          <p class="card-text text-center ps">Starts From<b>$60.00/Night</b></p><br>
         <div class="cont14 text-center"><a href="booking.php" class="cont14_a">Book now</a></div>
         
          
        </div>
      </div>


      <div class="card card-one" style="width: 20rem;background-color: rgb(215, 225, 228); margin: auto;margin-bottom: 10px; ">
        <img src="images/r3.jpg" class="card-img-top" alt="...">
        <div class="card-body card-one-body">
          <h5 class="card-title text-center">RETRO</h5><br>
          <p class="card-text text-center ppp ps">2 beds in room</p>
          <p class="card-text text-center ppp ps">4 people in room</p>
          <p class="card-text text-center ppp ps ">1200 sqf</p>
          <p class="card-text text-center ppp ps">split ac</p>
          <p class="card-text text-center ps">Starts From<b>$60.00/Night</b></p><br>
         <div class="cont14 text-center"><a href="booking.php" class="cont14_a">Book now</a></div>
         
         
        </div>
      </div>
    </div>
  </section >
  
  <section class="ftco-section" id="blog">
<div class="container101">
<div class="row11
 justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
<span class="subheading">Read Blog</span>
<h2>Recent Blog</h2>
</div>
</div>
<div class="row11 d-flex">
<div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
<div class="blog-entry align-self-stretch">
<a href="blog-single.html" class="block-20" style="background-image: url('images/download.jpg');">
</a>
<div class="text mt-3 text-center">
<div class="meta mb-2">
<!-- <div><a href="#">July 03, 2019</a></div>
<div><a href="#">Admin</a></div> -->
<div><a href="#" class="meta-chat"><span class="icon-chat"></span> </a></div>
</div>
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
<!-- <p><a href="#" class="btn-custom">Read more</a></p> -->
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
<div class="blog-entry align-self-stretch">
<a href="blog-single.html" class="block-20" style="background-image: url('images/download (1).jpg'); ">
</a>
<div class="text mt-3 text-center">
<div class="meta mb-2">
<!-- <div><a href="#">July 03, 2019</a></div>
<div><a href="#">Admin</a></div> -->
<div><a href="#" class="meta-chat"><span class="icon-chat"></span> </a></div>
</div>
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
<!-- <p><a href="#" class="btn-custom">Read more</a></p> -->
</div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
<div class="blog-entry align-self-stretch">
<a href="blog-single.html" class="block-20" style="background-image: url('images/download (2).jpg');">
</a>
<div class="text mt-3 text-center">
<div class="meta mb-2">
<!-- <div><a href="#">July 03, 2019</a></div>
<div><a href="#">Admin</a></div> -->
<div><a href="#" class="meta-chat"><span class="icon-chat"></span> </a></div>
</div>
<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
<!-- <p><a href="#" class="btn-custom">Read more</a></p> -->
</div>
</div>
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