<?php
			$emailAddress=$_POST['emailAddress'];
			$subscriberName=$_POST['subscriberName'];
						
		if ($_POST['submit']){
			$con=mysqli_connect("shareddb1e.hosting.stackcp.net","BMsCustomersList-36370646","53tzye53","BMsCustomersList-36370646");
			if(!$_POST['emailAddress']) $displayMessage = '<div class="alert alert-warning" role="alert">Please enter an email address</div>';
				else if (!(filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL))) 
					$displayMessage = '<div class="alert alert-warning" role="alert">Please enter a valid email address</div>';
				
		if(!$_POST['subscriberName']) $displayMessage = '<div class="alert alert-warning" role="alert">Please enter your name</div>';
		
		if($error) echo	"There where error(s) in your signup details: ".$error;
		
		else{
			$query = $con->prepare('SELECT * FROM CustomersList WHERE emailAddress = ?');
			$query->bind_param('s', $emailAddress);
			$query->execute();
			$result= $query->get_result();
			$results=mysqli_num_rows($result);
			
			if($results) {
				$displayMessage = '<div class="alert alert-warning" role="alert">This email address is already registered</div>';
				echo '<script>localStorage.setItem("myModall", "false");</script>';
				header("refresh:5;http://bmcleaningservice.co.uk");
				}
			else{
			$query = $con->prepare('INSERT INTO CustomersList VALUES(?, ?)');
			$query->bind_param('ss', $subscriberName, $emailAddress);
			$query->execute();
			$displayMessage = '<div class="alert alert-success" role="alert">Well done! You just subscibed to our fantastic newsletter!</div>';
			echo '<script>localStorage.setItem("myModall", "true");</script>';
				
			}
			}
			
		}

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style>
.modal-dialog {
  position:absolute;
  top:50% !important;
  transform: translate(0, -50%) !important;
  -ms-transform: translate(0, -50%) !important;
  -webkit-transform: translate(0, -50%) !important;
  margin:auto 5%;
  width:30%;
  height:20%;
}
.modal-content {
  min-height:100%;
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0; 
}
.modal-body {
  position:absolute;
  top:45px; /** height of header **/
  bottom:45px;  /** height of footer **/
  left:0;
  right:0;
  overflow-y:auto;
}
.modal-footer {
  position:absolute;
  bottom:0;
  left:0;
  right:0;
}
</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109745687-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-109745687-1');
</script>

<!-- Start Alexa Certify Javascript -->
<script>
_atrk_opts = { atrk_acct:"iJhoq1hNdI20fn", domain:"bmcleaningservice.co.uk",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=iJhoq1hNdI20fn" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  



  <title>Cleaning Service Falkirk, Bo&apos;ness, Linlithgow</title>
  <meta name="google-site-verification" content="_qVf3Lydk8ZMcX3euXLYLN9gY3RKNn12WKZvATefqMw" />
  <meta content="Cleaning Service Falkirk-Proffessional House Cleaning-Falkirk Cleaning Services -Services: Residential Cleaning, Maid Services, Housekeepers, Dusting, Vacuuming" name="description"/>
  <meta name="description" content="Cleaning Service Falkirk-Proffessional House Cleaning- BM's Cleaning Services Falkirk -Service :Residential Cleaning,Maid Services,Housekeepers,Dusting,Vacuuming" />
  <meta name="keywords" content="Cleaning Service Falkirk, Falkirk Cleaning Services, Falkirk, domestic cleaning, professional cleaning, cleaner, cleaners, cleaner in Falkirk, cleaners in Falkirk, cleaner in Falkirk area, cleaners in Falkirk area" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="geo.region" content="GB-FAL" />
  <meta name="geo.placename" content="Falkirk" />
  <meta name="language" content="English">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://bmcleaningservice.co.uk/FAQsites/style.css" />
  
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:title" content="Cleaners, Cleaning Company - Falkirk, West Lothian | BMCleaning Services"/>
  <meta name="twitter:description" content="Looking for domestic or commercial cleaners for regular or one off cleaning in Falkirk and surrounding areas? Contact Us Today - falkirkcleaningservice@bmcleaningservice"/>
  <meta property="og:description" content="Looking for domestic or commercial cleaners for regular or one off cleaning in Falkirk and surrounding areas? Contact Us Today - falkirkcleaningservice@bmcleaningservice"/>
  <meta property="og:title" content="Cleaners, Cleaning Company - Falkirk, West Lothian | BMCleaning Services"/>
  



</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
	console.log(localStorage.getItem("myModall"));
	if((localStorage.getItem("myModall") == 'false') || (localStorage.getItem("myModall") === null)){
    $(document).ready(function() {
        setTimeout(function(){
       $('#myModal').modal('show');
   }, 4000);
   localStorage.setItem("myModall", "true");
	})}
	setTimeout(function() {
		$('#error').fadeOut().empty();
	}, 8000);
	localStorage.removeItem("myModall");
</script>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
	<a href="index"><img src="http://bmcleaningservice.co.uk/pictures/capture.jpg" ALT="Cleaning Service Falkirk" title="Cleaning Service Falkirk"/></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"></a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
		<li><a href="http://bmcleaningservice.co.uk/cleaningTips">TIPS</a></li>
		<li><a href="http://bmcleaningservice.co.uk/FAQ">FAQ</a></li>
		<li><a href="http://bmcleaningservice.co.uk/Best-Cleaning-Advices-For-Allergy-And-Asthma-Sufferers">ADVICES</a></li>
      </ul>
    </div>
  </div>
</nav>



<span itemscope itemtype="http://schema.org/LocalBusiness"><div class="jumbotron text-center" style="color:#ef0b94">
  <h1>Cleaning Service Falkirk-BM's Cleaning Services Falkirk-Experienced Cleaners-Friendly Services</h1>
  <p id="mainThird">We specialize in cleaning</p>
  <p id="mainThird">£10 / per hour</p>

</div>

 <div class="col-sm-12 form-group" id="error"><? echo $error.$displayMessage; ?></div>
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">Subscribe to our mailing list</h5></br>
		<form method="POST">
			<input type="email" name="emailAddress" placeholder="yourname@email.com" required id="emailAddress" />
			<input type="name" name="subscriberName" placeholder="your name" required id="subscriberName" />	
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="Register" name="submit">Send</button>
		</form>
      </div>
    </div>
  </div>
</div>




<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>BM's Cleaning Services - When you need proffessional cleaning services in Falkirk and surrounding area, contact our team today!</h2><br>
      <h4>We are a small family-owned company and have provided our services to residents and business owners in Falkirk, Bo&apos;ness, Polmont, Grangemouth, Linlithgow and Redding since 2015,
      Over the years BM's Cleaning Services has built up a reputation of quality work and have happy, regular customers. </h4>
      <h4>Whether you want weekly, bi-weekly or just a one-time house or office cleaning, we’ll design maid service around your needs.
      Our professionally trained cleaners specialize in commercial and residential cleaning.
      Cleaning supplies are provided, however, if you prefer, we can use your own supplies at your request.</h4><br>
	  <h4>Our staff are very reliable, trustworthy and friendly domestic cleaners. BM's Cleaning Services is looking for new clients especially home cleaning in the Bo&apos;ness, Falkirk, Polmont, Redding and Linlithgow areas.
Our service is always personal so you have the same best house cleaner each time. </h4><br>
      <p></p>
    </div>
    <div class="col-sm-4">
      <img src="http://bmcleaningservice.co.uk/pictures/secondDiv.jpg" ALT="Cleaning Service Falkirk" title="Cleaning Service Falkirk"/>
    </div>
  </div>
</div>
<div class="col-sm-12">
	<center><a href="#contact"><br><button class="btn btn-warning btn-lg">Get in Touch</button></a></center>
	<br><br>
</div>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer:</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Power cleaning services</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>We always put a little extra love in what we do</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gbp logo-small"></span>
      <h4>AFFORDABLE PRICES</h4>
      <p>Hourly service no contracts</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Green and safe for our clients</p>
    </div>

    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>We take hard work out of house cleaning</p>
    </div>

	 <div class="col-sm-4">
      <span class="glyphicon glyphicon-thumbs-up logo-small"></span>
      <h4 style="color:#303030;">JOB DONE</h4>
      <p>Job done at the highest quality</p>
    </div>

  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 id="review">"Barbara provides her services at a reasonable prices which does not distract her from paying attention to the smallest of detail"<br><span>Dee, Linlithgow</span></h4>
      </div>
      <div class="item">
        <h4 id="review">"Thorough clean, effecient, polite and friendly. Very reasonable price, everything you need from a cleaner will definitely recommend and be using Barbara again."<br><span>Lucy, Camelon</span></h4>
      </div>
      <div class="item">
        <h4 id="review">"Barbara's service is absolutely fantastic, we have 4 children and work full time and without this lady we would be struggling,."<br><span>Steven&Lisa, Grangemouth</span></h4>
      </div>
	  <div class="item">
        <h4 id="review">"Prompt, reliable, meticulous and reasonably priced! You will receive an excellent service, which simply outshines the rest."<br><span>Sharon, Laurieston</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid" >
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" >
          <h2>Basic Cleaning</h2>
        </div>
        <div class="panel-body">
          <p>Vacuuming and mopping of floors, dusting, and garbage removal in all rooms</p>
          <p>Kitchen counters, sink, and stove</p>
          <p>Bathroom toilet, sink, tub/shower, mirrors</p>
		  <p>Washing dishes, making beds and cleaning/folding laundry is generally not included in standard cleaning. These tasks may be requested in the booking notes.</p>
        </div>
        <div class="panel-footer">
          <h3>£10</h3>
          <h4>per hour</h4>
          <a href="#contact"><button class="btn btn-lg">Sign Up</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Deep Cleaning</h2>
        </div>
        <div class="panel-body">
          <p>Everything in a Standard Cleaning and can also include:</p>
          <p>Kitchen - behind oven and fridge (removed prior to cleaning), inside microwave, inside and outside cabinets</p>
          <p>Bathroom - deep grout scrub of toilet, sink, tub/shower, inside and outside cabinets</p>
          <p>Spot clean baseboards, vacuum under furniture, vacuum furniture in all rooms, garbage cans sanitized, if you would like to request anything else just let us know in booking notes.</p>
		  
        </div>
        <div class="panel-footer">
          <h3>£15</h3>
          <h4>per hour</h4>
         <a href="#contact"><button class="btn btn-lg">Sign Up</button></a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Container (Contact Section) -->

<div id="contact" class="container-fluid bg-grey2" >
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bo&apos;ness, West Lothian</p>
      <p><span class="glyphicon glyphicon-envelope"></span> bmcs@gmx.com</p>
	  <p itemprop="email"><span class="glyphicon glyphicon-envelope"></span>falkirkcleaningservice@bmcleaningservice.co.uk</p>
	  <p><span class="glyphicon glyphicon-phone"></span>Text us for more info: 07746640185</p>
    </div>
	
    <div class="col-sm-7 slideanim">
      <div class="row">
	  <div class="col-sm-12 form-group" id="error"><? echo $error.$displayMessage; ?></div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text">
        </div>
        <div class="col-sm-5 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email">
        </div>
		 <!--<div class="col-sm-4 form-group">
          <input class="form-control" id="tel" name="tel" placeholder="tel No" type="telephone">
        </div>-->
      </div>
	  <div class="col-sm-10">
		<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
	  </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default center-block" type="submit">Send</button>
        </div>
      </div>
    </div>
	
  </div>
</div>

<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<meta itemprop="addressLocality" content="Falkirk"></span></span>





<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> We can arrange a visit to your home for an accurate quote or estimates can be given via any other contact method.</a></p>
  <a href="https://twitter.com/bmcservice?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @bmcservice</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <div class="fb-like" data-href="https://www.facebook.com/falkirkcleaningservice" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
