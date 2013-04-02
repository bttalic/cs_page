$(document).ready(function(){
	$('#terminalInput').keypress(function(e){
		if(e.keyCode==13){
		var command=$('#terminalInput').val();
			command=command.substring(command.indexOf(" ")+1, command.length);
		var newOut="=> "+$('#output').val()+ command+"</br>";
		
			$('#output').append( newOut );
		
		command=command.toLowerCase();
		command=command.replace(/ /g, "_");
		if(isPage(command)){
			window.location="/cs_page/index.php";
		}
		else{
		var command=$('#terminalInput').val();
			command=command.substring(command.indexOf(" ")+1, command.length);
			 newOut=$('#output').val()+"Hello, "+ command+"</br>";
			 $('#output').append( newOut );
		}
		$('#terminalInput').val("$ ");
  
  var data = command.toString();
    var url = "/cs_page/js/userjs/user.js";//your url to the server side file that will receive the data.
    /*
	
	var xmlhttp;
if(window.XMLHttpRequest){

	xmlhttp=new XMLHttpRequest();

}else{

	xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');

}

xmlhttp.open('POST', '/cs_page/test.php', true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("script="+data);

$.getScript("js/user.js", function(){
 document.getElementById("myDiv").innerHTML= add();
});
*/
	}
});
		
	function isPage(page){
		var pages=["project_course", "index"]
		for(var i=0; i<pages.length; i++)
			if(page==pages[i])
				return true;

			return false;

		}
	


	});

