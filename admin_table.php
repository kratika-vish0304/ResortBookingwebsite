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

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN_TABLE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body{
        background-color:teal;
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
    </style>
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
<h2 class="text-center">Booking Table</h2>
<table class="table-info container-fluid table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">checkin_date</th>
      <th scope="col">checkin_date</th>
      <th scope="col">no_of_rooms</th>
      <th scope="col">room_type</th>
     
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "Select * from booking";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$no=1;
if ($num >0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        
    <tr>
      <th scope="row"><?php echo $no ?></th>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['phone']?></td>
      <td><?php echo $row['checkin']?></td>
      <td><?php echo $row['checkout']?></td>
      <td><?php echo $row['roomno']?></td>
      <td><?php echo $row['roomtype']?></td> <?php
    
      echo '<td><a style=" color:black;text-decoration:none;" href="delete.php?sno='.$row['sno'].'">Delete</a></td>';
      
    '</tr>';
    $no=$no+1; 
  
    }
} 
?>
   
    
  </tbody>
</table>


<h2 class="text-center"> Messages</h2>
<table class="table-info container-fluid table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">subject</th>
      <th scope="col">messages</th>
      
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql2 = "Select * from contact";
$result2 = mysqli_query($conn, $sql2);
$num2 = mysqli_num_rows($result2);
$no2=1;
if ($num2 >0){
    while($row2=mysqli_fetch_assoc($result2)){
        ?>
        
    <tr>
      <th scope="row"><?php echo $no2 ?></th>
      <td><?php echo $row2['name']?></td>
      <td><?php echo $row2['email']?></td>
      <td><?php echo $row2['subject']?></td>
      <td><?php echo $row2['msg']?></td>
     <?php
    
      echo '<td><a style=" color:black;text-decoration:none;" href="delete.php?sno='.$row2['sno'].'">Delete</a></td>';
      
    '</tr>';
    $no2=$no2+1; 
  
    }
} 
?>
   
    
  </tbody>
</table>
   </div>
</section> 
</body>
</html>