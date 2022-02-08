
<?php

include 'regi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Overlap</title>
    <link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		
		<script>
			$(document).ready(function() {
				//opening forgot password panel
				$("#forgot").click(function() {
					$("#regist_container").hide();
					$("#_close").show();
					$("#_start").animate({
						left: '350px',
						height: '720px',
						width: '100%'
					}, 500, function() {
						$("#forgot_container").show(500);
						$("#_close").animate({
							height: '40px',
							width: '40px'
						}, 500);
					});
				});
				//opening user registration panel
				$("#register").click(function() {
					$("#forgot_container").hide();
					$("#_close").show();
					$("#_start").animate({
						left: '350px',
						height: '720px',
						width: '100%'
					}, 500, function() {
						$("#regist_container").show(500);
						$("#_close").animate({
							height: '40px',
							width: '40px'
						}, 500);
					});
				});
				//close panels
				$("#_close").click(function() {
					
					$("#_close").animate({
						height: '0px',
						width: '0px'
					}, 500, function() {
						$("#_close").hide(500);
						$("#forgot_container").hide(500);
						$("#regist_container").hide(500);
						$("#_start").animate({
							left: '0px',
							height: '0px',
							width: '0px'
						}, 500);
					});
				});
		
			});
		</script>
</head>

<body class="loading">
<div id="screen" >
    <div id="mark">
        <div class="layer" data-depth="0.4">
            <img src="images/welcome-cover.jpeg" id="cover" crossorigin="anonymous" width="1920" height="1080">  <!--cover page-->
        </div> 
    </div>
	
    <div id="vibrant">
        <svg viewBox="0 0 2880 1620" height="100%" preserveAspectRatio="xMaxYMax slice">
            <polygon opacity="0.7" points="2100,1620 0,1620 0,0 900,0 "/>
        </svg>
        <div></div>
    </div>
	
	<div style="background-color:transparent; z-index:999999999; margin:auto auto auto 18%; width:64%; height:100px; top:10%; position:fixed;">
	<div id='_start'>
			<div id='_close' style="display: none;">
				<span class="glyphicon glyphicon-remove"></span> <!--close icon-->
			</div>
			<br /> 
			<!--Forgot Password Container -->
			<div id="forgot_container">
			
				
				<div id="form_inputs">
				<h1>Password Reset</h1>
					<br />
						Please provide us the email addres used for the account: <br> 
					    <input id="email" type="email" name="email" placeholder="Email"> <br>
						<input type="email_auth" class="form-control" placeholder="Email Authentication Code" id="regist_vcode" />
			<!--input or button?--> <input id="getVCode" type="button" class="btn btn-success" value="Verify Email" onclick="sendCode(this)" /> <br>
					
				<!-- replace with 'next' button --><input type="button" value="" class="btn btn-success" id="login_btn" />
					
			
				</div>

				<div style="display:block;width:330px;height：40px;">
					<span id="lab_type2"></span>
				</div>
			
			</div>
			
			<!--catch statement email not found-->
			<!--ask for email -> which of the following is your username -> password, confirm -> thank you -->
			
			
			
			
			<!-- Registration Container -->
			<div id='regist_container' style="display: none;">
	
			<div id="form_inputs"> 
			<h1>User Registration</h1>
      

		
<form id="regForm" action="login.php" method="POST">



<!-- One "tab" for each step in the form: -->
<div class="tab"><h1>Login Info:</h1>
  <p><input style="color:black;" placeholder="Username" name="rusername" oninput="this.className = ''"></p>
  <p><input style="color:black;" placeholder="Password" name="rpassword" oninput="this.className = ''"></p>
</div>

<div class="tab"><h1>Contact Info:</h1>
  <p><input style="color:black;" placeholder="E-mail" name="remail" oninput="this.className = ''"></p>
</div>

<div class="tab"><h1>Birthday:</h1>
  <p><input style="color:black;" placeholder="Date" name="rdate" oninput="this.className = ''"></p>
  <p><input style="color:black;" placeholder="Month" name="rmonth" oninput="this.className = ''"></p>
  <p><input style="color:black;" placeholder="Year" name="ryear" oninput="this.className = ''"></p>
</div>

<div class="tab"><h3>Help us discover your friends:</h3><p style="color:grey;">(click to select your interests)</p>
<div style="width:200%; height:300px; margin-left:-50%;background-color:transparent; overflow:scroll;">
	
	
	<div class="interests" id="001"> <p style="line-height: 15px;color:gray;"> <input id="check1" name="checks[]" style="" type="checkbox" value="a" /> <label for="check1">Recreational Reading <img src="images/interest1.jpg"> </label></div>
	<div class="interests" id="002"> <p style="line-height: 15px;color:gray;"> <input id="check2" name="checks[]" style="" type="checkbox" value="b"/> <label for="check2">Baking & Cooking</p><img src="images/interest2.jpg"></label></div>
	<div class="interests" id="003"> <p style="line-height: 15px;color:gray;"> <input id="check3" name="checks[]" style="" type="checkbox" value="c"/> <label for="check3">Technology</p><img src="images/interest3.jpg"></label></div>
	<div class="interests" id="004"> <p style="line-height: 15px;color:gray;"> <input id="check4" name="checks[]" style="" type="checkbox" value="d"/> <label for="check4">Movies & Shows</p><img src="images/interest4.jpg"></label></div>
	<div class="interests" id="005"> <p style="line-height: 15px;color:gray;"> <input id="check5" name="checks[]" style="" type="checkbox" value="e"/> <label for="check5">Exercise & Cycling</p><img src="images/interest5.jpg"></label></div>
	<div class="interests" id="006"> <p style="line-height: 15px;color:gray;"> <input id="check6" name="checks[]" style="" type="checkbox" value="f"/> <label for="check6">Travling & Tourism</p><img src="images/interest6.jpg"></label></div>
	<div class="interests" id="007"> <p style="line-height: 15px;color:gray;"> <input id="check7" name="checks[]" style="" type="checkbox" value="g"/> <label for="check7">Music</p><img src="images/interest7.jpg"></label></div>
	<div class="interests" id="008"> <p style="line-height: 15px;color:gray;"> <input id="check8" name="checks[]" style="" type="checkbox" value="h"/> <label for="check8">Pets</p><img src="images/interest8.jpg"></label></div>
	<div class="interests" id="009"><p style="line-height: 15px;color:gray;"> <input id="check9" name="checks[]" style="" type="checkbox" value="i"/> <label for="check9">Gardening</p> <img src="images/interest9.jpg"></label></div>
	<div class="interests" id="010"> <p style="line-height: 15px;color:gray;"> <input id="check10" name="checks[]" style="" type="checkbox" value="j"/> <label for="check10">Arts & Crafts</p><img src="images/interest10.jpg"></label></div>
	
</div>


<input id="tags" type="submit" name="submit" style="background-color:red;" />

<script>



 $('#010').on('click', function() {
		$('#010').css('border', '2px solid #748db5');
		
		});

 $('#001').on('click', function() {
		$('#001').css('border', '2px solid #748db5');
		
		});
		
$('#002').on('click', function() {
		$('#002').css('border', '2px solid #748db5');
		
		});
		
$('#003').on('click', function() {
		$('#003').css('border', '2px solid #748db5');
		});
		
 $('#004').on('click', function() {
		$('#004').css('border', '2px solid #748db5');

		});
		


$('#005').on('click', function() {
		$('#005').css('border', '2px solid #748db5');
	
		});
		
			$('#006').on('click', function() {
		$('#006').css('border', '2px solid #748db5');

		});
		
		$('#007').on('click', function() {
		$('#007').css('border', '2px solid #748db5');
		
		});

		
		$('#008').on('click', function() {
		$('#008').css('border', '2px solid #748db5');

		});
		
		$('#009').on('click', function() {
		$('#009').css('border', '2px solid #748db5');
	
		});
		
</script>


</div>

<div style="overflow:auto;">
  <div style="float:center;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
	

<?php


if(isset($_POST['submit'])){ 
		
		
		
		$rusername = $_POST["rusername"];
		$rpassword = $_POST["rpassword"];
		$remail = $_POST["remail"];
		$rdate = $_POST["rdate"];
		$rmonth = $_POST["rmonth"];
		$ryear = $_POST["ryear"];
		
   
	
	$checkbox1=$_POST['checks'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."";  
   }  
	$rtag = $chk;
		
		$haha = "Insert INTO users (user_id,username, password, email, dob, tag, status,exist, profile_img, quote, total_post, total_comment, paired, verifycode) VALUES (NULL,'$rusername', '$rpassword', '$remail', null, '$rtag', 1,1,'users/default.jpg', 'Nice Weather', 0,0,5,NULL)"; 		
		
		
	
		$run = $con->query($haha);
	
		}

		echo '<script type="text/javascript">alert("Successfully Registered");</script>';
?>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
	document.getElementById("prevBtn").style.display = "none";
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>
     

   
			</div>
			</div>
		</div>




	</div>

    <div id="post0" class="Login_section" > <!--login section-->
    <!--testing start -->
	
    <img src="images/Overlap.png" > <!--the logo caligraphy for placeholder, we should decide on a better looking one haha!-->
    <form class="Logins" action="verify.php" method="post"> <!--verify.php for authentication and email verification-->
        <div class="Login_row">
            <input name="user" type="text" value="" class="Login_input icon1" placeholder="Username" />
        </div> 
        <div class="Login_row">
            <input name="pass" type="password" value="" class="Login_input icon2" placeholder="Password" />
        </div> 
		<input  type="submit"  name="submit" class="Login_submit" value="Login"/> 

        

        <div class="Login_wj fr">
        	<a id="forgot" href="#">Forgot Password</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a id="register" href="#">Register Account</a> 
		

        </div>

		<div class="clear"></div>

   </form>
   		<div class="Guests">
		<a href="#">--------Continue as Guest--------   </a>
		</div>		
    <!--end of login section-->
    </div>
</div>

  
    

<div id="preview"></div> <!-- a must have for formatting issue-->

<!--external javascripts responsible for image swipe-->
<script src="//lib.baomitu.com/jquery/1.8.3/jquery.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/login.js"></script>




</html>
