<?php
session_start();
echo '<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- CSS FILES -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- JS FILES -->
<script src="assets/js/jquery-3.5.1.js"></script>
</head>
<body>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a> </li>
            <li><a class="nav-link scrollto" href="#about">About</a> </li>
            <li><a class="nav-link scrollto" href="#topic">Select Tweet Topic</a></li>
            <li><a class="nav-link scrollto" href="#analytics">Cyberbullying Analytics</a></li>
            <li><a class="nav-link scrollto" href="#who">Meet the Developers</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
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
        <h1 class="hero-title mb-4">Stop The Cyberbullying</h1>
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
                  <h5 class="title-center"> About "Stop The Cyberbullying" </h5>
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
                <p class="lead"> Given the above facts about cyberbullying, the aim of this project is to inform the public about cyberbullying trends and provide insights on cyberbullying topics (gender, age, race, etc). </p>
                <p class="lead"> This information could supplement the data and other insights found on sites such as stopbullying.gov and youth.gov. Not only does this information educate public social media users, it can also be leveraged to inform the administrators and developers for social media companies which topics on their platform, specifically Twitter and Instagram, should be monitored more closely for these reportable offenses. </p>
                <p class="lead"> This site utilizes Tweets and Instagram posts. Using Sentiment Analysis and Natural Language Processing, we classify them as cyberbullying or not. First, visit the "Topic Selection" section to pick a topic the social media posts center around. Then, look at the "Cyberbullying Analytics" section to see the cyberbullying analysis for the selected topic. Finally, if you have any questions or concerns, visit the "Meet the Developers" and "Contact" sections. </p>
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
        <h3 class="title-a">Topic Selection</h3>
        <p class="subtitle-a"> Click "Select Topic" to select a subject for anaylsis of cyberbullying in social media posts. </p>
        <div class="line-mf"></div><br><br>
		 <div class="topic-dropdown">
			 <button onclick="dropdown()" class="dropbtn button button-a button-big button-rouded">Select Topic</button>
		<div id="topic-drop-search" class="topic-dropdown-content">
			<form action="" method="post">
			<input type="search" id="topic-search" placeholder="Search for a Topic..." onkeyup="searchMatch()"/>
			
			<button class="button button-a button-rouded" name="topic" value="Politics">Politics</button>
			<button class="button button-a button-rouded" name="topic" value="Sexual Orientation">Sexual Orientation</button>
			<button class="button button-a button-rouded" name="topic" value="Race/Ethnicity">Race/Ethnicity</button>
			<button class="button button-a button-rouded" name="topic" value="Movies">Movies</button>
			<button class="button button-a button-rouded" name="topic" value="Celebrities">Celebrities</button>
			<button class="button button-a button-rouded" name="topic" value="Sports">Sports</button>
			</form>';
			
		echo '</div>
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
          <h3 class="title-a"> Analytics </h3>';
		  $perPage = 6;
		  if(isset($_POST['next-posts'])) {
			  $_SESSION['pageNum'] += 1;
		  }
		  else{
			  $_SESSION['pageNum'] = 1;
		  }
		  if(isset($_POST['topic'])) {
			  $topic = $_POST['topic'];
		  }
		  else if ($_SESSION['pageNum'] == 1){
		      $topic = '';
		  }
		  
		  $bottom_limit = ($perPage * ($_SESSION['pageNum'] - 1));
		  $top_limit = ($perPage * $_SESSION['pageNum']);
          echo '<p class="subtitle-a">Some ' .$topic. ' Tweets</p>';
		  echo '<form action="" method="post"> 
			  <button class="button button-a" name="next-posts" value="next">See Different Posts</button>
			  </form>';
          echo '<p class="subtitle-a"> Will consist of both Graphs and Counting Metrics. </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>
    <!-- start graphs section> -->
	<div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">';
			
			//DB connection
			$servername = $_ENV[ "MYSQLHOST" ];
			$port = $_ENV[ "MYSQLPORT" ];
			$username = $_ENV[ "MYSQLUSER" ];
			$password = $_ENV[ "MYSQLPASSWORD" ];
			$dbname = $_ENV[ "MYSQLDATABASE" ];

			// Create connection
			$conn = new mysqli( $servername, $username, $password, $dbname, $port );
			// Check connection
			if ( $conn->connect_error ) {
			  die( "Connection failed: " . $conn->connect_error );
			  echo "<p>FAILED: not connect to DB</p>";
			} else {
			  echo "";
			}
			
			echo '<table border="5" bordercolor="#000000" width="100%">
				<tr>
					<th>Username</th>
					<th>Text</th>
					<th>Time Posted</th>
					<th>Cyberbullying Category</th>
				</tr>';

			// Create new mysql connection
			$dblink = new mysqli( $servername, $username, $password, $dbname, $port); //make the connection to the db
			//echo "\"SELECT * from Tweets WHERE topic LIKE \"%". $topic ."%\" ORDER BY auto_id DESC LIMIT 10;\"";
			$top10sql = "SELECT * from Tweets WHERE topic LIKE \"%". $topic ."%\" ORDER BY auto_id DESC LIMIT " . $perPage . " OFFSET " . $bottom_limit . ";";
			$top10queryresults = $dblink->query( $top10sql )or die( "<p>Something went wrong with: $top10sql<br>". $dblink->error ); //execute the above query or call the error class with dblink
			while ( $socialdata = $top10queryresults->fetch_array( MYSQLI_ASSOC ) ) { //grab all from array and give it as an associative array
			  echo '<tr>';
			  echo '<td>' . $socialdata['username'] . '</td>';
			  echo '<td>' . $socialdata['text'] . '</td>';
			  echo '<td>' . $socialdata['time_posted'] . '</td>';
			  echo '<td>' . $socialdata['cyberbullying_category'] . '</td>';
			  echo '</tr>';
			}
			echo '</table>';
			echo '<div class="line-mf"></div>
        </div>
      </div>
    </div>
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
<div class="section-counter paralax-mf bg-image" >
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
        <h3 class="title-a"> Meet the Developers </h3>
        <p class="subtitle-a"> The team behind "Stop Cyberbullying" </p>
        <div class="line-mf"></div>
      </div>
    </div>
  </div>
  
   <div class="overlay-mf"></div>
  <div class="container position-relative">
    <div class="row">
      <div class="col-sm-4 col-lg-4">
         <div class="author-test"> <img src="assets/images/cyberbully_keyboard.png" alt="" class="smallimg"> <h3>Analisa Rojas</h3> </div>
                  <div class="content-test">
                    <p class="description lead"> Analisa is pursuing a Bachelor\'s of Science in Computer Science at UTSA. </p>
                  </div>
      </div>
	   <div class="col-sm-4 col-lg-4">
         <div class="author-test"> <img src="assets/images/bill.jpg" alt="" class="smallimg"> <h3>Bill Gonzalez</h3> </div>
                  <div class="content-test">
                    <p class="description lead"> Bill is pursuing a Master\'s of Science in Computer Science at UTSA with a Data Science Concentration. </p>
                  </div>
      </div>
	   <div class="col-sm-4 col-lg-4">
         <div class="author-test"> <img src="assets/images/javier.jpg" alt="" class="smallimg"> <h3>Javier De La Rosa</h3> </div>
                  <div class="content-test">
                    <p class="description lead"> Javier is pursuing a Bachelor\'s of Science in Computer Science at UTSA. </p>
                  </div>
      </div>
	  </div>
	  <div class="row">
	  <div class="col-sm-4 col-lg-4">
         <div class="author-test"> <img src="assets/images/jenelle.png" alt="" class="smallimg"> <h3>Jenelle Millison</h3> </div>
                  <div class="content-test">
                    <p class="description lead"> Jenelle is pursuing a Bachelor\'s of Science in Computer Science at UTSA. </p>
                  </div>
      </div>
	  <div class="col-sm-4 col-lg-4">
         <div class="author-test"> <img src="assets/images/cyberbully_keyboard.png" alt="" class="smallimg"> <h3>Shay Hill</h3> </div>
                  <div class="content-test">
                    <p class="description lead"> Shay is pursuing a Bachelor\'s of Science in Computer Science at UTSA. </p>
                  </div>
      </div>
	  <div class="col-sm-4 col-lg-4">
         <div class="author-test"> <img src="assets/images/daisy.jpg" alt="" class="smallimg"> <h3>Xue Li</h3> </div>
                  <div class="content-test">
                    <p class="description lead"> Xue is pursuing a Doctor of Philosophy in Computer Science at UTSA. </p>
                  </div>
      </div>
	 </div>
    </div>
  </div>
</section>
<!-- End Meet the Developers Section --> 
<!-- ======= Contact Section ======= -->
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route">
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
                <p class="lead"> Whether you want to report a bug, ask a question, or share some other information with us, please reach out by filling in your information below. </p>
              </div>
			   <div>
					';
if ( !isset( $_POST[ 'submit' ] ) ) {
  echo '
                      <form method="post" role="form" >';
  echo '<div class="row">
                          <div class="col-md-12 mb-3">';
  echo '<div class="form-group">';
  echo '<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your First Name" required>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12 mb-3">';
  echo '<div class="form-group">
                              <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your Last Name" required>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12 mb-3">';
  echo '<div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12 mb-3">';
  echo '<div class="form-group">
                              <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12 mb-3">';
  echo '<div class="form-group">
                              <input type="comments" class="form-control" name="comments" id="comments" placeholder="Any Comments" required>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-12 text-center">';
  echo '<button type="submit" name="submit" value="submit" class="button button-a button-big button-rouded">Submit</button>';
  echo '</div>';
  echo '</div>';
  echo '</form>';
}
if ( isset( $_POST[ 'submit' ] ) ) {
  $firstname = addslashes( $_POST[ 'firstname' ] ); //add slashes will make sure there's no special characters
  $lastname = addslashes( $_POST[ 'lastname' ] );
  $email = addslashes( $_POST[ 'email' ] );
  addslashes( $phone = $_POST[ 'phone' ] );
  addslashes( $comments = $_POST[ 'comments' ] );
  echo '<h4>Data received:</h4>';
  echo "<p>First Name: $firstname</p>";
  echo "<p>Last Name: $lastname</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Phone: $phone</p>";
  echo "<p>Comments: $comments</p>";
  // DB connection parameters
  $servername = $_ENV[ "MYSQLHOST" ];
  $port = $_ENV[ "MYSQLPORT" ];
  $username = $_ENV[ "MYSQLUSER" ];
  $password = $_ENV[ "MYSQLPASSWORD" ];
  $dbname = $_ENV[ "MYSQLDATABASE" ];
  // Create new mysql connection
  $dblink = new mysqli( $servername, $username, $password, $dbname, $port ); //make the connection to the db
  $sql = "Insert into `contact_data` (`first_name`,`last_name`,`email`,`phone`,`comments`) values('$firstname','$lastname','$email','$phone','$comments')"; //create the query
  $dblink->query( $sql )or die( "<p>Something went wrong with: $sql<br>" . $dblink->error ); //execute the above query or call the error class with dblink
  echo "<h4>Thank you for your feedback!</h4>";
}
echo '
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
<script src="assets/js/java.js"></script>
<script src="assets/js/searchbar.js"></script>
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


</body>
</html>
';
//DB connection
$servername = $_ENV[ "MYSQLHOST" ];
$port = $_ENV[ "MYSQLPORT" ];
$username = $_ENV[ "MYSQLUSER" ];
$password = $_ENV[ "MYSQLPASSWORD" ];
$dbname = $_ENV[ "MYSQLDATABASE" ];

//// Create connection
//$conn = new mysqli( $servername, $username, $password, $dbname, $port );
//// Check connection
//if ( $conn->connect_error ) {
//  die( "Connection failed: " . $conn->connect_error );
//  echo "<p>FAILED: not connect to Tweets DB</p>";
//} else {
//  echo "<p>CONNECTED: to Tweets DB</p>";
//}
//
//$sql = "SELECT auto_id, topic, sub_topic, username, text, time_posted FROM Tweets LIMIT 10";
//$result = $conn->query( $sql );
//
//if ( $result->num_rows > 0 ) {
//  // output data of each row
//	$count = 0;
//    while($row = $result->fetch_assoc() and $count < 10) {
//      echo "<p>id: " . $row["auto_id"]. " - Topic: " . $row["topic"]. " -> " . $row["sub_topic"] . "</p><br>";
//	  $count = $count + 1;
//    }
//} else {
//  echo "0 results";
//}
?>

<!--
<html>
<script>

	
	function refresh_div(){
		$.ajax({
			type: 'post',
			url: 'https://stopcyberbullying.online/queryDB.php',
			success: function(socialdata){
				$('#dbtop10results').html(socialdata);
			}
		});
	};
	setInterval(function(){refresh_div();}, 1000);


</script>
</html>
-->

