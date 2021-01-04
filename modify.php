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
<h2 <b style="text-align:center;color:white;">Modify your event by filling all details of changed event.</b></h2>

<center>
<form action="mod.php" method="post">

<h3 style="color:white"> Your Name</h3>
<input type="text" name="t1" required/>
<br>
<h3 style="color:white"> E-mail</h3>
<input type="text" name="t2" required/>
<br>
<h3 style="color:white"> Event Name</h3>
<input type="text" name="t3" required/>
<br>
<h3 style="color:white"> location</h3>
<input type="text" name="t4" required/>
<br>

<h3 style="color:white"> Date and Time of Event(in yy-mm-dd hh:mm:ss)</h3>
<input type="text" name="t5" required/>
<br>
<h3 style="color:white"> Number Of Tickets</h3>
<input type="number" name="t6" required/>
<br>
<br>
<br>
<input type="submit" value="submit" name=b1/>

</form>
</center>



   


<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>