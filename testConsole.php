<?php
include("includes/headerfooter.php");
include("includes/includes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php headIncludes() ?>
  <title>CS @ IUS | Console</title>

    </head>
    <body>

      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><img src="pics/icons/logo2.png" class="thumbnail">CS @ IUS</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form pull-right">
                <input class="span2" type="text" placeholder="Email">
                <input class="span2" type="password" placeholder="Password">
                <button type="submit" class="btn">Sign in</button>
              </form>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>


      <div class="container">

        <!-- Main hero unit for a primary marketing message or call to action -->
        <div style="margin: 0 0 -50px 20px"><img src="pics/icons/max.png"> <img src="pics/icons/min.png" > <img src="pics/icons/close.png"></div>
        <div class="terminal">
        <!--<textarea id="terminalTB" readonly >
      </textarea>-->
      <div id="output">
        $ Hi, Use this very awesome console to navigate pages. E.g type "index" without quotes to go to the index page.
        But first, type your name: </br>
      </div>
    </br>
   <input type="text" value="$ " id="terminalInput"     maxlength= "100" />
  </div>

  <!-- Example row of columns -->
  <div class="row">
    <div class="span4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
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
