$(document).ready(function(){
	$('#terminalInput').keypress(function(e){
		if(e.keyCode==13){
		var command=$('#terminalInput').val();
			command=command.substring(command.indexOf(" ")+1, command.length);
		var newOut="=> "+$('#output').val()+ command+"</br>";
		
			$('#output').append( newOut );
		}
		command=command.toLowerCase();
		command=command.replace(/ /g, "_");
		if(isPage(command)){
			window.location="/cs_page/index.php";
		}
		else{
			 newOut=$('#output').val()+"Hello, "+ $('#terminalInput').val()+"</br>";
			 $('#output').append( newOut );
		}
		$('#terminalInput').val("$ ");
	});
	function isPage(page){
		var pages=["project_course", "index"]
		for(var i=0; i<pages.length; i++)
			if(page==pages[i])
				return true;

			return false;

		}
	});
