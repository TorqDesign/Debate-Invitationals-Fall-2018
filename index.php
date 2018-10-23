<?php
function sqlQuery($queryString)
{

    $servername = "Anishinator.db.2545486.b18.hostedresource.net";
    $username = "Anishinator";
    $password = "Password123!";
    $dbname = "Anishinator";

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

function returnWordsFromDateTime($dateTimeString)
{
    return date('F d, Y \a\t h:i a', strtotime($dateTimeString));
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
							<div class="col-lg-3 newsimagecontainer"><img class="d-none d-lg-block newsimage" src="%s" style="height: 12em; width: 12em; border-radius: 25px; object-fit: cover;"></div>
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

    <title>Massey Debate</title>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Playfair+Display" rel="stylesheet">
    <script src="js/rellax.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body id="page-top">

<script>

    $(window).scroll(function () {
        if ($(window).width() > 992) {
            console.log($(window).width());
            if ($(window).scrollTop() >= 50) {
                $('.navbar').css('background', '#343a40');
            } else {
                $('.navbar').css('background', 'transparent');
            }
        }
        else {
            $('.navbar').css('background', '#343a40');
        }
    });

</script>

<?php require_once('includes/form_script.php'); ?>

<!-- Navigation -->
<?php require_once('includes/navbar.php'); ?>

<header class="bg-primary text-white background">
    <div class="container text-center" style="position: relative; top: 50%; transform: translateY(-50%);">
        <h1 id="tagline">Massey Debate Invitationals</h1>
        <p class="lead">November 26th | 1800 Liberty St.</p>
        <br>
        <p style="margin-top:-0.7em;">
            <a href="https://facebook.com/ElectAlexWard9/" style="color:#FFFFFF"><i
                        class="fab fa-facebook bigicon zoomonhover" style="margin-right:0.8em"></i></a>
            <a href="https://twitter.com/ElectAlexWard9/" style="color:#FFFFFF"><i
                        class="fab fa-twitter bigicon zoomonhover" style="margin-right:0.8em"></i></a>
            <a href="mailto:Alex4UWard9@gmail.com" style="color:#FFFFFF"><i
                        class="fas fa-envelope bigicon zoomonhover"></i></a>
        </p>
    </div>
</header>

<div>
    <section id="about" class="body-row" style="overflow: hidden;">
        <div class="object1" id="parallax-img" style="height: 70vh; margin: 5%;">
            <div class="subtitle">
                <div class="row">
                    <div class="col-lg-4 outline-rect vert-center">
                        <div class="feature-txt">
                            <h2>Fun for all groups.</h2>
                            <p class=lead2>Even without any increase in Property Tax Rate (% or mil) the dollar amount
                                of Property Tax is going to increase substantially due to increase in property prices in
                                the last two years. Therefore, the taxes will cut into the available funds for
                                families.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 vert-center desktop-only">
                        <div class="feature-img rellax img1" data-rellax-speed="1"></div>
                        <div class="broll-img img1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner1"></div>
        <div class="object1" id="parallax-img" style="height: 70vh; margin: 5%;">
            <div class="subtitle">
                <div class="row">
                    <div class="col-lg-4 outline-rect vert-center">
                        <div class="feature-txt">
                            <h2>ATTRACT HIGH-TECH BUSINESSES.</h2>
                            <p class="lead2">The City should develop a reputation as the most startup-friendly one in
                                the region by providing office and working space at reasonable rates near the city
                                center and through providing targeted support for those working on new ideas, projects,
                                businesses and industries.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 vert-center desktop-only">
                        <div class="feature-img rellax img2" data-rellax-speed="1"></div>
                        <div class="broll-img img2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner1 banner2"></div>

        <div class="object1 object1-mod" id="parallax-img" style="height: 70vh; margin: 5%;">
            <div class="subtitle">
                <div class="row">
                    <div class="col-lg-4 outline-rect vert-center">
                        <div class="feature-txt">
                            <h2>FIX INFRASTRUCTURE.</h2>
                            <p class="lead2">Many homes and businesses have suffered from the issue of sewage back up
                                and flooding. This leads to issues of losses as well as problems of increased insurance
                                charges.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 vert-center desktop-only">
                        <div class="feature-img rellax img3" data-rellax-speed="1"></div>
                        <div class="broll-img img3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="body-row">
        <div class="row" style="min-height: 25em; margin: 0px;">
            <div class="col-lg-12 mx-auto ">
                <div class="panel">
                    <h1 style="text-align: center;">Latest News</h1>
                    <?php
                    $query_result = sqlQuery("SELECT id,post_date,post_content,post_title FROM wp_posts where post_status='publish' and post_type='post' order by id desc limit 5");

                    if ($query_result->num_rows > 0) {
                        // output data of each row
                        while ($row = $query_result->fetch_assoc()) {
                            $post_id = $row["id"];
                            $thumbnailUrl = null;

                            $query_result2 = sqlQuery(sprintf("SELECT meta_value FROM wp_postmeta WHERE post_id='%s' and meta_key='_thumbnail_id'", $post_id));

                            if ($query_result2->num_rows > 0) {
                                //has a picture
                                $query_result_assoc = $query_result2->fetch_assoc();
                                $thumbID = $query_result_assoc['meta_value'];

                                $query_result3 = sqlQuery(sprintf("SELECT meta_value from wp_postmeta WHERE post_id=%s and meta_key='_wp_attached_file'", $thumbID));
                                $query_result_assoc3 = $query_result3->fetch_assoc();
                                $thumbnailUrl = "blog/wp-content/uploads/" . $query_result_assoc3['meta_value'];
                            } else {
                                $thumbnailUrl = "img/noimage.png";
                            }

                            //echo "id: " . $row["post_date"]. " - Name: " . $row["post_content"]. " " . $row["post_title"]. "<br>";
                            $readmoreUrl = "blog/?p=" . $post_id;

                            //fancy stuff if post is longer than 200 chars
                            $post_content_trunc = substr($row["post_content"], 0, 200);

                            if ($post_content_trunc != $row["post_content"]) {
                                $post_content = $post_content_trunc . "...";
                            } else {
                                $post_content = $row["post_content"];
                            }

                            print(sprintf($template, $row["post_title"], $post_content, $readmoreUrl, returnWordsFromDateTime($row["post_date"]), $thumbnailUrl));

                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
                </div>

            </div>
        </div>
    </section>

    <br>

    <!-- Footer -->
    <?php require_once('includes/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
            integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
            crossorigin="anonymous"></script>

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
