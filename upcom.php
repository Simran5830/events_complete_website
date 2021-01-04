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

<center>
<table style="color:white" height=100% width=85% border="10px">
<tr>
<th>Event Name</th>
<th>Date and Time</th>
<th>Location</th>
<th>Customer Name</th>
</tr>


<?php
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'event');


$q="select * from admin";

$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);

for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>

<tr>
<td><?php echo $row['EventName']; ?></td>
<td><?php echo $row['Date_time']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['customer']; ?></td>


</tr> 
<?php } ?>

</center>







<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
</body>
</html>