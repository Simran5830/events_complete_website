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
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=="POST")
{

$x=$_POST['t1'];
$y=$_POST['t2'];
$z=$_POST['t3'];
$a=$_POST['t4'];
$b=$_POST['t5'];
 $hash = password_hash($b, PASSWORD_DEFAULT);
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'event');

$d="select email from users where email='$y'";
$res=mysqli_query($con,$d);
$row=mysqli_fetch_array($res);

if($y==$row['email'])
{
  echo "already registered";
  header("Location: reg.php");
  echo "already registered";

}
else
{

$q = "INSERT INTO `users` ( `email`, `password`, `dt`) VALUES ('$y', '$hash', current_timestamp())";
//$q="insert into users(email,password) values('$y','$b')";
mysqli_query($con,$q);

mysqli_close($con);
}
}
?>
<h2 align=center style="color:white;" > <?php echo "Congratulations! We are connected now."; ?></h1>

<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>