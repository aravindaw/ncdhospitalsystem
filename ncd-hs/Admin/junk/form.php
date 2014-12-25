<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="../View/css/view.css" media="all">
<script type="text/javascript" src="../View/js/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Untitled Form</a></h1>
                <form id="form_633833" class="appnitro" enctype="multipart/form-data" method="post" action="../controller/user.php">
					<div class="form_description">
			<h2>Untitled Form</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_8" >
		<label class="description" for="element_8">Name </label>
		<span>
			<input id="fname" name= "fname" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="sname" name= "sname" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">User Name </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Password </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_3"><small>Cannot be Empty
</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Confirm Password </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Role </label>
		<div>
		<select class="element select medium" id="element_7" name="element_7"> 
			<option value="" selected="selected"></option>
<option value="1" >Admin</option>
<option value="2" >Support Agent</option>
<option value="3" >Shift Lead</option>

		</select>
		</div><p class="guidelines" id="guide_7"><small>Select a User role</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Email </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Enter contact email</small></p> 
		</li>	<li id="li_3" >
		<label class="description" for="element_3">Phone </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>
</
		</li>	
                <li id="li_6" >
		<label class="description" for="element_6">Upload an image </label>
		<div>
			<input id="element_6" name="element_6" class="element file" type="file"/> 
		</div> <p class="guidelines" id="guide_6"><small>Upload an image of the user</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="633833" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>