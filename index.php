<?php include "layouts/header.php";?>
<body>
<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/c4.png" alt="Covid-Post-Help">
        <div class="carousel-caption">
          <h3 style="color: yellow;font-size:200%;">Welcome to our Covid-Help</h3>
          <p style="font-weight: bold;font-size:100%;">Free to use for Everyone!</p>
        </div>
      </div>
  
      <div class="item">
        <img src="images/C1.png" alt="Form">
        <div class="carousel-caption">
          <h3 style="color: yellow;font-size:200%;">Request Form</h3>
          <p style="font-weight: bold;font-size:100%;">For any Oxygen-cylinder related need,fill our request form</p>
        </div>
      </div>
  
      <div class="item">
        <img src="images/c3.png" alt="Report">
        <div class="carousel-caption">
          <h3 style="color: yellow;font-size:250%;">State's report</h3>
          <p  style="font-weight: bold;font-size:100%;">Live Covid details of each state</p>
        </div>
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<section class="jumbotron text-center">
  <div class="container">
      <img src="images/logo2.png" alt="logo" width="120">
      <h1 class="jumbotron-heading"><span id="typed"></span></h1>
      <p style="font-weight: bold;font-size:300%;color:purple">Steps for Using our site</p>
      <p style="font-size:200%;">Sign-up if you are new user</p>
      <a href="signup.php" class="btn btn-primary my-2">Sign-Up</a>
      <p style="font-size:200%;">Login with your email and password</p>
      <a href="login.php" class="btn btn-success my-2">Login</a>
      <p style="font-size:200%;">Then You can access our Site</p>
      </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>
<script>
  window.onload = function () {
      console.log("loaded")
      var typed = new Typed('#typed', {
          strings: ["Welcome to Covid-Help Site", "Free to use for everyone"],
          backSpeed: 15,
          smartBackspace: true,
          backDelay: 1200,
          startDelay: 1000,
          typeSpeed: 25,
          loop: true,
      });
  };
</script>
<?php include "layouts/footer.php";?>