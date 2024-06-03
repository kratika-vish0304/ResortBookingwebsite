<?php
$login = false;
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
   
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
   
    $sql = "Select * from login where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if ($password== $row['password']){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: admin_table.php");
            } 
            else{
                $showError = "Enter correct password";  
                
            }
        }
        
    } 
    else{
        $showError = "enteer correct password";
                header("location: booking.php");
    }
}
    
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>booking</title>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    
   
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
      height: 620px;
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
     
      height: 100%;
      padding: 100px;
      padding-top: 10px;
     
    }
    .items{
      display: flex;
      flex-direction: row-reverse;
      
      font-size: 16px;
      font-style: italic;
    
      height: 100px;
      
     
 
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
        margin-top:100px;
    }
    .formdiv{
    width:50%;
    margin:auto;
    margin-top:30px;
    color:teal;
    }
    .formbtn{
        margin-top:20px;
        background-color:orange;
        border:1px solid white;
    }
    .forminput{
       
    }
   
  }
  </style>
</head>

<body>
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
   <h1 class="text-center" style="color:white;display:inline;font-size:42px;font-style:italic; font-weight:bold;">Admin Login</h1>
     <form action="" method="post">
        <div class="form-group formdiv">
            
            <input type="text" class="form-control forminput" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
            
        </div>
        <div class="form-group formdiv">
           
            <input type="password" class="form-control forminput" id="password" name="password" placeholder="Password">
        </div>
       
         
        <button type="submit" class="btn btn-primary formbtn">Login</button>
        
     </form>
   </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    </body>
    
    </html>
