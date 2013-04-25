<?php
/**
*generates one of the predefined forms for sign in/sign up
* @param $user string student or professor
* @param $type string Sign up or Sign in
* @param $action string the php file to hadndle the request e.g. upload.php
*
* @return $string containing the html code pf the form
*/

function getForm($user, $type, $action){

	$id=$user.$type;
	if($type==="signin"){
		$html_output="<form class=\"form-vertical\" action=\"".$action."\" id=\"".$id."\" method=\"POST\">
						<fieldset>
							 <legend>Sign in for ".ucfirst($user)."</legend>
							 <div class=\"alert hidden\" id=\"".$id."Alert\">
							</div>
							<div class=\"control-group\">
								<!-- Username -->
								<div class=\"controls\">
									<input type=\"text\" id=\"".$id."Username\" name=\"".$id."Username\" placeholder=\"username\" class=\"input-xlarge\" >
								</div>
							</div>

							<div class=\"control-group\">
								<!-- Password-->
								<div class=\"controls\">
									<input type=\"password\" id=\"".$id."Password\" name=\"".$id."Password\" placeholder=\"password\" class=\"input-xlarge\">
								</div>
							</div>

							<div class=\"control-group\">
								<!-- Button -->
								<div class=\"controls\">
									<button class=\"btn btn-primary\">Login</button>
								</div>
							</div>
							<input type='text' id=\"".$id."Type\" value='student' name=\"".$id."Type\" readonly style=\"display: none\" />
						</fieldset>
					</form> ";

		return $html_output;
	}

if($type=== "signup"){
	$html_output="	<form class=\"form-vertical\" enctype=\"multipart/form-data\" method=\"post\" id=\"".$id."\" action=\"".$action."\">
						<fieldset>
							<legend>Sign up for ".ucfirst($user)."</legend>
							<div class=\"alert hidden\" id=\"".$id."Alert\">
							</div>
							<div class=\"control-group\">
								<!-- Username -->
								<div class=\"controls\">
									<input type=\"text\" id=\"".$id."Username\" name=\"".$id."Username\" placeholder=\"username\" class=\"input-xlarge\"
									data-toggle=\"popover\" title=\"\" data-original-title=\"Your username has to be at least 6 characters long\" />
									<img  class=\"validator_icon\" id=\"".$id."UsernameValidator\"/>
								</div>
							</div>

							<div class=\"control-group\">
								<!-- Password-->
								<div class=\"controls\">
									<input type=\"password\" id=\"".$id."Password\" name=\"".$id."Password\" placeholder=\"password\" class=\"input-xlarge\"
									data-toggle=\"popover\" title=\"\" data-original-title=\"Your password has to be at least 6 characters long\" />
									<img  class=\"validator_icon\" id=\"".$id."PasswordValidator\"/>
								</div>
							</div>

							<div class=\"control-group\">
								<!-- Password-->
								<div class=\"controls\">
									<input type=\"password\" id=\"".$id."PasswordRepeat\" name=\"".$id."PasswordRepeat\" placeholder=\"password\" class=\"input-xlarge\"
									data-toggle=\"popover\" title=\"\" data-original-title=\"Passwords have to match\" />
									<img  class=\"validator_icon\" id=\"".$id."PasswordRepeatValidator\"/>
								</div>
							</div>

							<div class=\"control-group\">
								<!-- email -->
								<div class=\"controls\">
									<input type=\"text\" id=\"".$id."Email\" name=\"".$id."Email\" placeholder=\"email\" class=\"input-xlarge\"
									 title=\"\" data-original-title=\"We will use this email to verify your account\"/>
									 <img  class=\"validator_icon\" id=\"".$id."EmailValidator\"/>
								</div>
							</div>

							<div class=\"control-group\">
								<!-- image -->
								<div class=\"controls\">
									<input type=\"file\" id=\"".$id."profilePicture\" name=\"".$id."profilePicture\" class=\"input-xlarge\"
									 title=\"\" data-original-title=\"Only .jpg and .png files\" />
									 <img  class=\"validator_icon\" id=\"profilePictureValidator\"/>
								</div>
							</div>
							<div class=\"progress progress-striped active\">
 								 <div class=\"bar\" id=\"".$id."bar\" style=\"width: 0%;\">0%</div>
							</div>
							
							<div class=\"control-group\">
								<!-- Button -->
								<div class=\"controls\">
									<button id=\"registerButton\" class=\"btn btn-primary\"  >Sign up</button>
								</div>
							</div>
							<input type='text' id=\"".$id."Type\" name=\"".$id."Type\" value='student' readonly style=\"display: none\" />
						</fieldset>
					</form> ";
					return $html_output;
}


}

?>