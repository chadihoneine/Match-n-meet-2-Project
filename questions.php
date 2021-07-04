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
                <li  class="active"><a href="questions.php">Questions</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="profileproc.php">Profile page</a></li>
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


            <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">Questions</h1>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5">


					<section class="sample-text-area">
    <div class="container">
      <h3 class="text-heading">Questions</h3>
      <p class="sample-text">
        <form action="questionproc.php" id="form-questions1" method="post">
          <font color="blue">
                    <h3>YES or NO questions:</h3>
                    </font>

                    <table>
                        <br>
                        <tr>
                            <td>
                                <ul><li>Do you like sports?</li></ul>
                            </td>
                          <td>
                               <input type="radio"  name="sports"  value="Yes"/> Yes
                                  <span class="checkmark"></span>
                                <input type = "radio"  name = "sports"  value = "No"/> No
                               <span class="checkmark"></span>
                            </td>
                            </tr>
                        <tr>
                            <td>
                                <ul><li>Are you a social person?</li></ul>
                            </td>
                            <td>
                                <input type = "radio"  name = "social"  value = "Yes" /> Yes
                            <span class="checkmark"></span>
                                <input type = "radio"  name = "social"  value = "No" /> No
                            <span class="checkmark"></span>
                            </td>
                        </tr>
                        <tr>
                          <td>
                             <ul><li>Do you like gaming?</li></ul>
                          </td>
                          <td >
                               <input type = "radio"  name = "gaming"  value = "Yes" /> Yes
                                                   <span class="checkmark"></span>
                               <input type = "radio"  name = "gaming"  value = "No" /> No
                                    <span class="checkmark"></span>
                          </td>
                             </tr>
                            <tr>
                              <td>
                                 <ul><li>  Are you afraid of height?  </li></ul>
                              </td>
                              <td>
                                <input type = "radio"  name = "height"  value = "Yes" /> Yes
                                        <span class="checkmark"></span>
                                <input type = "radio"  name = "height"  value = "No" /> No
                                         <span class="checkmark"></span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                 <ul><li>
                                  Have you ever clicked "i agree" on the terms and conditions, without reading it?
                                </li></ul>
                              </td>
                              <td>
                                <input type = "radio"  name = "terms"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "terms"  value = "No" /> No
                                       <span class="checkmark"></span>
                              </td>
                            </tr>
                          <tr>
                            <td>   <ul><li>
                                Do you sit on your computer a lot?
                               </li></ul>
                               <td>
                                <input type = "radio"  name = "computer"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "computer"  value = "No" /> No
                                       <span class="checkmark"></span>
                                     </td>
                          </tr>
                        <tr>
                          <td>      <ul><li>
                                 Do you travel a lot?
                               </li></ul>
                               <td>
                                <input type = "radio"  name = "travel"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "travel"  value = "No" /> No
                                       <span class="checkmark"></span>
                                     </td>
                        </tr>
                          <tr>
                            <td>    <ul><li>
                                 Do you like to sing?
                               </li></ul>
                               <td>
                                <input type = "radio"  name = "sing"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "sing"  value = "No" /> No
                                       <span class="checkmark"></span>
                                     </td>
                          </tr>
                          <tr>
                            <td>      <ul><li>
                                   Do you like arabic music?
                                 </li></ul>
                                 <td>
                                <input type = "radio"  name = "arabic"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "arabic"  value = "No" /> No
                                       <span class="checkmark"></span>
                                     </td>
                          </tr>
                          <tr>
                          <td>      <ul><li>
                                 Do you have a sense of rhythm?
                               </li></ul>
                               <td>
                                <input type = "radio"  name = "rhythm"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "rhythm"  value = "No" /> No
                                       <span class="checkmark"></span>
                                     </td>
                        </tr>
                            <tr>
                              <td>  <ul><li>
                                 Do you like to fight for a good cause?
                               </li></ul>
                               <td>
                                <input type = "radio"  name = "cause"  value = "Yes" /> Yes
                                       <span class="checkmark"></span>
                                <input type = "radio"  name = "cause"  value = "No" /> No
                                       <span class="checkmark"></span>
                                     </td>
                            </tr>



                      </table>


                    <input type="submit" value="Submit" class="button button1">
                     <input type="reset" value="Reset" class="button button1">
                     </form>
                     <form action="deletequestionsproc1.php"  id="delete-questions" method="post">
                     <input type="submit" value="Reset all my questions" class="button button1">
                   </form>
                     <p></p>
                     <p></p>

                    <img src="images/eventimage.jpg" alt="Image" class="img-fluid rounded">

                    <form action="questionproc2.php"  id="form-questions2" method="post">
                      <font color="blue">
                                          <h3>This or That questions:</h3>
                                          </font>
                                          <table>
                                              <br>
                                              <tr>
                                                <td>  <ul><li>
                                                   Are you a male or a female?
                                                 </li></ul>
                                                 <td>  <input type = "radio"  name = "gender"  value = "Male" /> male</td>
                                                   <td><input type = "radio"  name = "gender"  value = "Female" /> Female</td>
                                              </tr>
                                            <tr>
                                              <td>  <ul><li>
                                                 Harry Potter or The Lord of the Rings?
                                               </li></ul>
                                               <td>  <input type = "radio"  name = "harry"  value = "harry" /> Harry Potter</td>
                                                 <td><input type = "radio"  name = "harry"  value = "lord" /> The Lord of the Rings</td>
                                            </tr>
                                       <tr>
                                         <td> <ul><li>
                                           Go outside or stay indoor?
                                         </li></ul>
                                         <td><input type = "radio"  name = "outsideorindoor"  value = "outside" />Outside</td>
                                         <td><input type = "radio"  name = "outsideorindoor"  value = "indoor" /> Indoor</td>
                                       </tr>
                                        <tr>
                                          <td> <ul><li>
                                            Watch TV or read a book?
                                          </li></ul>
                                          <td> <input type = "radio"  name = "tv"  value = "tv" /> TV</td>
                                          <td>  <input type = "radio"  name = "tv"  value = "book" /> Book</td>
                                        </tr>
                                        <tr>
                                          <td> <ul><li>
                                            Use IOS, or Android phone?
                                          </li></ul>
                                          <td> <input type = "radio"  name = "iphone"  value = "iphone" /> IOS</td>
                                       <td><input type = "radio"  name = "iphone"  value = "android" /> Android</td>
                                        </tr>
                                          <tr>
                                            <td>    <ul><li>
                                               Dog or Cat?
                                                   </li></ul>
                                                   <td><input type = "radio"  name = "dog"  value = "dog" /> Dog</td>
                                                     <td><input type = "radio"  name = "dog"  value = "cat" /> Cat</td>
                                          </tr>
                                          <tr>
                                              <td> <ul><li>
                                             Netflix or YouTube?
                                            </li></ul>
                                          </td>
                                            <td> <input type = "radio"  name = "netflix"  value = "netflix" /> Netflix</td>
                                           <td><input type = "radio"  name = "netflix"  value = "Youtube" /> Youtube</td>
                                          </tr>
                                          <tr>
                                 <td>      <ul><li>
                                       Phone Call or Text?
                                      </li></ul>
                                 </td>
                                 <td><input type = "radio"  name = "phone"  value = "phone" /> Phone call</td>
                                 <td><input type = "radio"  name = "phone"  value = "text" /> Text</td>
                               </tr>
                               <tr>
                                          <td> <ul><li>
                                           Dine In or Delivery?
                                          </li></ul>
                                          <td> <input type = "radio"  name = "dine"  value = "dine" /> Dine in</td>
                                           <td>  <input type = "radio"  name = "dine"  value = "delivery" /> Delivery</td>
                                        </tr>

                                 <tr>
                                   <td>        <ul><li>
                                           Hot chocolate or coffee?
                                          </li></ul>
                                          <td>  <input type = "radio"  name = "chocolate"  value = "chocolate" /> Hot chocolate</td>
                                         <td>  <input type = "radio"  name = "chocolate"  value = "coffee" /> Coffee</td>
                                 </tr>
                                 <tr>
                                   <td>  <ul><li>
                                     Day or night?
                                    </li></ul>
                                    <td>   <input type = "radio"  name = "day"  value = "day" /> Day</td>
                                     <td>  <input type = "radio"  name = "day"  value = "night" /> Night</td>
                                 </tr>
                                       <tr>
                                         <td>    <ul><li>
                                             Fruits or vegetables?
                                            </li></ul>
                                            <td><input type = "radio"  name = "fruits"  value = "fruits" /> Fruits</td>
                                           <td> <input type = "radio"  name = "fruits"  value = "vegetables" /> Vegetables</td>
                                       </tr>
                                     <tr>
                                       <td>    <ul><li>
                                           Money or fame?
                                          </li></ul>
                                          <td><input type = "radio"  name = "mooney"  value = "money" /> Money</td>
                                          <td><input type = "radio"  name = "mooney"  value = "fame" /> Fame</td>
                                     </tr>
                                     <tr>
                                       <td>    <ul><li>
                                           Mountains or beach?
                                          </li></ul>
                                          <td><input type = "radio"  name = "mountains"  value = "mountains" /> Mountains</td>
                                          <td><input type = "radio"  name = "mountains"  value = "beach" /> Beach</td>
                                     </tr>
                                     <tr>
                                       <td>    <ul><li>
                                           Being too warm or too cold?
                                          </li></ul>
                                          <td>   <input type = "radio"  name = "warm"  value = "warm" /> Warm</td>
                                         <td><input type = "radio"  name = "warm"  value = "cold" /> Cold</td>
                                     </tr>
                                     <tr>
                                       <td>        <ul><li>
                                               Basketball or Football?
                                              </li></ul>
                                              <td> <input type = "radio"  name = "basketball"  value = "basketball" /> Basketball</td>
                                               <td><input type = "radio"  name = "basketball"  value = "football" /> Football</td>
                                     </tr>
                                       <tr>
                                         <td>  <ul><li>
                                           Spring or Fall?
                                          </li></ul>
                                          <td> <input type = "radio"  name = "spring"  value = "spring" /> Spring</td>
                                           <td><input type = "radio"  name = "spring"  value = "fall" /> Fall</td>
                                       </tr>
                               </table>
                           <input type="submit" value="Submit" class="button button2">
                                <input type="reset" value="Reset" class="button button2">

                           </form>
                           <form action="deletequestionsproc2.php"  id="delete-questions2" method="post">
                           <input type="submit" value="Reset all my questions" class="button button2">
                         </form>
                           <p></p>
                           <p></p>
                           <img src="images/eventimage.jpg" alt="Image" class="img-fluid rounded">

                           <form action="questionproc3.php" id="form-questions3" method="post">
                             <font color="blue">
                               <h3>Agree/Disagree questions:</h3>
                             </font>
                             <table>
                               <br>
                               <tr>
                <td><ul><li>
                I make friends easily:</li></ul>
               <td>  <input type = "radio"  name = "friend"  value = "Strongly disagree" />Strongly Disagree</td>
                 <td><input type = "radio"  name = "friend"  value = "Disagree" />Disagree</td>
                 <td>  <input type = "radio"  name = "friend"  value = "Agree" />Agree</td>
                   <td><input type = "radio"  name = "friend"  value = "Strongly agree" />Strongly agree</td>
            </tr>
          <tr>
              <td><ul><li>
              I have a vivid imagination:</li></ul>
             <td>  <input type = "radio"  name = "imagination"  value = "Strongly disagree" />Strongly Disagree</td>
               <td><input type = "radio"  name = "imagination"  value = "Disagree" />Disagree</td>
               <td>  <input type = "radio"  name = "imagination"  value = "Agree" />Agree</td>
                 <td><input type = "radio"  name = "imagination"  value = "Strongly agree" />Strongly agree</td>
          </tr>

          <tr>
            <td>  <ul><li>
              I love large parties:
             </li></ul>
             <td>  <input type = "radio"  name = "parties"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "parties"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "parties"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "parties"  value = "Strongly agree" /> Strongly agree</td>
          </tr>

          <tr>
            <td>  <ul><li>
               I prefer variety to routine:
             </li></ul>
             <td>  <input type = "radio"  name = "routine"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "routine"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "routine"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "routine"  value = "Strongly agree" /> Strongly agree</td>
          </tr>
          <tr>
            <td>  <ul><li>
               I like to solve complex problems:
             </li></ul>
             <td>  <input type = "radio"  name = "problems"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "problems"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "problems"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "problems"  value = "Strongly agree" /> Strongly agree</td>
          </tr>
          <tr>
            <td>  <ul><li>
               I often eat too much:
             </li></ul>
             <td>  <input type = "radio"  name = "eat"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "eat"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "eat"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "eat"  value = "Strongly agree" /> Strongly agree</td>
          </tr>

          <tr>
            <td>  <ul><li>
               I dislike being the center of attention:
             </li></ul>
             <td>  <input type = "radio"  name = "attention"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "attention"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "attention"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "attention"  value = "Strongly agree" /> Strongly agree</td>
          </tr>
          <tr>
            <td>  <ul><li>
              I like order:
             </li></ul>
             <td>  <input type = "radio"  name = "oorder"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "oorder"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "oorder"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "oorder"  value = "Strongly agree" /> Strongly agree</td>
          </tr>


          <tr>
            <td>  <ul><li>
               I like music:
             </li></ul>
             <td>  <input type = "radio"  name = "music"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "music"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "music"  value = "Agree" /> Agree</td>
               <td><input type = "radio"  name = "music"  value = "Strongly agree" /> Strongly agree</td>

             </tr>
          <tr>
            <td>  <ul><li>
               I feel others' emotions:
             </li></ul>
             <td>  <input type = "radio"  name = "feel"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "feel"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "feel"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "feel"  value = "Strongly agree" /> Strongly agree</td>
          </tr>
          <tr>
            <td>  <ul><li>
               I like to visit new places:
             </li></ul>
             <td>  <input type = "radio"  name = "places"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "places"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "places"  value = "Agree" /> Agree</td>
               <td><input type = "radio"  name = "places"  value = "Strongly agree" /> Strongly agree</td>

             </tr>
          <tr>
            <td>  <ul><li>
               I love to read challenging material:
             </li></ul>
             <td>  <input type = "radio"  name = "challenging"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "challenging"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "challenging"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "challenging"  value = "Strongly agree" /> Strongly agree</td>
          </tr>

            <td>  <ul><li>
               I enjoy being part of a group:
             </li></ul>
             <td>  <input type = "radio"  name = "ggroup"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "ggroup"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "ggroup"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "ggroup"  value = "Strongly agree" /> Strongly agree</td>
          </tr>
          <tr>
            <td>  <ul><li>
               I value cooperation over competition:
             </li></ul>
             <td>  <input type = "radio"  name = "cooperation"  value = "Strongly disagree" /> Strongly Disagree</td>
               <td><input type = "radio"  name = "cooperation"  value = "Disagree" /> Disagree</td>
               <td>  <input type = "radio"  name = "cooperation"  value = "Agree" /> Agree</td>
                 <td><input type = "radio"  name = "cooperation"  value = "Strongly agree" /> Strongly agree</td>
          </tr>
          </table>
       <input type="submit" value="Submit" class="button button3">
            <input type="reset" value="Reset" class="button button3">

          </form>
          <form action="deletequestionsproc3.php"  id="delete-questions3" method="post">
          <input type="submit" value="Reset all my questions" class="button button3">
         </form>


      </p>
    </div>
  </section>
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
