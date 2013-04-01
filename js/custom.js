$(document).ready(function(){
	$('#terminalInput').keypress(function(e){
		if(e.keyCode==13){
			var newOut=$('#output').val()+ $('#terminalInput').val()+"</br>";
			var command=$('#terminalInput').val();
			$('#terminalInput').val("$ ");
			$('#output').append( newOut );
		}
		command=command.toLowerCase();
		command=command.substring(command.indexOf(" ")+1, command.length);
		command=command.replace(/ /g, "_");
		if(isPage(command)){
			window.location="http://localhost:8080/cs_page/sites/index.php";
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
