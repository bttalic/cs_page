<?php
include("includes/headerfooter.php");
include("includes/includes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php headIncludes() ?>
  <title>CS @ IUS | Home</title>
</head>

<body>
  <?php headerCode() ?>

  <div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
      <h1>Welcome to the Computer Science departement!</h1>
      <p>We will find and put some clever text here, but for now just, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
      <div class="span4">
        <h2>Our Professors</h2>
        <img class="prof_thumble" src="pics/users/professors/harismemic.jpg" />
        <img class="prof_thumble" src="pics/users/professors/jasminkahasic.jpg" />
        <img class="prof_thumble" src="pics/users/professors/abdurrazagaliaburas.jpg" />
        <img class="prof_thumble" src="pics/users/professors/kanitahadziabdic.jpg" />
        <img class="prof_thumble" src="pics/users/professors/harrymiller.jpg" />
        <img class="prof_thumble" src="pics/users/professors/lejlamiller.jpg" />
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
      <div class="span4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
      <div class="span4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

    <?php footerCode() ?>

  </div> <!-- /container -->

  <?php scriptIncludes() ?>

</body>
</html>
