<?php
function sqlQuery($queryString){
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "anishinator";
	
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
		die("<h1>Unable to establish a database connection.</h1>");
    }

    $result = $conn->query($queryString);
	
	$conn->close();
	
    return $result;
}

function returnWordsFromDateTime($dateTimeString){
	$dateTimeSplit = explode(" ",$dateTimeString);
	$date = $dateTimeSplit[0];
	$time = $dateTimeSplit[1];
	return date('F d, Y \a\t h:i a',strtotime($date));
}

$template = <<<'EOD'
					<br>
				<div class="card">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-9">
							  <div class="newsitem">
								<h3>%s</h3>
								<p>%s <br><a href="%s">Read more</a></p>
								<span class="datetext">%s</span>
							  </div>
							</div>
							<div class="col-lg-3 newsimagecontainer"><img class="d-none d-lg-block newsimage" src="%s" style="height: 12em; width: 12em; border-radius: 25px;"></div>
						 </div>
					</div> 
				</div>
EOD;

?>

<!DOCTYPE html>
<html lang="en">
<!--https://codepen.io/karldanninger/pen/NwzMzN-->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alex Aggarwal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">  
	<script src="js/rellax.min.js"></script>

  </head>
  <body id="page-top">
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white background">
      <div class="container text-right" style="margin-top:25vh;">
        <h1>Alex Aggarwal - Ward 9</h1>
        <p class="lead">Visionary - Efficient - Leadership</p>
		<p style="margin-top:-0.7em;">
			<a href="https://facebook.com/ElectAlexWard9/" style="color:#FFFFFF"><i class="fab fa-facebook bigicon zoomonhover" style="margin-right:0.8em"></i></a>
			<a href="https://twitter.com/ElectAlexWard9/" style="color:#FFFFFF"><i class="fab fa-twitter bigicon zoomonhover" style="margin-right:0.8em"></i></a>
			<a href="mailto:Alex4UWard9@gmail.com" style="color:#FFFFFF"><i class="fas fa-envelope bigicon zoomonhover"></i></a>
		</p>
      </div>
    </header>

    <div class="">
	    <section id="about" class="body-row">
	        <div class="" style="height: 70vh; margin: 0px;">
	        	<div class="subtitle">
	        		<div class="row">
	        			<div class="col-lg-4 outline-rect vert-center">
	        				<div class="feature-txt">
					            <h2>LOREM IPSUM DOLOR.</h2>
					            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
					        </div>
				        </div>
				        <div class="col-lg-8 vert-center">
					        <div class="feature-img rellax" data-rellax-speed="1""></div>
					        <div class="broll-img"></div>
					    </div>

				    </div>
		        </div>
		    </div>
		    <div class="banner1 vert-center">
		    	<h2 style="color: white;font-size: 4em;">Per Aspera Ad Astra</h2>
		    </div>
	        <div class="" style="height: 70vh; margin: 0px;">
	        	<div class="subtitle">
	        		<div class="row">
	        			<div class="col-lg-4 outline-rect vert-center">
	        				<div class="">
					            <h2>LOREM IPSUM DOLOR.</h2>
					            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
					        </div>
				        </div>
				        <div class="col-lg-8 vert-center">
					        <div class="feature-img"></div>
					        <div class="broll-img"></div>
					    </div>
				    </div>
		        </div>
		    </div>
	        <div class="" style="height: 70vh; margin: 0px;">
	        	<div class="subtitle">
	        		<div class="row">
	        			<div class="col-lg-6 outline-rect">
				            <h2>Lorem Ipsum Dolor</h2>
				            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
				            <ul>
				              <li>Clickable nav links that smooth scroll to page sections</li>
				              <li>Responsive behavior when clicking nav links perfect for a one page website</li>
				              <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
				              <li>Minimal custom CSS so you are free to explore your own unique design options</li>
				            </ul>
				        </div>
				    </div>
		        </div>
		    </div>
	        <div class="" style="min-height: 100vh; margin: 0px;">
	        	<div class="subtitle-alt">
	        		<div class="row">
	        			<div class="col-lg-6 outline-rect">
				            <h2>Lorem Ipsum Dolor</h2>
				            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
				            <ul>
				              <li>Clickable nav links that smooth scroll to page sections</li>
				              <li>Responsive behavior when clicking nav links perfect for a one page website</li>
				              <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
				              <li>Minimal custom CSS so you are free to explore your own unique design options</li>
				            </ul>
				        </div>
				    </div>
		        </div>
		    </div>
	    </section>
		<section id="services" class="body-row">
	    </section>
		
		
		<section id="news" class="body-row">
        <div class="row" style="min-height: 25em; margin: 0px;">
		  <div class="col-lg-12 mx-auto vert-center">
		    <div class="panel">
		      <h1 style="text-align: center;">Latest News</h1>
			  
				<?php
					$query_result = sqlQuery("SELECT id,post_date,post_content,post_title FROM wp_posts where post_status='publish' and post_type='post' order by id desc limit 5");
					
					if ($query_result->num_rows > 0) {
						// output data of each row
						while($row = $query_result->fetch_assoc()) {
							$post_id = $row["id"];
							$thumbnailUrl = null;

							$query_result2 = sqlQuery(sprintf("SELECT meta_value FROM wp_postmeta WHERE post_id='%s' and meta_key='_thumbnail_id'",$post_id));
							
							if($query_result2->num_rows > 0){
								//has a picture
								$query_result_assoc = $query_result2->fetch_assoc();
								$thumbID = $query_result_assoc['meta_value'];
								
								$query_result3 = sqlQuery(sprintf("SELECT meta_value from wp_postmeta WHERE meta_id=%s",$thumbID));
								$query_result_assoc3 = $query_result3->fetch_assoc();
								$thumbnailUrl = "blog/wp-content/uploads/" . $query_result_assoc3['meta_value'];
							}
							
							//echo "id: " . $row["post_date"]. " - Name: " . $row["post_content"]. " " . $row["post_title"]. "<br>";
							$readmoreUrl = "blog/?p=" . $post_id;
							
							//fancy stuff if post is longer than 200 chars
							$post_content_trunc = substr($row["post_content"],0,200);
							
							if($post_content_trunc != $row["post_content"]){
								$post_content = $post_content_trunc . "...";
							}
							else{
								$post_content = $row["post_content"];
							}
							
							print(sprintf($template,$row["post_title"],$post_content,$readmoreUrl,returnWordsFromDateTime($row["post_date"]),$thumbnailUrl));
							
						}
					} else {
						echo "0 results";
					}
					
				?>
	        </div>
			
			</div>
	    </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 Alex Aggarwal. Designed and Managed by Torq Design.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
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
