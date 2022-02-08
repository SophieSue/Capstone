<?php
session_start();
$name = $_SESSION['user_name'];
$id = $_SESSION['userid'];
$session_id = null;
$friend_name = null;
foreach ($_SESSION['sessionid'] as $value) {
    $session_id = $session_id . $value;
}
foreach ($_SESSION['friendnames'] as $value) {
    $friend_name = $friend_name . $value;
}


$userprofile='users/default.jpg';
$friendprofile='users/default1.jpg';
	

/* session variable just for now, it will be updated throughout*/ 
include 'db.php';
?>
<html>
<head>
<meta charset="UTF-8">
<title>Chat Room</title>

<link rel="stylesheet" type="text/css" href="../css/qq.css"/>
<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
		
		
		
		
	
		
	</script>
	
	 <script type="text/javascript">

			

			
        </script>
</head>

<body onload="ajax();" style="overflow:hidden;">

<div class="chatroomBox">
	
	<div class="context">
		<div class="conLeft" >
		<div class="chatprofile" >

		<div style="margin: 20px auto auto auto;height:135px; width:135px; border-radius:50%; background-color:black;clear:both;border: 1px solid black;"> </div> 
		
		
		<?php 
		$msg = $name . "'s" . " chat room";
		echo' 
		<div class="pname"><p> ' .$msg . '</p></div>
		';
		?>
		
	</div>
	
	<div style="height:230px;"> </div>
		
				<ul>
<?php 



for ($i = 0;$i < count($_SESSION['friendnames']);$i++) {
    $temp = $_SESSION['friendnames'][$i];
	$fid= $_SESSION['sessionid'][$i];
    echo '
	
					<li class="bg" id="'. $fid . '">
					<div class="liLeft"><img src="../img/20170926103645_19.jpg"/></div>
					<div class="liRight">
						<span  class="intername">' . $temp . '</span>
					</div>
				</li>
	
	';
	
}



?>

		

			</ul>
		

			
			
			
			
		</div>
		<div class="conRight">
			<div class="roomhead">
				<div class="headName"></div>

	 
	 <!--buttons for theme colors-->
		
	
	
	 <div class="hcolors" style=" width:210px; height: 20px; float:right; margin:11px auto 100px auto;">
	 	<div id="hwhite" style="border-radius:50%; float:right;height:15px; width:15px; background-color:white; cursor:pointer;margin: 0 10px 0 0;"></div>
		<div id="hpink" style="border-radius:50%; float:right;height:15px; width:15px; background-color:#f5c3f7; cursor:pointer;margin: 0 10px 0 0;"></div>
		<div id="hred" style="border-radius:50%; float:right;height:15px; width:15px; background-color:#fa7878; cursor:pointer; margin: 0 10px 0 0;"></div>
		<div id="hbrown" style="border-radius:50%; float:right;height:15px; width:15px; background-color:#c7b285; cursor:pointer; margin: 0 10px 0 0;"></div>
		<div id="hyellow" style="border-radius:50%; float:right;height:15px; width:15px; background-color:#fffea8; cursor:pointer;margin: 0 10px 0 0;"></div>
		<div id="hgreen" style="border-radius:50%; float:right;height:15px; width:15px; background-color:#cef0d7; cursor:pointer;margin: 0 10px 0 0;"></div>
		<div id="hblue" style="border-radius:50%; float:right;height:15px; width:15px; background-color:#94b8f2; cursor:pointer;margin: 0 10px 0 0;"></div>
		<div id="hblack" style="border-radius:50%; float:right;height:15px; width:15px; background-color:black; cursor:pointer;margin: 0 10px 0 0;"></div>
	
	</div>


	

			</div>
			<div class="RightCont room">
				
				<ul>
				<div id="chat">
	<!--this is the section that chats are inserted--> 
			
				
				<div class="nesHead"><img src="img/6.jpg"/></div>
				<div class="news"><img class="jiao" src="img/20170926103645_03_02.jpg"> hahahaa</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		<!--end of where chats are inserted -->
					  </div>
					<ul>
				
			</div>
			<div class="RightFoot">
				<div class="emjon">
					<ul>
						<li><img src="../img/em_02.jpg"/></li>
						<li><img src="../img/em_05.jpg"/></li>
						<li><img src="../img/em_07.jpg"/></li>
						<li><img src="../img/em_12.jpg"/></li>
						<li><img src="../img/em_14.jpg"/></li>
						<li><img src="../img/em_16.jpg"/></li>
						<li><img src="../img/em_20.jpg"/></li>
						<li><img src="../img/em_23.jpg"/></li>
						<li><img src="../img/em_25.jpg"/></li>
						<li><img src="../img/em_30.jpg"/></li>
						<li><img src="../img/em_31.jpg"/></li>
						<li><img src="../img/em_33.jpg"/></li>
						<li><img src="../img/em_37.jpg"/></li>
						<li><img src="../img/em_38.jpg"/></li>
						<li><img src="../img/em_40.jpg"/></li>
						<li><img src="../img/em_45.jpg"/></li>
						<li><img src="../img/em_47.jpg"/></li>
						<li><img src="../img/em_48.jpg"/></li>
						<li><img src="../img/em_52.jpg"/></li>
						<li><img src="../img/em_54.jpg"/></li>
						<li><img src="../img/em_55.jpg"/></li>
					</ul>
				</div>
				<div class="footTop">
					<ul>
						<li><img src="../img/20170926103645_31.jpg"/></li>
						<li class="ExP"><img src="../img/20170926103645_33.jpg"/></li>
						<li><img src="../img/20170926103645_35.jpg"/></li>
						<li><img src="../img/20170926103645_37.jpg"/></li>
						<li><img src="../img/20170926103645_39.jpg"/></li>
						<li><img src="../img/20170926103645_41.jpg" alt="" /></li>
						<li><img src="../img/20170926103645_43.jpg"/></li>
						<li><img src="../img/20170926103645_45.jpg"/></li>
					</ul>
				</div>
				
				
				<form method="post" action="chatroom.php">
				<div class="inputBox"> 
		<textarea name="msg" class="ta" placeholder=""></textarea>
		<input type="submit" name="submit" class="sendBtn" value="Send"/>
		</div>
		</form>
		
				<?php 
				
		if(isset($_POST['submit'])){ 
		
		$session =  (int)$_COOKIE["fid"];
		
		
		$msg = $_POST['msg'];
		
		
		$query = "INSERT INTO chat (session_id,user_id,message) values ('$session','$id','$msg')";
		
		$run = $con->query($query);
		
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}
		
		
		}
		?>
				
				
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" > 	$('.conLeft li').on('click',function(e){
		$(this).addClass('bg').siblings().removeClass('bg');
		var intername=$(this).children('.liRight').children('.intername').text();
		$('.headName').text(intername);
		$('.newsList').html('');
		 var fid = e.target.id;
		 document.cookie = "fid="+fid;
		// window.location.href="chatroom.php?data="+fid;
	
	});
	</script>


 <script>
	

		$('#hgreen').on('click', function() {
		$('.room').css('background-image','url(background/green.jpg)');
		$('.conLeft').css('background-image','url(background/green.jpg)');
		$('.pname').css('color','#4b5e7a');
		$('.roomhead').css('background-color','rgb(113,127,130)');
		$('.sendBtn').css('background','#9fc4ac');
		$('.ta').css('background-color','rgba(242,247,244,0.8)');
		$('.conLeft li').css('background-color','rgba(242,247,244,0.8)');
		});
		


		$('#hblack').on('click', function() {
		$('.room').css('background-image','url(background/black.png)');
		$('.conLeft').css('background-image','url(background/black.png)');
		$('.pname').css('color','grey');
		$('.roomhead').css('background-color','rgba(0,0,0,0.7)');
		$('.sendBtn').css('background','rgba(0,0,0,0.4)');
		$('.ta').css('background-color','rgba(242,247,244,0.8)');
		$('.conLeft li').css('background-color','rgba(242,247,244,0.8)');
		});

</script>
	
</body>
</html>