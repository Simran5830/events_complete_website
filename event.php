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
.frst{
position:absolute;
z-index:10;
}

.second{

}

a>button{
  cursor:pointer;
}
#menu{
  list-style: none;
  margin-top: 70px;
  /* margin-right:500px; */
}
.footer{
  display: flex;
  /* flex-direction: column; */
  color: white;
  align-items: center;  
  justify-content: center;
}

 img{
       /* width: 100%; */
       
       height:450px; 
    }


</style>
</head>
<body>

 <div class="frst">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; width: 100%;">
    <a class="navbar-brand" href="">Urban Events</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html" style="float: right;">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="book.html">BookEvent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modify.php">ModifyEvent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cancel.php">CancelEvent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cust.php" style="float: right;">logout</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<br><br><br>

<div class="second">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"> 
    <img style="height:750px;" class="d-block w-100" src="djcar.jpg" alt="Second slide">
      <!-- <div class="carousel-caption d-none d-md-block">
       <h1>DJ NIGHT</h1>
       <p>Rock the party with us</p>
    </div> -->
    </div>

  <div class="carousel-item ">
      <img style="height:750px;" class="d-block w-100" src="frst.jpg" alt="First slide">
    </div>
   
    <div class="carousel-item">
      <img style="height:750px;" class="d-block w-100" src="car.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:750px;" class="d-block w-100" src="confcar.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<br>
<br><br>
<div>
<h1 style="color:white; text-align:center; text-decoration:underline; font-family:'Lobster, cursive'; font-weight: bold";><i>WHAT WE DO<br></i></h1>
<br><h3 style="color:white; text-align:center; font-family:'Lobster'";> Services Provided By Us</h3>
</br>
</div>
<h1>
</h1>
<br>
<!-- <a href="book.php">
<button > Book Event <br>
<img  src="book.jpg" border="4px" height="70"/></button></a> &nbsp&nbsp&nbsp


<a href="modify.php"> 
<button > Modify Event <br>
<img style="display:block" src="modify.jpg" border="4px" height="70"/></button></a>&nbsp&nbsp&nbsp&nbsp



<a  href="cancel.php"> 
<button > Cancel Event<br>
<img style="display:block" src="cancel.jpg" border="4px" height="70"/></button></a>
 -->

<!-- <br><br><br><br> -->

 <a style="color:black;" href="wed.html">
<br>
<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="photo-1515715709530-858f7bfa1b10.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Happily ever after begins here</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  </a>
  <a style="color:black;" href="conf.html">
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <h4>World Of Opportunities</h4><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, ad.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          <cite title="Urban Events">Urban Events</cite>
        </small>
      </footer>
           
    </blockquote>
    <div class="card">
    <img class="card-img" src="conf.jpg" alt="Card image">
  </div>
    </div>
    </a>
    <a style="color:black;" href="dj.html">
  <div class="card">
    <img class="card-img-top" src="djcar.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Adding joy through music</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  </a>
  <div class="card text-white bg-info mb-3 text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Events don't just happen, They happen to be our duty.</p>
      <footer class="blockquote-footer">
        <small>
         <cite title="Source Title">Urban Events</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <a style="color:black;" href="portfolio.html">
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Our Portfolio</h5>
      <p class="card-text">Try Us ,You won't regret.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  </a>
  <div class="card">
    <img class="card-img" src="wedagain.jpg" alt="Card image">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>At our best and at your service.<br>Fabulously planned… Remembered always.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          <cite title="Source Title">Urban Events</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <a style="color:black;" href="bday.html">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Your Birthday Our Responsibility.</h5>
      <p class="card-text">An exceptional experience every time..</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <div class="card">
    <img class="card-img" src="photo-1583875762487-5f8f7c718d14.jpg" alt="Card image">
  </div>
  </div>
</a>
</div>





<br><br><br>
<br>
<div class=footer style="background-color: #000;" >
<center>
<ul id="menu" >
  <h3>Connect us</h3><br>
  <li ><a href="http://www.facebook.com"><img style="height: 70px; width: 70px;" src="iconfinder_social_media_applications_1-facebook_4102573.png"> </a></li><br>
  <li><a href="http://www.twitter.com"><img style="height: 70px; width: 70px;" src="iconfinder_social_media_applications_6-twitter_4102580.png"></a></li><br>
  <li><a href="http://www.instagram.com"><img style="height: 70px; width: 70px;" src="iconfinder_social-instagram-new-square2_1164347.png" alt=""></a></li><br>
  <li><a href="http://www.gmail.com"><img style="height: 70px; width: 70px;" src="iconfinder_gmail_1220367.png" alt=""></a></li>
</ul>
<div style="background-color: #000; text-align: center;">
  <!-- <h1 style="text-align:left ;";> Urban Events</h1> -->
  <!-- <h2 style="color:white;"> These are some more work by us:-</h2>
<a style="color:white;" href="https://www.youtube.com/watch?v=B_2NQ9c9gFo" > https://www.youtube.com/watch?v=B_2NQ9c9gFo</a>
<br>
<br>
<a style="color:white;" href="https://www.youtube.com/watch?v=PIyORsLqkJc" >https://www.youtube.com/watch?v=PIyORsLqkJc</a>
<br>
<br>
<a style="color:white;" href="https://www.youtube.com/watch?v=53ZRPsnd6p8" >https://www.youtube.com/watch?v=53ZRPsnd6p8</a>
<br>
<br>
<a style="color:white;" href="https://www.youtube.com/watch?v=Lkm-qtRiFyc" >https://www.youtube.com/watch?v=Lkm-qtRiFyc</a> -->
<br>
<br>
<br><br>
<br>
<hr>
<h3 > © Copyright. All Rights Reserved</h3>
</div>
</div>
</div>
</center>
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
   AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
      });
      </script> -->
</body>
</html>

