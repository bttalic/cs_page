
<?php

function headerCode(){

  echo <<<headerHTML
  <div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
  <div class="container">
  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="brand" href="#"><img src="pics/logo2.png" class="thumbnail">CS @ IUS</a>
  <div class="nav-collapse collapse">
  <ul class="nav">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#contact">Contact</a></li>
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
  <form class="navbar-form pull-right">
  <input class="span2" type="text" placeholder="Email">
  <input class="span2" type="password" placeholder="Password">
  <button type="submit" class="btn">Sign in</button>
  </form>
  </div><!--/.nav-collapse -->
  </div>
  </div>
  </div>
headerHTML;
}

function footerCode(){
  echo <<<footerHTML
  <footer>
        <p>&copy; b.ttalic&mirza-se 2013</p>
      </footer>
footerHTML;
}

?>