<?php 
$page = basename($_SERVER['PHP_SELF']); 
if($page != 'index.php'){
	$otherPage = true;
}
?>
<nav class="navbar navbar-expand-lg navbar-dark <?php echo !$otherPage ?: 'bg-dark'; ?> fixed-top" id="mainNav" style="transition: background 0.15s;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo $otherPage ? 'index.php' : '#page-top'; ?>">Massey Debate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive"">
<!--          <ul class="navbar-nav ml-auto">-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link js-scroll-trigger" href="--><?php //echo $otherPage ? 'index.php#' : '#'; ?><!--page-top">Home</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link js-scroll-trigger" href="--><?php //echo $otherPage ? 'index.php#' : '#'; ?><!--about">Goals</a>-->
<!--            </li>-->
<!--			<li class="nav-item">-->
<!--              <a class="nav-link js-scroll-trigger" href="--><?php //echo $otherPage ? 'index.php#' : '#'; ?><!--news">News</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link js-scroll-trigger" href="--><?php //echo $otherPage ? 'index.php#' : '#'; ?><!--contact">Contact</a>-->
<!--            </li>-->
<!--			<li class="nav-item">-->
<!--              <a class="nav-link js-scroll-trigger --><?php //echo $page != 'platform.php' ?: 'active'; ?><!--" href="platform.php">Platform</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link js-scroll-trigger --><?php //echo $page != 'aboutme.php' ?: 'active'; ?><!--" href="aboutme.php">About Me</a>-->
<!--            </li>-->
<!--          </ul>-->
        </div>
      </div>
    </nav>