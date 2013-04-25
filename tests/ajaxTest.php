<?php

/*
if(!empty($_POST['name'])){
  echo $_POST['name'];
}

if(!empty($_FILES['file'])){
$allowedExts = array("gif", "jpeg", "jpg", "png");
$filename=$_FILES["file"]["name"];
$extension = strtolower(substr($filename, strpos($filename,'.')+1));
  if ( (($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png")) 
&& in_array($extension, $allowedExts))
  {
    echo "bar je usao";
    if ($_FILES["file"]["error"] > 0)
    {
      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
      echo "Upload: " . $_FILES["file"]["name"] . "<br>";
      echo "Type: " . $_FILES["file"]["type"] . "<br>";
      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
      echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

      if (file_exists("../pics/" . $_FILES["file"]["name"]))
      {
        echo $_FILES["file"]["name"] . " already exists. ";
      }
      else
      {
        move_uploaded_file($_FILES["file"]["tmp_name"],
          "../pics/" . $_FILES["file"]["name"]);
        echo "Stored in: " . "pics/" . $_FILES["file"]["name"];
      }
    }
  }
  else
  {
    echo "Invalid file";
  }
}*/

if(!empty($_POST['name'])){
  echo $_POST['name'];
}

if (isset($_FILES["photoimg"])) {
  move_uploaded_file($_FILES["photoimg"]["tmp_name"],
    "../pics/" . $_FILES["photoimg"]["name"]);
  //$return = ($_FILES["photoimg"]);
  //echo $return;
}

?>

<html>

<style>
#progressOverlay .progress {
  position:relative;
  width:80%;
  top:50%;
  margin:0 auto;
  background-color: black;
}

#progressOverlay {
  position:relative;
  height:100%;
}
</style>

<script src="../js/jquery.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/register_validation.js"></script>
<body>

  <!--
  <form class="form-vertical" enctype="multipart/form-data" id="signupForm" action="ajaxTest.php" method="POST">
    <input id="file" type="file" name="file" >
    <input id="name" name="name" type="text" >
    <button type="submit" name="submit" id="submit" value="Search" class="btn btn-primary">Ajd</button>
  </form>
  <progress min="0" max="100" value="0">0% complete</progress>
  <div id="log">
  </div>-->
  <progress min="0" max="100" value="0">0% complete</progress>
  <form id="imageform" method="post" enctype="multipart/form-data" action="ajaxTest.php">
    <div id="uploadBox" class="well" onClick="$('#photoimg').click();">
      <H2>Click to Upload</H2>
    </div>
    <input type="file" class="hide" name="photoimg" id="photoimg" />
    <input id="username" name="username" type="text" >
     <button type="submit" name="submit" id="submit" value="Search" class="btn btn-primary" onchange="$(this.form).submit();">Ajd</button>
  </form>

  <div id="log">
  </div>

</body> 
</html>


<script>
var progressBar = document.querySelector('progress');
$('#imageform').ajaxForm( {
  dataType : 'json',
  beforeSubmit: function() {
    $(this).addClass('loading');
        //$('#uploadBox').html('<div id="progressOverlay"><div class="progress progress-striped"><div class="bar" id="progressBar" style="width: 0%;">0%</div></div></div>');
      },
      uploadProgress: function ( event, position, total, percentComplete ) {
        if (percentComplete == 100) {
         progressBar.value = percentComplete;
         progressBar.textContent = progressBar.value;
       } else {
         progressBar.value = percentComplete ;
         progressBar.textContent = progressBar.value;
       }
     },
     success : function ( data ) {
      $("#log").html(data);
    }
  });

/*$('#signupForm').ajaxForm( {
    dataType : 'json',
    
    uploadProgress: function ( event, position, total, percentComplete ) {
        if (percentComplete == 100) {
            $('progressr').css('width',percentComplete+'%').html('Processing...');
        } else {
            $('progress').css('width',percentComplete+'%').html(percentComplete+'%');
        }
    },
    success : function(data) {
      $('#log').append(data);
    }
  });*/


</script>

<!--<script>
$('#submit').click( function(event) {
  event.preventDefault();

  $('#signupForm').click( function(event) {
    event.preventDefault();
  });


  var data = new FormData();
  jQuery.each($('#file')[0].files, function(i, file) {
    data.append('file', file);
  });

  $.ajax({
    url: 'ajaxTest.php',
    data: data,
    cache: false,
    contentType: false,
    processData: false,
    type: 'POST',
    success: function(data) {
      $('#data').append(data);
    }
  });
});
</script>-->


