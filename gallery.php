<?php

require_once("admin/phpscripts/init.php"); ///move things below the doctype

		$tbl = "tbl_images";
		$getImages = getAll($tbl);
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chantry Island - Official Website</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>
  <div id="signIn">
    <a href="#"><h4>Administrative Sign-In</h4></a>
  </div>
  <header>
      <img src="images/ChantryIslandPics/MHS_logo.png" alt="Chantry Island Logo">
  </header>
  <div class="headNav">
    <nav class="row">
    <h2 class="hidden">Main Navigation</h2>
      <ul class="small-12 large-12 columns dropdown menu" data-dropdown-menu>
        <li class="small-6 medium-4 large-2 columns"><a href="index.html">HOME</a></li>
        <li class="small-6 medium-4 large-2 columns">
          <a href="about.html">ABOUT</a>
          <ul class="row">
            <li class="small-6 columns"><a href="news.html">NEWS</a></li>
            <li class="small-6 columns"><a href="restoration.html">RESTORATION</a></li>
          </ul>
        </li>
        <li class="small-6 medium-4 large-2 columns"><a href="contact.html">CONTACT</a></li>
        <li class="small-6 medium-4 large-2 columns"><a href="gallery.php">GALLERY</a></li>
        <li class="small-6 medium-4 large-2 columns"><a href="booking.html">BOOKING</a></li>
        <li class="small-6 medium-4 large-2 columns"><a href="contact.html">DONATIONS</a></li>
      </ul>
    </nav>
  </div>
  
  
  <div id="container">
    <div class="row">
      <h2>Photo Gallery</h2>
      <h3>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</h3>
      <br>
      <h3>If you have photos of Chantry Island that you would like to share with us, connect with our Facebook page.</h3>
    </div>




<section class="row">
	<h2 class="hide">Chantry Island Gallery</h2>
	<div id="section3" class="small-10 small-offest-1 small-pull-1 medium-offset-1 medium-10 medium-pull-1 columns">    
		<h3 class="sectiontitle">Image Gallery</h3>
		<p class="projectsbox">Select an image below to get a better view!</p>


	<div class="large reveal" id="hidden-gallery" data-reveal>
		<img class="bigimage" src="images/ChantryIslandPics/MHS_logo.png" alt="galleryplaceholder">
		<p class="author">Author's name goes here</p>

		<button class="close-button" data-close aria-label="Close reveal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	</div>
	
	<?php
	   		if(!is_string($getImages)){
				while($row = mysqli_fetch_array($getImages))
				{
					echo "<a data-open=\"hidden-gallery\">";
					echo "<img class=\"thumbInfo\" src=\"images/{$row['images_simg']}\" alt=\"{$row['images_name']}\" id=\"{$row['images_id']}\" >";
					echo "</a>";
				}
					}else{
				echo "something went wrong";
				//echo "<p>{$getImages}</p>";
				//echo "i'm unsure what happened.";
			}
		?>
</section>
              
              <div class="row">
      <div class="small-12 columns">
        <h2>Marine Heritage Society Volunteers</h2>
        <h3>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. Since so many people volunteer their time and energy to help our organization function, this page is dedicated to our wonderful volunteers. Thank you all very much, this would not be possible without your time and donations.</h3>
      </div>
    </div>
    
    <section class="aboutSection">
      <div class="row">
        <div class="small-12 columns">
          <h2>Volunteers</h2>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 large-3 columns">
          <h3>Don Nicholson</h3>
          <h3>Chairman</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
          <h3>Pat O'Connor</h3>
          <h3>Vice Chairman</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
          <h3>John Rigby</h3>
          <h3>Treasurer</h3>
          <h4>Date Posted: 2016-09-30</h4>
          <br>
          <h3>Stan Young</h3>
          <h3>Secretary</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
        </div>
        <div class="small-12 medium-6 large-3 columns">
          <h3>Rick Smith</h3>
          <h3>Past Chairman</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
          <h3>Ali Kelly</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
          <h3>Jane Kramer</h3>
          <h4>Date Posted: 2016-09-30</h4>
          <br>
          <h3>Vicki Tomori</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
        </div>
        <div class="small-12 medium-6 large-3 columns">
          <h3>Dan Holmes</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
          <h3>Dave Wenn</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
          <h3>Ed Braun</h3>
          <h4>Date Posted: 2016-09-30</h4>
          <br>
          <h3>John Willetts</h3>
          <h4>Date Posted: 2016-06-17</h4>
          <br>
        </div>
        <div class="small-12 medium-6 large-3 columns">
          <h3>Peter Williamson</h3>
          <h3>Observer</h3>
          <h4>Date Posted: 2016-06-17</h4>
        </div>
      </div>
    </section>
    
    <section>
      <div class="row">
        <div class="small-6 large-3 columns">
          <h3>Saugeen</h3>
          <h3>Shores</h3>
          <h4>The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce.</h4>
          <h4>Let this website help you plan your visit when you come to tour Chantry Island.</h4>
        </div>
        <div class="small-6 large-3 columns">
          <h3>Bruce County Museum</h3>
          <h3>and Cultural Centre</h3>
          <h4>The Bruce County Museum and Cultural Centre offers a journey through thousands of years of natural and human history.</h4>
          <h4>Check out their awesome Marine Gallery.</h4>
        </div>
        <div class="small-4 large-2 columns">
          <h3>Bruce Coast</h3>
          <h3>Lighthouse Tour</h3>
          <h4>Enjoy the Bruce Coast Lighthouse Tour.</h4>
        </div>
        <div class="small-4 large-2 columns">
          <h3>Explore</h3>
          <h3>The Bruce</h3>
          <h4>Explore the Bruce is the Official Travel web site of Bruce County, one of the most spectacular all season destinations in Ontario. Check out this link for more Lighthouse Destinations.</h4>
        </div>
        <div class="small-4 large-2 columns">
          <h3>Southampton</h3>
          <h3>Tennis Club</h3>
          <h4>The Southampton Tennis Club is a thriving seasonal tennis club on the sunny shores of Lake Huron. Visit our website for more information.</h4>
        </div>
      </div>
      <div class="socialMedia">
        <a href="#"><img src="images/facebook.png" alt="Facebook Logo" width="50"></a>
        <a href="#"><img src="images/youtube.png" alt="YouTube Logo" width="50"></a>
      </div>
    </section>
  </div>
  
  <footer>
    <div class="row">
      <div id="contact" class="small-12 medium-3 large-2 columns">
        <h4>Call: <span><a href="#">519-797-5862</a></span></h4>
        <h4>Toll Free: <span><a href="#">1-866-797-5862</a></span></h4>
        <h4>or <span><a href="#">E-Mail</a></span></h4>
      </div>
      <div id="address" class="small-12 medium-6 large-8 columns">
        <p>Marine Heritage Society</p>
        <p>Box 421</p>
        <p>Southampton, Ontario</p>
        <p>Canada, N0H 2L0</p>
      </div>
      <div id="copyright" class="small-12 medium-3 large-2 columns">
        <p>Marine Heritage Society &copy; 2017</p>
      </div>
    </div>
  </footer> 
                           
	<!--DON'T DELETE!!! Make sure the .js ones aren't .min, this breaks all the cool stuff -->
    <script src="greensock/src/minified/TweenMax.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <!-- DON'T DELETE!!! -->     

  </body>
</html>
