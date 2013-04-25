$(document).ready(function (){

//switching between inside tabs
$('#register_signin a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});

//seting active tab in navbar
$('.nav-tabs').children().first().addClass('active');

$('*').tooltip({placement: 'right'});


//style the file input buttons on both forms
$("#studentsignupprofilePicture").filestyle({
	buttonText: 'Profile Picture',
	textField: true,
	classButton: 'btn-primary',
	classText: 'input-medium'
});

$("#professorsignupprofilePicture").filestyle({
	buttonText: 'Profile Picture',
	textField: true,
	classButton: 'btn-primary',
	classText: 'input-medium'
});
//end of input button style

//analyses input and provides feedback
$('input').on('input',function (e) {

	var triggerId=event.target.id;

	if(triggerId.indexOf("signup")<=0 )
		return;

	var elementToValidate=triggerId.substring(triggerId.indexOf("signup")+6, triggerId.length);
	var value=event.target.value;
	switch (elementToValidate){
		case "Password":
		if(value.length>=6){
			validate(triggerId);
		}
		else{
			invalidate(triggerId);
		}
		break;

		case "Username":
		if(value.length>=6){
			validate(triggerId);
		}
		else{
			invalidate(triggerId);
		}
		break;
		case "Email":
		console.log(triggerId);
		if(triggerId.indexOf("student")>=0){
			var pattern=new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)\\b");
			if(String(value).match(pattern)){
				validate(triggerId);
			}
			else{
				invalidate(triggerId);
			}
		}
		else if(triggerId.indexOf("professor")>=0){
			var pattern=new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@edu.ba$");
			if(String(value).match(pattern)){
				validate(triggerId);
			}
			else{
				invalidate(triggerId);
			}
		}
		break;

		case "PasswordRepeat":
		var passwordId="#"+triggerId.substring(0,triggerId.indexOf("Repeat"));
		console.log("Original pass: "+$(passwordId).val());
		if( (value) == ( $(passwordId).val() ) ){
			validate(triggerId);
		}
		else{
			invalidate(triggerId);
		}
		break;

		default:
		break;

	}
	//set the image next to the input box
	function validate(element){
		console.log("is called validate");
		var id='#'+element+'Validator';
		console.log(id);
		$(id).attr('src', './pics/icons/valid.png');
		$(id).parent().parent().removeClass("error");
	}

	function invalidate(element){
		console.log("is called invalidate");
		var id='#'+element+'Validator';
		$(id).attr('src', './pics/icons/invalid.png');
		$(id).parent().parent().addClass("error");	
	}

});
//end of input analyze

//ajax form handlers
$('#studentsignup').ajaxForm( {
	dataType : 'json',
	error:function(request, json ){
		errorHandler("studentsignup");
	},

	uploadProgress: function (event, position, total,  percentComplete ) {

		uploadInProgressHandler("studentsignup", percentComplete);

	},
	success : function  (data) {
		successHandler("studentsignup", data);
	}
});

$('#professorsignup').ajaxForm( {
	dataType : 'json',
	error:function(request, json ){
		errorHandler("studentsignup");
	},

	uploadProgress: function (event, position, total,  percentComplete ) {

		uploadInProgressHandler("studentsignup", percentComplete);

	},
	success : function  (data) {
		successHandler("studentsignup", data);
	}
});

});

function errorHandler(){
	var alertId="#"+formId+"Alert";
	$(alertId).removeClass();
	$(alertId).addClass('alert alert-error');
	$(alertId).html("There has been an unexpected problem.</br> Try again later.</br> If this problem persists email us at:</br> example@example.com");
}

function uploadInProgressHandler(formId, percentComplete){
	var barId="#"+formId+"bar";
	$(barId).css('width',percentComplete+'%').html(percentComplete+'%');
}

function successHandler(formId, data){
	var alertId="#"+formId+"Alert";
	if(data["error"]){
		$(alertId).removeClass();
		$(alertId).addClass('alert alert-error');
		$(alertId).html("There has been a problem: </br>"+data["error"]+"</br>");
	}
	else{
		$(alertId).removeClass();
		$(alertId).addClass('alert alert-success');
		$(alertId).html("You have successfuly created an account.</br> Activate Your account via email.\n");
	}
}


