<?php

 session_start();

if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:error.php');
    exit;
}



if (isset($_POST['submit'])) {


$servername = "localhost";
$username = "root";
$password = "Dd929659761";
$dbname = "overlap";
$conn = new mysqli($servername, $username, $password, $dbname);


$name = $conn -> real_escape_string($_POST["user"]);
$pwd = $conn -> real_escape_string($_POST["pass"]);


if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);}


$sql = "SELECT user_id, password, tag, profile_img from users WHERE username = '$name'";
$result = $conn->query($sql);




if ($return = mysqli_fetch_array($result))  /*  if anything returned, its known correct user, password found */
     {
		$hashinput = $pwd;  /* Hence find the hash of input password*/
		$hashpass = $return['password']; /*the password is already hashed in the database */
		$id = $return['user_id'];
		$_SESSION['photo'] = $return['profile_img'];
		$taging = $return['tag'];
		
	     /*this section finds list of user friends from database */
			$friendquery = "SELECT session_id, friend_name from friends WHERE user_id = '$id'";
			$list = $conn->query($friendquery);
			$_SESSION['sessionid']=array();
			$_SESSION['friendnames']=array();
			while ($friendlist = mysqli_fetch_assoc($list)) {
			 array_push($_SESSION['sessionid'], $friendlist['session_id']);
			 array_push($_SESSION['friendnames'], $friendlist['friend_name']);
		 }
		 
		 /*end section find friend_id*/
		 
		 
		 
		 
		 /* section to retrieve and pair user */   
						//in theory would take out user already friendlisted, ok for now 
		$que = "SELECT username, tag from users where username <> '$name'"; 
		$tagresult = $conn->query($que);
		$pairname="";
		$highest="";
		while ($usertags = mysqli_fetch_assoc($tagresult)) {      //compare matching percentage with every user tags in the database 
			
			similar_text($usertags['tag'], $taging, $percent);
			 if ($percent > $highest  ) {
				 $pairname=$usertags['username']; 
				 $highest = $percent;
			 }
		 }
		$_SESSION['match']=$percent;  
			$_SESSION['pairwith']=$pairname;
		 
		
		 /* end of pairing algorithms */
		
		var_dump($hashinput);
		var_dump($hashpass);
		
		$compare = strcmp($hashinput, $hashpass);
		
		if ($compare == 0) {
			
			$_SESSION['userid'] = "$id"; /*this passes the user id to next page*/
			$_SESSION['user_name'] = "$name"; /*this passes the user name of current logged user*/








			header('location: home.php');
			exit();
		
		} 
     }  else {
		 
		 
		 /*Case of incoorect password*/
		 
		echo '<script type="text/javascript">   

          window.onload = function () { alert("Invalid Username and Password"); }

		</script>';
	 }		 
	 
	 

	 
	 
	 
	 
$conn->close();
}



?>

