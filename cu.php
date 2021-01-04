<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event's </title>
<style>
body
{
background-image:url('black.jpg');background-repeat:no-repeat;background-size:cover;
}
</style>
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
<table style="color:white" height=425px width=95% border="10px">
<tr>
<th>Name</th>
<th>E-mail</th>
<th>Number</th>
<th>EventName</th>
</tr>


<?php
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'event');


$q="select * from customer";

$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);

for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($res);
?>

<tr>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['Number']; ?></td>
<td><?php echo $row['EventName']; ?></td>
</tr> 
<?php } ?>

</center>






</body>
</html>

