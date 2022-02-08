<?php 
	
	session_start();
	include 'db.php';
	$id = $_SESSION['userid'];
	$sid =  (int)$_COOKIE["fid"];
	$query = "SELECT * FROM chat where session_id = $sid ORDER BY orders ASC";
	$userprofile='../users/default.jpg';
	$friendprofile='../users/default1.jpg';

	$run = $con->query($query);
	while($row = $run->fetch_array()) :
		if ($row['user_id'] != $id) {
			
		/*if the row is not the logged user's msg */
		echo ' 
		
			<div id="chat_data">
					
				<li>
				<div class="answerHead"> <img src=" '. $friendprofile .' "/></div> 
				<div class="answers"> '. $row['message'] .' </div>
				<li>
				
			</div>
		
		
		';
		
		
		
			
			
		
		
		} else {
			echo ' 
			
				<div id="chat_data">
					
				<li>
				<div class="nesHead"> <img src=" '. $userprofile .' "/></div> 
				<div class="news"> '. $row['message'] .' </div>
				<li>
				
			</div>
			
			';
			
			
		}
		
		?>
		
		
		<!-- add catch statement here distinguish user or friend-->
		
			<?php endwhile;?>