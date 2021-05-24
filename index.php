<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Title-->
  <title>CoForce-Home</title>
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="stylevh.css">
</head>

<body>
  <!--Main/First Section-->
  <a id="button"></a>

  <div id="main">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#resources">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">USSD</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <h1 class="line-1" style="font-size: 6.5rem; margin-left: 65px; text-align: left; margin-top: 60px;">
      <span>C</span><span><img src="images/coro.gif" width="80" height="80"></img></span><span>Force</span>

    </h1>
    <h2 class="line-1 anim-typewriter" style="margin-top: -50px;">Real Avengers At Service</h2>
    <img src="images/head.png" style="margin-top: -31.5%; width:100%">
  </div>
  <div id="about">
    <div class="container" >
      <h1 class="text-center aboutHeading">About Us</h1>
      <p class="aboutPG text-center">CoForce is an army of Frontline Service Providers, working 24x7 to Deliver Essential Services at your Doorsteps so that you stay Safe at your places. 
        CoForce Provides all essential resources like <b> Food</b>,<b> Medicines</b>,<b> Oxygen Supplies</b>,<b> Ambulance Service</b>,<b> ICU BEDS</b>, and all <i>other essential resources</i>.
        Internet & Smartphone is never a Barrier with us , Our services can be availed even if you don't have internet service or smartphone by using our <b>COVID USSD Helpdesk</b> <b>*384*9910#</b></p>
    </div>
  </div>
  <!--Projects Section - Add your websites to the cards - You can add more as a Bootstrap Deck-->
  <div id="services">
    <div class="container">
      <h1 class="text-center aboutHeading">Services</h1>
      <div class="vedum">
        <div class="wimg">
          <img src="images/10188.jpg">
        </div>
        <div class="wabout">
          <h2>Need Any Help?</h2>
          <p>If You Need any Help or Resources please login here</p>
          <a href="login-user.php"><button >Get Now</button></a>
        </div>
      </div>
      <div class="vedum">
        
        <div class="wabout">
          <h2>Service Provider</h2>
          <p>If You want to provied any service or resources to help needy people, please login here</p>
          <a href="Service/login-user.php"><button >Add Resouces</button></a>
        </div>
        <div class="wimgr">
          <img src="images/20943705.jpg">
        </div>
      </div>
      <div class="vedum">
        <div class="wimg">
          <img src="images/3692894.jpg">
        </div>
        <div class="wabout">
          <h2>Join Our Army</h2>
          <p>If Want To Join our Army as a Delivery Boy, Login here</p>
          <a href="worker/login-user.php"><button >Join Now</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--Resources Section-->
  <div id="resources">
    <div class="Container" style="height: auto;"> 
      <h1 class="text-center aboutHeading">What Are you Looking For?</h1>
      <div class="vedu">
        <div class="block">
          <a href="icu.php">
           <div class="lblock">
            <div class="img">
                <img src="img/hospital.49030ac4.svg">
            </div>
            <div class="bodm">
                <h2>ICU Beds</h2>
              <p>Click here to find beds in your location</p>
              </div>
         </div>
         </a>
         <a href="ob.php">
         <div class="rblock">
              <div class="img">
                <img src="img/bed.c74e1810.svg">
            </div>
            <div class="bodm">
                <h2>Oxygen Beds</h2>
              <p>Click here to find beds in your location</p>
              </div>
         </div>
         </a>
       </div>
       <div class="block">
          <a href="os.php">
           <div class="lblock">
            <div class="img">
                <img src="img/oxygen.13072382.svg">
            </div>
            <div class="bodm">
                <h2>Oxygen Supplies</h2>
              <p>Find Cylinders, Refillers in Your Locatity</p>
              </div>
         </div>
         </a>
         <a href="m.php">
         <div class="rblock">
              <div class="img">
                <img src="img/medicine.fafe8915.svg">
            </div>
            <div class="bodm">
                <h2>Medicines</h2>
              <p>Find Medicines in Your Area</p>
              </div>
         </div>
         </a>
       </div>
       <div class="block">
          <a href="">
           <div class="lblock">
            <div class="img">
                <img src="img/tiffin.777305db.svg">
            </div>
            <div class="bodm">
                <h2>Tiffin Services</h2>
              <p>Get Food Delivered At Your Doorsteps</p>
              </div>
         </div>
         </a>
         <a href="c.php">
         <div class="rblock">
              <div class="img">
                <img src="img/testing.83f40232.svg">
            </div>
            <div class="bodm">
                <h2>Covid Testing</h2>
              <p>Find RT-PCR Tests in Your Locality</p>
              </div>
         </div>
         </a>
       </div>
       <div class="block">
          <a href="b.php">
           <div class="lblock">
            <div class="img">
                <img src="img/blood.8551f066.svg">
            </div>
            <div class="bodm">
                <h2>Blood</h2>
              <p>Find Donors For Blood Therapy</p>
              </div>
         </div>
         </a>
         <a href="post.php">
         <div class="rblock">
              <div class="img">
                <img src="img/home-care.d282e48f.svg">
            </div>
            <div class="bodm">
                <h2>Post Other Requirements</h2>
              <p>Click here to Post Other Requirements</p>
              </div>
         </div>
         </a>
       </div>
      </div>
      
    </div>
    
  </div>
  
  <!--Contact Section - I used php to get this working with my server-->
  <div id="contact">
    <div class="container">
      <h1 class="text-center aboutHeading">USSD Help-Desk</h1>
      <div class="vedum">
        <div class="wimg">
          <div style="text-align: left"> <img src="images/ussd-help.png" style="width: 150%; height: 500px; margin-top: -25% ; margin-left: -70%;"></div>
        </div>
        <div class="wabout">
          <h2>Dial <b>*384*9910#</b></h2>
          <p>If you Don't Have Smartphone or Internet, You still can Find Services using our USSD code</p>
          <a href="https://b66d0dd7ba59.ngrok.io"><button >USSD Dashboard</button></a>
        </div>
      </div>
    </div>
  </div>

  <!--Very Basic footer section - Adding Social Media links here would be ideal-->
  <footer class="footer">
    <div class="container text-center">
      <span class="footer-text">CoForce | e-Yantra COVID19 Hackathon 2021</span>
    </div>
  </footer>

  <!--Bootstrap JS-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./script.js"></script>
</body>

</html>