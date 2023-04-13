<!doctype html>
<?php
echo '<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- CSS FILES -->
<link rel="stylesheet" href="assets/css/style.css">
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">
    <div>
      <nav class="navbar">
        <h2 class ="button">Check This Out!</h2>
        <div href="#" class="btn">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a> </li>
            <li><a class="nav-link scrollto" href="#about">About</a> </li>
            <li><a class="nav-link scrollto" href="#topic">Select Tweet Topic</a></li>
            <li><a class="nav-link scrollto" href="#analytics">Cyberbullying Analytics</a></li>
            <li><a class="nav-link scrollto" href="#who">Meet the Developers</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- ===== Hero Section ===== -->
<div id="hero" class="hero route videoInsert">
  <section class="videoInsert">
    <video src="assets/images/pexels-mikhail-nilov-6963744.mp4" muted loop autoplay></video>
  </section>
  <div class="overlay-itro"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <h1 class="hero-title mb-4">Stop Cyberbullying PHP is working</h1>
      </div>
    </div>
  </div>
</div>
<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="box-shadow-full">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="title-box-2">
                  <h5 class="title-center"> About "Stop Cyberbullying" </h5>
                </div>
                <div class="about-img"> <img src="assets/images/cyberbully_keyboard.png" class="img-fluid rounded b-shadow-a" alt=""> </div>
              </div>
              <div class="skill-mf">
                <p class="title-s">Cyberbullying by the Numbers</p>
                <span>Individuals between age 13 and 17 who experienced cyberbullying:</span> <span class="pull-right">46%</span> [1]
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 46%;" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>The percentage of young generations who are concerned about cyberbullying:</span> <span class="pull-right">71%</span> [1]
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 67%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>The increase in the amount of bullying/hate speech among teens and children a month since COVID-19 lockdowns began:</span> <span class="pull-right">70%</span> [1]
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Of children currently experiencing a mental health problem, the percentage who experienced cyberbullying in the last year:</span> <span class="pull-right">68%</span> [1]
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <p class="lead"> Given the above facts about cyberbullying, the aim of this project is to inform the public about cyberbullying trends and provide insights on cyberbullying topics (abusive comments, inciting violence/physical harm, or comments on physical appearances, etc). </p>
                <p class="lead"> This information could supplement the data and other insights found on sites such as stopbullying.gov and youth.gov. Not only does this information educate public social media users, it can also be leveraged to inform the administrators and developers for social media companies which topics on their platform, specifically Twitter, should be monitored more closely for these reportable offenses. </p>
                <p class="lead"> This site takes Tweets and using Sentiment Analysis and Natural Language Processing classifies them as cyberbullying or not. First, visit the "Select Tweet Topic" section to pick a topic the Tweets center around. Then, look at the "Cyberbullying Analytics" section to see the cyberbullying analysis for the selected topic. Finally, if you have any questions or concerns, visit the "Meet the Developers" and "Contact" sections. </p>
                <p class="lead"> [1] All statistics are sourced from <a href=https://enough.org/stats_cyberbullying>Enough Is Enough</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Section --> 
<!-- ====== Topic Selection Section ====== -->
<section id="topic" class="services-mf pt-5 route">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="title-box text-center">
        <h3 class="title-a"> TODO: Implement Topic Selection </h3>
        <p class="subtitle-a"> Will consist of a Search Bar and Drop Down List of subjects for Tweets. </p>
        <div class="line-mf"></div><br><br>
		 <div class="topic-dropdown">
			 <button onclick="dropdown()" class="dropbtn">Select Topic</button>
		<div id="topic-drop-search" class="topic-dropdown-content">
			<input type="search" id="topic-search" placeholder="Search for a Topic..." onkeyup="searchMatch()"/>
<!--
			<form action="db-connect.php">
				<input type="submit" class="button">
-->			
			<button name="politics">Politics</button>
			<button>Sports</button>
			<button>Oscars</button>
		</div>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- ======= Analytics Section ======= -->
<section id="analytics" class="services-mf pt-5 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a"> TODO: Implement Analytics </h3>
          <p class="subtitle-a"> Will consist of both Graphs and Counting Metrics. </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>
    <!-- start graphs section> -->
    <div class="row">
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-ico"> <span class="ico-circle"><i class="bi bi-briefcase"></i></span> </div>
          <div class="service-content">
            <h2 class="s-title">Web Design</h2>
            <p class="s-description text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
              provident vitae! Magni
              tempora perferendis eum non provident. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-ico"> <span class="ico-circle"><i class="bi bi-card-checklist"></i></span> </div>
          <div class="service-content">
            <h2 class="s-title">Web Development</h2>
            <p class="s-description text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
              provident vitae! Magni
              tempora perferendis eum non provident. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-ico"> <span class="ico-circle"><i class="bi bi-bar-chart"></i></span> </div>
          <div class="service-content">
            <h2 class="s-title">Photography</h2>
            <p class="s-description text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
              provident vitae! Magni
              tempora perferendis eum non provident. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-ico"> <span class="ico-circle"><i class="bi bi-binoculars"></i></span> </div>
          <div class="service-content">
            <h2 class="s-title">Responsive Design</h2>
            <p class="s-description text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
              provident vitae! Magni
              tempora perferendis eum non provident. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-ico"> <span class="ico-circle"><i class="bi bi-brightness-high"></i></span> </div>
          <div class="service-content">
            <h2 class="s-title">Graphic Design</h2>
            <p class="s-description text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
              provident vitae! Magni
              tempora perferendis eum non provident. </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box">
          <div class="service-ico"> <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span> </div>
          <div class="service-content">
            <h2 class="s-title">Marketing Services</h2>
            <p class="s-description text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
              provident vitae! Magni
              tempora perferendis eum non provident. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end graphs section--> 
<!-- start counter section-->
<div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container position-relative">
    <div class="row">
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box counter-box pt-4 pt-md-0">
          <div class="counter-ico"> <span class="ico-circle"><i class="bi bi-check"></i></span> </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">WORKS COMPLETED</span> </div>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box pt-4 pt-md-0">
          <div class="counter-ico"> <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span> </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">YEARS OF EXPERIENCE</span> </div>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box pt-4 pt-md-0">
          <div class="counter-ico"> <span class="ico-circle"><i class="bi bi-people"></i></span> </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">TOTAL CLIENTS</span> </div>
        </div>
      </div>
      <div class="col-sm-3 col-lg-3">
        <div class="counter-box pt-4 pt-md-0">
          <div class="counter-ico"> <span class="ico-circle"><i class="bi bi-award"></i></span> </div>
          <div class="counter-num">
            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
            <span class="counter-text">AWARD WON</span> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Counter Section --> 
<!-- ======= Meet the Developers ======= -->
<section id="who" class="services-mf pt-5 route">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="title-box text-center">
        <h3 class="title-a"> TODO: Meet the Developers </h3>
        <p class="subtitle-a"> Will consist of pictures and descriptions of us! </p>
        <div class="line-mf"></div>
      </div>
    </div>
  </div>
  <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="author-test"> <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a"> <span class="author">Xavi Alonso</span> </div>
                  <div class="content-test">
                    <p class="description lead"> Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. </p>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
              
              <div class="swiper-slide">
                <div class="testimonial-box">
                  <div class="author-test"> <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a"> <span class="author">Marta Socrate</span> </div>
                  <div class="content-test">
                    <p class="description lead"> Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. </p>
                  </div>
                </div>
              </div>
              <!-- End testimonial item --> 
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
        </div> --> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Meet the Developers Section --> 
<!-- ======= Contact Section ======= -->
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-mf">
          <div id="contact" class="box-shadow-full">
            <div class="row">
              <div class="title-box-2">
                <h5 class="title-center"> Send Us a Message! </h5>
              </div>
              <div class="more-info">
                <p class="lead"> Whether you want to report a bug, ask a question, or share some other information with us, please reach out via email. </p>
              </div>
              <div>
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <div class="socials">
                <ul>
                  <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                  <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                  <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                  <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->
</main>
<!-- End #main --> 
<!-- ======= Footer ======= -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="copyright-box">
          <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
          <div class="credits"> CSS Used from Devfolio via BootstrapMade but Website Designed by UTSA Large Scale Data Management Students </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End  Footer --> 
<script src="assets/js/java.js"></script>
<script src="db-connect.php"></script>
</body>
</html>';

//DB connection
$servername = $MYSQL_URL;
$username = $MYSQLUSER;
$password = $MYSQLPASSWORD;
$dbname = $MYSQLDATABASE;
//$servername = "database-cyber.chsvbmziubkt.us-east-2.rds.amazonaws.com";
//$username = "admin";
//$password = "cyberdata";
//$dbname = "CyberDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo"<h1>FAILED</h1>";
}
else{
	echo "<h1>CONNECTED</h1>";
}
//
//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//  // output data of each row
//  while($row = $result->fetch_assoc()) {
//    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//  }
//} else {
//  echo "0 results";
//}
$conn->close();
?>