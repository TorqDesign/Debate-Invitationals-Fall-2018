<!DOCTYPE html>
<html lang="en">
<!--https://codepen.io/karldanninger/pen/NwzMzN-->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alex Aggarwal</title>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">  
	<script src="js/rellax.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>
  <body id="page-top">
  <?php require_once('includes/form_script.php'); ?>
    <!-- Navigation -->
    <?php require_once('includes/navbar.php'); ?>
    <style>
    	#aboutme-box {
    		margin-top: 72px;
    	}
    	.dad-photo {
    		background: url("images/alex.jpg") no-repeat center;
    		height: 65vh;

    		background-size: cover;
    	}
    </style>
    <div class="container" id="aboutme-box">
    	<div class="row">
			<div class="col-lg-5 dad-photo"></div>
			<div class="col-lg-7">
				<div class="description-aboutme">
					<h2>Alex Aggarwal</h2>
					<p>I am a candidate for Ward 9 for the Council, to be elected on 22nd October 2018, for the city of Windsor.<br><br>Our family home is in Ward 9.  My wife -Dr Seema Aggarwal -is a Physician and  runs two clinics: Roseland Clinic and South Windsor After-hour Clinic in Ward 9. We have two children. Our daughter graduated from Massey High School and is studying in Health Sciences at McMaster University. Our son is studying at Massey High School.I am a graduate of University of Toronto in Computer Engineering and MBA from University of Chicago.  I have worked in high tech companies such as IBM, Microsoft, Attachmate/Novell and management consulting companies such as Cap Gemini. I have also worked as a Senior Executive in tier one supplier such as Arvin Meritor.[AA1]  I have been active in social and professional communities.<br><br>My father has retired from University of Windsor. He worked as a professor and later as a Director of School of Computer Science.<br><br>I shall fight for residents of Ward 9 against high property taxes and high Erwin Utilities bills for electricity, water and sewage. Our City requires a coherent strategy to develop it into a prosperous city. I can contribute to developing, sustaining and executing such a strategy due to my education and management consulting experience.  – Alex Aggarwal</p>
				</div>
			</div>
		</div>
    </div>

	
	<br>

    <!-- Footer -->
    <?php require_once('includes/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
	<script>
	  // Center all the things!
	  var rellax = new Rellax('.rellax', {
	    center: true
	  });
	</script>
  </body>

</html>
