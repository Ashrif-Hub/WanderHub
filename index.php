<?php
session_start();
error_reporting(0);
include('guest_login/connect.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
     <style>
              .testimonials {
            padding: 50px 0;
            background-color: #f9f9f9;
        }
        
        .testimonial-cards {
            display: flex;
            gap: 20px;
        }
        
        .testimonial-card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .testimonial-author {
            font-weight: bold;
        }
        
        .cta {
            text-align: center;
            padding: 80px 0;
            background-color: #e9f7ea;
        }
        
        .cta h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .section-title {
            text-align: center;
            margin: 0 auto;
        }
        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 40px 0;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
        }
        
        .footer-section {
            flex: 1;
            margin-right: 30px;
        }
        
        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 10px;
        }
        
        .footer-section ul li a {
            color: #ddd;
            text-decoration: none;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            margin-top: 30px;
        }

     </style>



</head>
<body>
    





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>W</span>ander<span>H</span>ub</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="packages.php">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>  
              <li class="nav-item">
               <a class="nav-link" href="#enquiry">Enquiry</a>
             </li>
           
             
            </ul>
            <div class="nav-right">
              <a class="nav-link" href="guest_login\index.php">Guest</a>
              
              
            </div>
            <div class="nav-right">
              <a class="nav-link" href="admin/admin_login.php">Admin</a>
            </div>
          </div>   
           
        </div>
      </nav>
    <!-- Navbar End -->





    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Discover Amazing Destinations – Book Your Next Adventure Today! </p>
            <a href="packages.php">View Package</a>
        </div>
    </div>
    <!-- Home Section End -->



    <!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Affordable Hotel</h3>
                <p>Stay in budget-friendly hotels with excellent amenities, perfect for smart travelers seeking comfort and savings.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <p>Enjoy delicious local cuisine and refreshing drinks with top-rated restaurants and authentic street food experiences.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Safty Guide</h3>
                <p>Travel with confidence using expert safety tips, travel insurance advice, and destination-specific safety updates.</p>
              </div>
            </div>

          </div>


        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Around The World</h3>
                <p>Discover amazing travel destinations across the globe with our curated worldwide tour packages.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Fastest Travel</h3>
                <p>Experience smooth and quick travel options, including express flights and high-speed transport services.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <p>Embark on thrilling adventures from mountain trekking to jungle safaris—perfect for adrenaline seekers.</p>
              </div>
            </div>

          </div>



        </div>

      </div>
    </section>
    <!-- Section Services End -->




    <!-- Section Gallary Start -->
  <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allary</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g2.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
  </section>
    <!-- Section Gallary End -->







    <!-- About Start -->
     <section class="about" id="about">
  <div class="container">

    <div class="main-txt">
      <h1>About <span>Us</span></h1>
    </div>

    <div class="row" style="margin-top: 50px;">

      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="./images/about-img.png" alt="">
        </div>
      </div>

      <div class="col-md-6 py-3 py-md-0">
        <h2>How Travel Agency Work</h2>
        <p>
          At Travel, we believe that travel is not just about visiting new places it's about creating unforgettable experiences...
        </p>

        <!-- Hidden content -->
        <div id="more-text" style="display: none;">
          <p>
            Our mission is to make travel stress-free and tailored to individual needs. Whether you're a solo traveler, a couple on a honeymoon, or a family planning a holiday, we have the expertise to craft a package that suits your expectations and budget. Our global partnerships and local insights enable us to offer unique travel deals and authentic experiences.
          </p>
          <p>
            We are committed to sustainability and responsible tourism, ensuring that your travels benefit the communities you visit. Let us take care of the details while you focus on making memories that last a lifetime.
          </p>
        </div>

        <!-- Button to toggle -->
        <button id="about-btn" onclick="toggleAbout()" style="background-color: orange; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Read More...</button>
      </div>

    </div>

  </div>
</section>

<script>
  function toggleAbout() {
    var moreText = document.getElementById("more-text");
    var btn = document.getElementById("about-btn");

    if (moreText.style.display === "none") {
      moreText.style.display = "block";
      btn.innerText = "Read Less...";
    } else {
      moreText.style.display = "none";
      btn.innerText = "Read More...";
    }
  }
</script>


    <!-- About End -->

    <!-- Costermer Review start -->

  <section class="testimonials">
            <h2 class="section-title"><span>W</span>hat <span>O</span>ur <span>C</span>ustomers <span>S</span>ay</h2>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p class="testimonial-content">"Booking our honeymoon was so easy! The site is user-friendly and the customer service was excellent. We had the trip of a lifetime!"</p>
                    <p class="testimonial-author">- — Amit & Priya</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-content">"Highly recommend! Everything from planning to booking was smooth. Great packages and real-time support made our vacation stress-free."</p>
                    <p class="testimonial-author">- Jane Smith</p>
                </div>
            </div>
  </section>

  <!-- coustomer review end -->


   <!-- enquiry start -->
<section class="enquiry-section" id="enquiry">
  <h2 class="section-title"><span>E</span>nquiry </h2>
  <form class="enquiry-form" action="submit_enquiry.php" method="POST">
    <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Your Name" required>
    </div>
    <div class="form-group">
      <input type="tel" class="form-control" name="contact" placeholder="Contact Number" required>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Email Address" required>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" rows="4" placeholder="Your Enquiry Details" required></textarea>
    </div>
    <button type="submit" class="btn-submit">Submit</button>
  </form>
</section>

  <!-- enquiry end -->

  
 
        
  <section class="cta">
            <h2>Ready to Get Started?</h2>
            <p>Join thousands of satisfied customers and take your business to the next level.</p>
            <a href="guest_login\index.php" class="btn">Sign Up Now</a>
  </section>

  


    <!-- Footer Start -->

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>We are a trusted travel management platform dedicated to simplifying bookings, managing tours, and delivering unforgettable travel experiences with reliability, convenience, and personalized service.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallary">Gallary</a></li>
                        <li><a href="#container">Contact</a></li>
                        
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Email: wanderhubofficial.com</li>
                        <li>Phone: +94 754545854</li>
                        <li>Address: 175,Perera road,colombo 3</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 WanderHub official. All rights reserved.</p>
            </div>
        </div>
    </footer>





    <!-- Footer End -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include('guest_login/footer.php');?>
<!-- signup -->
<?php include('guest_login/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('guest_login/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('guest_login/write-us.php');?>			
<!-- //write us -->


</body>
</html>