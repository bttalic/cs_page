<?php

function headIncludes(){
	

	echo <<<headerIncludesHTML
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/assets/bootstrap-responsive.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="styles/general.css" rel="stylesheet">
    <link href="styles/addition.css" rel="stylesheet">
    <link href="styles/assets/bootstrap-responsive.css" rel="stylesheet">
headerIncludesHTML;
}

function scriptIncludes(){
	
	 
    // Placed at the end of the document so the pages load faster
    
    echo <<<scriptIncludesHTML
   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
     <script src="js/custom.js"></script>
scriptIncludesHTML;
}