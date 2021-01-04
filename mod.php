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
<a href="reg.php">
<button align=right; style="color:darkblue; float:right;">register</button></a>
<a href="login.php">
<button align=right; style="color:darkblue; float:right;">login</button></a>

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
$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'event');

$e="update customer set EventName='$z' where email='$y'";
mysqli_query($con,$e);

$q="update admin set EventName='$z' where email='$y'";

mysqli_query($con,$q);
$d="update admin set EventName='$z' where customer='$x'";
mysqli_query($con,$d);
$f="update admin set Date_time='$b' where customer='$x'";
mysqli_query($con,$f);
$g="update admin set location='$a' where customer='$x'";
mysqli_query($con,$g);
$h="update admin set no_of_tickets='$c' where customer='$x'";
mysqli_query($con,$h);
$i="update admin,even set admin.payment=no_of_tickets*even.price where even.price=(Select price from even where EventName='$z')";
mysqli_query($con,$i);

mysqli_close($con);
?>
<h1 style="color:white">Your data is modified.</h1>



<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>