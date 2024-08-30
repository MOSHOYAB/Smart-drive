<?php
// Start the session
session_start();

// You can add any backend logic here if needed

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Smart Drive</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
         
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto"> <!-- Use mr-auto to push items to the left -->
                <li class="nav-item ">
                  <a class="nav-link" href="customer.php">Home <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item ">
                  <a class="nav-link" href="about2.php"> About</a>
                </li>
               
               
                <li class="nav-item active">
                  <a class="nav-link" href="contact2.php">Contact Us</a>
                </li>
               
              </ul>
      
              <a class="navbar-brand" href="index.html">
                <img src="images/smrt.jpg" alt="">
              </a>
              
              <form class="form-inline">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
      
              <div class="quote_btn-container">
                <a href="#" class="quote_btn" onclick="confirmLogout()" style="color: black; background-color: lime;">
          Logout
      </a>
                </div><script>
      function confirmLogout() {
          if (confirm("Are you sure you want to logout?")) {
              window.location.href = "/website/login2.3.php";
          }
      }
  </script>
          
              </div>
            </nav>
          </div>
        </div>
        
      </header>



    <section class="contact-content" id="contact" style="padding: 50px 0;">
        <div class="container" style="max-width: 800px; margin: auto; padding: 0 15px;">
            <div class="contact-title" style="text-align: center; margin-bottom: 30px;">
                <h4>Contact Me</h4>
                <p>Get In Touch</p>
            </div>
            <div class="contact" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <form action="https://formspree.io/f/xgegwjne" method="POST">
                    <input type="text" name="NAME" placeholder="Name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    <br>
                    <input type="email" name="EMAIL" placeholder="Email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    <br>
                    <input type="text" name="SUBJECT" placeholder="Subject" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    <br>
                    <textarea name="MESSAGE" placeholder="Message" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"></textarea>
                    <br>
                    <center>  <input type="submit" value="Submit" style="background-color: #000000; color: #fff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 4px;
      transition: background-color 0.3s;" 
      onmouseover="this.style.backgroundColor='#28a745'" 
      onmouseout="this.style.backgroundColor='#000000'">
                </center>    </form>
                <span id="msg" style="display: block; margin-top: 10px;"></span>
            </div>
        </div>
    </section>
    <section class="map-section" style="margin-top: 30px; text-align: center;">
      <div class="container" style="max-width: 1000px; margin: auto; padding: 0 30px;">
          <h2>Location: Kota, Rajasthan, India</h2>
          <!-- Replace YOUR_API_KEY with your actual Google Maps API key -->
          <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.0891939302853!2d75.82775441499746!3d26.24072798340055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396b98a3dd57ca5b%3A0x5f3b51a00d139515!2sKota%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1621572579618!5m2!1sen!2sin" 
              width="100%" height="450" style="border: 0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
      </div>
  </section>
  
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"></script>

  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="customer.html">Home <span class="sr-only">(current)</span></a>
             
                <a class="" href="about2.html"> About</a>
               
                <a class="" href="contact2.html">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-md-2">
            <div class="info_logo">
              <a href="">
                <img src="images/smrt.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>