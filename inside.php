<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,shrink-to-fit=no">
    <title>Event's </title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="cssforall.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
a>button{
  cursor:pointer;
}
#menu{
  list-style: none;
  margin-top: 70px;
  margin-right:500px;;
}
.footer{
  display: flex;
  color: white;
  align-items: center;  
}
    img{
       width: 520px;
       height: 600px; 
    }

.bday , .conf , .wed , .dj {
  
  display: flexbox;
overflow:auto;
  position: relative;
background-color:tan;
color: white;
 }


</style>
</head>
<body>


 <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; width: 100%;">
    <a class="navbar-brand" href="">Urban Events</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<br>
<br><br>
<div>
<h1 style="color:white; text-align:center; font-family:'Lobster, cursive'; font-weight: bold";><i> URBAN EVENTS <br></i></h1>
</br>
</div>


<a align="left" href="all.php">
<button >Events Details <br>
<img style="width=50px; border=4px; height=30px;" src="book.jpg" /></button></a> &nbsp&nbsp

<!-- <div style="float:right;"> -->
<a style="align:right;" href="cu.php">
<button > Customers Details <br>
<img border="4px" height="10px" src="cust.jpg"/></button></a>&nbsp&nbsp

<!-- </div> -->
<!-- <br><br><br> -->
<a align="right" href="upcom.php">
<button > Upcoming Events <br>
<img src="book.jpg" border="4px" height="70"/></button></a>




<?php 

error_reporting(0);
if($_SERVER['REQUEST_METHOD']=="POST")
{
$x=$_POST['t1'];
$y=$_POST['t2'];


if($x=="admin" && $y=="admin")
 {
   header("Location: inside.php");  
 }
 else 
 {
  header("Location: admin.php?id=wrong admin");
  echo "Not an admin";
  }
}
?>



</br>
<br>
<br>
<button data-target="bday.html">
<section class="card" data-aos="fade-left">
<div class="bday" style="width: 1600px; height: 630px;" >
<br>
<img src="hap.jpg" style="float: right;" href="bday.html" />
<br></br><br><br>
<h1 style=" text-align: center; font-family: Patua One;" > BIRTHDAY</h2>
<p style="text-align:center; vertical-align: middle; "> We have a team of self motivated and expert professionals who help us to offer the best quality Birthday Event Management Service. This service is highly regarded by our prestigious clients for its desired results and execution within the assured time-frame. Our professionals, who are expert in management of such events, render this service with full dedication and sincerity as per the requirements of our clients. Choose from more than 100 themes for great parties for kids and baby showers, plus thousands  of party supplies like patinas, decorations, favors, personalized invites and banners, and more! Just Relax and enjoy, we will take over the responsibility of organising the birthday. We organise birthdays in the entire NCR region including Delhi, Gurgaon, Noida, Faridabad , Ghaziabad. Meet us to discuss what you would like the birthday to look like and forget. Leave the rest to us and we will ensure that you have fun and the birthday is exactly as what you had wanted it to be. </p>
</h1>
<br>
<br>
<h3 >One of our works:-</h3>
<a style="color:white; text-decoration: white; text-decoration-line: underline;" href="https://www.youtube.com/watch?v=pgTD-Lltnnc" >Birthday arrangements</a>
</div>
</section>
</button>

<br>

<br><br><br>
<br>
<button>
<section class="card" data-aos="fade-right">
<div class="conf" style="width: 1600px; height: 630px;">
<img src="conf.jpg"style=" float:left;" width=700 height=500/>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1 style="color:white; text-align:center; font-family: Patua One;" > CONFERENCES</h1>
<p style="color:white;text-align:center; vertical-align: middle;"> Conferences tend to be a much more complicated event with multiple speakers and sessions spread across a number of spaces within one or more venues. With the aim of encouraging conversations and offering people a platform where they can share their expertise, conferences usually begin with a keynote session before moving to interviews, roundtables and panel discussions. Preparing to welcome hundreds or even thousands of delegates can be daunting, but check-in and on-the-door sales are made simple with our Organiser App, so think about how technology can support your corporate event.</p>
<br><h3 style="color:white">One of our conference arrangements:-</h3>
<a style="color:white;" href="https://www.youtube.com/watch?v=EWh7boT-1oI" >Conference</a>
</div>
</section>
</button>
<br>

<br><br><br>
<br>
<button>
<section class="card" data-aos="fade-left">
<div class="wed" style="width: 1600px; height: 630px;">
<img src="wed.jpg" align="right" width=700 height=700/>
<br>
<br>
<br>
<br>
<br>

<h1 style=" color:white; text-align:center; font-family: Patua One;"> WEDDING</h1>
<p style="color:white" > Urban Event is the top event management companies in Mumbai. Having successfully directed famous wedding event for Anil Kapoor's daughter Sonam Kapoor with Anand Ahuja.

Our team of wedding planners believes that the most special event in a person’s life is their wedding. Accordingly, We provide complete event designing, right from selecting the venue, managing vendors, creating exquisite wedding decor, to crafting invitation creatives & e-invites, video production, entertainment, hospitality, grooming that makes your dream wedding, a reality!

We take pride in being one of the best wedding event management companies in India that design unforgettable and personalised events.

We also undertake an international destination wedding. Some of the overseas wedding performed were in Paris, Turkey, Barcelona, and Dubai.
Our impeccable lineage of Wizcraft, India’s premier personal and business event creation entity, gives us the exclusive advantage of possessing the dynamics required to make a top wedding event celebration truly memorable.

We have delivered fabulous wedding event experiences over the last two decades and are now poised to chart out a whole new growth story. Discerning individuals across the globe have trusted us with their wedding event planning and we have managed some of the most reputed weddings worldwide.</p> 

<h3 style="color:white">One of our works:-</h3>
<a style="color:white;" href="https://www.youtube.com/watch?v=ipw1fQad5sg" >Wedding </a>
</div>
</section>
</button>
<br>

<br><br><br>
<br>
<br>
<button>
<section class="card" data-aos="fade-right">
<div class="dj" style="width: 1600px; height: 605px;">
<img src="dj.jpg" style="float: left;" width=700 height=700/>
<br<<br><br><br><br<<br><br><br><br<<br><br><br>
<h1 style=" color:white; text-align: center;  font-family:Patua One;"> DJ NIGHT</h1>
<p style="color:white; text-align:center; vertical-align: middle;"> A great event organiser will always find an excuse to celebrate, and hosting a themed party can really help when it comes to making decisions around marketing, decorating and catering. From intimate gatherings to events with gigantic guest lists, a creative idea could be timeless – Alice in Wonderland, superheroes, a murder mystery – or align with a particular date or occasion, for example, Eurovision, Pride, Coachella. Let your each moment glitter with melodia...... We at Melodia make the event hot & spicy which adds to this unique blend of experience, expertise, efficiency and passion for a perfect party… and you have a sensational event you’ll remember and talk about for the rest of your lives..... The DJ plays an interactive part in keeping the event alive By having party props Interactive games/party games We Organise.... DJ wedding DJ party.</p>

<h3 style="color:white">One of our works:-</h3>
<a style="color:white;" href="https://www.youtube.com/watch?v=Qvs9lVaAl3w" >DJ Night arrangement</a>

</div>
</section>
</button>
<br>

<br><br><br>
<br>
<div class=footer style="background-color: #000;" >

<ul id="menu" >
  <li ><a href="http://www.facebook.com"><img style="height: 70px; width: 70px;" src="iconfinder_icon-02_2515845.png"> </a></li><br>
  <li><a href="http://www.twitter.com"><img style="height: 70px; width: 70px;" src="iconfinder_twitter__social__media_icons_2986205.png"></a></li><br>
  <li><a href="http://www.instagram.com"><img style="height: 70px; width: 70px;" src="iconfinder_icon-04_2515843.png" alt=""></a></li><br>
  <li><a href="http://www.gmail.com"><img style="height: 70px; width: 70px;" src="iconfinder_mail-24_103176.png" alt=""></a></li>
</ul>
<div style="background-color: #000; text-align: center;">
  <!-- <h1 style="text-align:left ;";> Urban Events</h1> -->
  <h2 style="color:white;"> These are some more work by us:-</h2>
<a style="color:white;" href="https://www.youtube.com/watch?v=B_2NQ9c9gFo" > https://www.youtube.com/watch?v=B_2NQ9c9gFo</a>
<br>
<br>
<a style="color:white;" href="https://www.youtube.com/watch?v=PIyORsLqkJc" >https://www.youtube.com/watch?v=PIyORsLqkJc</a>
<br>
<br>
<a style="color:white;" href="https://www.youtube.com/watch?v=53ZRPsnd6p8" >https://www.youtube.com/watch?v=53ZRPsnd6p8</a>
<br>
<br>
<a style="color:white;" href="https://www.youtube.com/watch?v=Lkm-qtRiFyc" >https://www.youtube.com/watch?v=Lkm-qtRiFyc</a>
<br>
<br>
<br><br>
<br>
<hr color="white">
<h3 > © Copyright. All Rights Reserved</h3>
</div>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
   AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
      });
      </script>
</body>
</html>
