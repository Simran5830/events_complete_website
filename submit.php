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
$b=$_POST['t5'];
$c=$_POST['t6'];
$e=$_POST['t7'];

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'event');

$h="insert into customer(Name,email,Number,EventName) values('$x','$y','$e','$z')";

mysqli_query($con,$h);


$e="update customer set EventName='$z' where email='$y'";
mysqli_query($con,$e);

$q="insert into admin(EventName,Date_time,location,no_of_tickets,customer) values('$z','$b','$a',$c,'$x')";

mysqli_query($con,$q);
/*$d="update admin,even set admin.payment=no_of_tickets*even.price where even.price=(Select price from even where EventName='$z')";
mysqli_query($con,$d);*/
mysqli_close($con);
?>
<h1 align="middle" style="color:white"> Thank You! Your record is submitted.</h1>



<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>