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
<a href="cust.php">
<button align=right; style="color:darkblue; float:right;">login</button></a>

</br>
<h1 <b style="text-align:center;color:white;">URBAN EVENTS </b></h1>
</br>

<form  action="register.php" method="post">
<center>
<h3 style="color:white"> Name</h3>
<input type="text" name="t1" required/>
<br>
<h3 style="color:white">E-mail</h3> 
<input type="text" name="t2" required/>
<h3 style="color:white">Gender</h3>
<select name="t3">
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select> 
<br>
<h3 style="color:white">Mobile Number</h3>
<input type="number" name="t4" required/>
<br>
<h3 style="color:white">Set Password</h3>
<input type="password" name="t5" required/>
<br>
<br>
<input type="submit" value="Register" name=b1/>
 <center>
</form>


<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>