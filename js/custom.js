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
			window.location="/index.php";
		}
		else{
			 newOut=$('#output').val()+"Hello, "+ $('#terminalInput').val()+"</br>";
			 $('#output').append( newOut );
		}
		$('#terminalInput').val("$ ");
		
			$.ajax({
  type: 'POST',
  url: "/js/userjs/user.js",
  data: "<script> alert(\"test\")<\\script>",
  dataType: "text"
});
		
	});
	function isPage(page){
		var pages=["project_course", "index"]
		for(var i=0; i<pages.length; i++)
			if(page==pages[i])
				return true;

			return false;

		}
	


	});

