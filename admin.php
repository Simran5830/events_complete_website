
<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
$x=$_POST['t1'];
$y=$_POST['t2'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'event');
$q="select password from users where email='$x'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);

if($x=="admin")
{
if($y==$row['password'])
{
 header("location:inside.php");
}
else
{
}
}
}
?>
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

<form action="" method="post">
<center>
<h3 style="color:white"> Name</h3>
<input type="text" name="t1" required/>
<br>
<h3 style="color:white"> Password</h3>
<input type="password" name="t2" required/>
<br>
<br>

<input type="submit" value="login" name=b1/>


 </center>

 
</form>

<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>