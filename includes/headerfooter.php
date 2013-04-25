
<?php

function headerCode(){

  echo <<<headerHTML
  <div class="navbar navbar-fixed-top navbar-inverse" '>
  <div class="navbar-inner" id="mainnavbar">
  <div class="container">
  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="brand" href="./index.php"><img src="pics/icons/logo2.png" class="thumbnail">CS @ IUS</a>
  <div class="nav-collapse collapse nav pull-right">
  <ul class="nav" >
  <li class="active "><a href="./index.php">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#contact">Contact</a></li>
   <li><a href="./signin_register.php">Sign in/Sign up</a></li>
  <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
  <ul class="dropdown-menu">
  <li><a href="/cs_page/testConsole.php">Console</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li class="divider"></li>
  <li class="nav-header">Nav header</li>
  <li><a href="#">Separated link</a></li>
  <li><a href="#">One more separated link</a></li>
  </ul>
  </li>
  </ul>
  </div><!--/.nav-collapse -->
  </div>
  </div>
  </div>
headerHTML;
}

function footerCode(){
  echo <<<footerHTML
  <footer>
        <p>&copy; cs@ius 2013</p>
  </footer>
footerHTML;
}

?>