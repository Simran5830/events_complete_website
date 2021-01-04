<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event's </title>
</head>
<body>
<a href="index.html">
<button style="color:darkblue;">HOME</button></a>

<a href="contact.php">
<button style="color:darkblue;">CONTACT US</button></a>
<a href="about.php">
<button style="color:darkblue;">ABOUT US</button></a>


</br>
<h1 <b style="text-align:center;color:white;">URBAN EVENTS </b></h1>
</br>


<?php

$x=$_POST['t1'];
$y=$_POST['t2'];
$z=$_POST['t3'];
$a=$_POST['t4'];

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'event');

$e="delete from admin where customer='$x' and EventName='$z'";
mysqli_query($con,$e);

$q="delete from customer where Name='$x' and EventName='$z'";

mysqli_query($con,$q);
mysqli_close($con);

?>


<h1 <b style="text-align:center;color:white;">Your Event booking is Cancelled.</b></h1>
</br>

<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>