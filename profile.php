
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Match-N-Meet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet"  href="css/main.css" >
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

  <!-- <div class="site-wrap"> -->

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  `  <header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2 site-logo">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Match-N-Meet</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.html">Home</a></li>
                <li class="has-children">
                  <ul class="dropdown">
                    <li><a href="#section-how-it-works" class="nav-link">How It Works</a></li>
                    <li><a href="#section-our-team" class="nav-link">Our Team</a></li>
                  </ul>
                </li>
								<li><a href="about.html">About us</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="statistics.php">Statistics</a></li>
                <li><a href="questions.php">Questions</a></li>
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="profileproc.php">Profile page</a></li>
                <li><a href="Admin.html">Admin page</a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>

    </header>
`

    <div class="site-blocks-cover overlay" style="background-image: url(images/aboutusimage.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


            <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">Profile</h1>

          </div>
        </div>
      </div>
    </div>

<h1>To load your information enter username and password</h1>
<form action="profiledb.php" method="post">
<input type="text" name="username" id="Username" placeholder="Username" required/>
<p><br></p>
<input  name="password" id="password" type="password" placeholder="Password" required/>
<input type="submit" id="submit" name="submit" value="Submit" >
</form>




    <div class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5">


					<section class="sample-text-area">
    <div class="container">

      <style>
      html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
      </style>
      <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="" id="avatar" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>

         <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
         <p><label for="file" style="cursor: pointer;">Upload Image</label></p>

         <script>
         var loadFile = function(event) {
         	var image = document.getElementById('avatar');
         	image.src = URL.createObjectURL(event.target.files[0]);
         };
         </script>


         <hr>

         <div contenteditable="true">
           This information can be edited.
<form action="profiletext1.php" method="post">
  <input type="text" placeholder="Insert job or major" id="job">
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <input type="text" placeholder="Insert place of residence" id="residence">
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <input type="text" placeholder="Insert birthday" id="birthday">
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
         <input type="submit" value="Submit">
         </div>
        </div>
      </div>
      <br>
</form>
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>
      </div>
      <br>

      <!-- Interests -->
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>

      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Middle Column -->
    <div class="w3-col m7">

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Social Media template by w3.css</h6>
              <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>
            </div>
          </div>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>



        <hr class="w3-clear">
        <p>First name: <?php print $userfname ?></p>
        <p>Last name: <?php print $userlname ?></p>
        <p>Username: <?php print $username ?></p>
        <p>Email: <?php print $useremail ?></p>
        <p>Password: <?php print $pass ?></p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">

            </div>
            <div class="w3-half">

          </div>
        </div>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

        <h4>My description</h4><br>
        <div contenteditable="true">
          This information can be edited.
        <p>Description</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>
    </div>



    <!-- End Middle Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>

    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>






        </p>
      </div>
    </section>

    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: black;
  text-align: center;
}
</style>

<footer>
<div class="footer">
<div class="row align-items-center justify-content-center text-center">

  <li><a href="contactus.html">Contact us | </a></li>
<li><a href="termsandconditions.html">Terms and conditions | </a></li>
<li><a href="privacypolicy.html">Privacy Policy | </a></li></a>
<li><a href="FAQ.html">FAQ</a></li></a><b>
</div>
</div>
</footer>
</div>

  <!-- </div> -->
  <script>
  // Accordion
  function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.previousElementSibling.className += " w3-theme-d1";
    } else {
      x.className = x.className.replace("w3-show", "");
      x.previousElementSibling.className =
      x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
  }

  // Used to toggle the menu on smaller screens when clicking on the menu button
  function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
