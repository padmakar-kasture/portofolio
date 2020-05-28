
<!DOCTYPE html>
<html>
<head>
	<title>signup form</title>
	<style>
		body{
			color: white;
			background-color: rgba(0,0,0,0.6);
		}


.signup:active{
	transform:translate(5px);
}.signup{
     border-color: red;

		border-radius: 50px;
	height: 30px; 
	width: 150px;
	margin-top: 10px;
background-color: red;
border-bottom-color: red;

}
		.formsection{
			
			margin-left: 35%;
		}
		.field:active{
	border-color: black;
}
*:focus{
	outline: none;
}
		.form{
	
	width: 300px;
	border-radius: 50px;
	background: black;
 
   text-align: center;
   padding: 80px;

	
}
.field:active{
	background-color: black;
}
.field{

	color: white;	 
	background-color: black;
	border-color: black;
	border-bottom-color: green;
    height: 30px;
    width: 200px;
	border-radius: 50px;
	text-align: center;

}

	</style>
</head>
<body>
<section class="formsection">
	<div class="form">
	<form action="form-submit.php" method="post">
	
		<input required="" type="text" class="field" placeholder="FIRSTNAME" name="firstname"> <br><br>
		
		<input type="text" class="field" placeholder="LASTNAME" required="" name="lastname"><br><br>
	
		<input type="textarea" class="field" placeholder="ADDRESS" required="" name="address"><br><br>
		
		<input type="radio" name="gender" value="male" required> MALE <br>
		<input type="radio" name="gender" value="female" required>FEMALE<br>
		<input type="radio" name="gender" value="other" required>OTHER <br>
       
        <select class="field" name="department" value="IT" required>
        	
        	<option value="IT"  required>IT</option>
        	<option value="CSE" required>CSE</option>
        	<option value="EXTC" required>EXTC</option>
        	<option value="INSTRU" required>INSTRU</option>
        </select> <br><br>
     
       <input type="email" placeholder="MAIL" class="field" required=""  name="mail"> <br><br>
         <input type="tel" placeholder="MOBILE" class="field"  name="phone"> <br><br>
        HANDICAP:
        <br>YES<input type="radio"    name="handicap" value="yes" required ><br>
        NO <input type="radio"   name="handicap" value="no" required> <br><br>
     <input type="date" placeholder="enter dob" class="field"  name="dob" required> <br><br>
    
    
  <input type="submit" class="signup" name="submit" value="submit">
	</form>
	</div>
</section>
</body>
</html>
