<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER'])) {
    header('location:error.php');
    exit;
}
$message = $_SESSION['userid'];

$friend_name = null;

foreach ($_SESSION['friendnames'] as $value) {
    $friend_name = $friend_name . $value;
}
$something = $_SESSION['friendnames'][1];
$current = $_SESSION['user_name'];
$photo = $_SESSION['photo'];

$match = number_format($_SESSION['match'],2);
$paired = $_SESSION['pairwith'];

echo "<script type='text/javascript'>alert('$match $paired');</script>";


?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>Overlap</title>
      <link rel="stylesheet" href="css/home.css">  
	  <link rel="stylesheet" href="css/qq.css"> 
     
		<script src="js/jquery-1.8.0.min.js" ></script>
		<script src="js/GS.js" type="text/javascript"></script>
	
	  <script>


	  $(document).ready(function(){

    

  $("#submit").click(function(){
    var username = $("#txt_uname").val();
    var fname = $("#txt_fname").val();
    var lname = $("#txt_lname").val();
    var email = $("#txt_email").val();
 
    $.ajax({
       url:'saveData.php',
       type:'post',
       data:{username:username,fname:fname,lname:lname,email:email},
       success:function(response){
          location.reload(); // reloading page
       }
    });
 
  });
});
	  </script>
   </head>
   <body id="hback" class="is-3-column" style="background-image:url(images/blue.jpg); background-repeat: no-repeat; height:100vh; overflow:scroll; background-size: 100% 100vh;">

	 <div style="position:relative;  background-color:transparent;width:100%; height: 200px; color:white;"> 
	 <!--buttons for theme colors-->
		
	
	
	 <div class="hcolors" style="background-color:rgba(0,0,0,0.5); width:210px; height: 20px; float:right;">
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
	 
	 
	 
	 <script>
	
	


	//different color theme according to each color button 
	 $('#hred').on('click', function() {
		$('#hback').css('background-image', 'url(images/red.jpg)');
		$('.themetag').css('background-color', 'red');
		$('.themetag').css('background', 'rgb(236,240,158)');
		$('.themetag').css('background', 'linear-gradient(90deg, rgba(236,240,158,1) 0%, rgba(242,56,44,0.8138830532212884) 100%)');
		$('.themetag').css('color', 'white');
		$('.themetag').css('border', '1px solid grey');
		$('.card').css('background-color','rgba(255,229,227,0.9)');
		$('#nav').css('background','#eb867f');
		$('#nav').css('box-shadow','rgba(0,0,0,0.1)');
		$('.friend-font').css('color','grey');
		$('.hquote').css('color','white');
	$('.Righthead').css('background-image','url(images/red.jpg)');
		
		
		
		});
	
	 $('#hyellow').on('click', function() {
		$('#hback').css('background-image', 'url(images/yellow.jpg)');
		$('.themetag').css('background', 'rgb(236,240,158)');
		$('.themetag').css('background', 'linear-gradient(90deg, rgba(236,240,158,1) 0%, rgba(203,98,140,0.6138830532212884) 100%)');
		$('.themetag').css('color', '#8f6081');
		$('.themetag').css('border', '1px solid #bf86af');
		$('.card').css('background-color','rgba(255,239,232,0.9)');
		$('#nav').css('background','#f7e6bc');
		$('#nav').css('box-shadow','rgba(0,0,0,0.1)');
		$('.friend-font').css('color','grey');
		$('.hquote').css('color','white');
	$('.Righthead').css('background-image','url(images/yellow.jpg)');
		
		
		
		});
	 
	 	 $('#hblack').on('click', function() {
			$('#hback').css('background-image', 'url(images/black.jpg)');

			$('.themetag').css('background', '  rgb(133,198,182');
			$('.themetag').css('background', 'linear-gradient(90deg, rgba(149,149,196,0.8323704481792717) 0%, rgba(48,94,156,0.6951155462184874) 100%)');
			$('.card').css('background-color','rgba(209,216,255,0.7)');
			$('#nav').css('background','#939dbf');
			$('#nav').css('box-shadow','5px 5px rgba(255,255,255,0.8)');
			$('.friend-font').css('color','white');
			$('.themetag').css('color', 'white');
			$('.themetag').css('border', '1px solid white');
			$('.hquote').css('color','white');
	$('.Righthead').css('background-image','url(images/black.jpg)');
		
		});
			 $('#hblue').on('click', function() {
		$('#hback').css('background-image', 'url(images/blue.jpg)');
		$('.themetag').css('background', ' rgb(133,198,182)');
		$('.themetag').css('background', ' linear-gradient(90deg, rgba(133,198,182,0.7651435574229692) 0%, rgba(121,149,208,0.6951155462184874) 100%)');
		$('.card').css('background-color','rgba(230,238,252,0.8)');
		$('#nav').css('background','#939dbf');
		$('#nav').css('box-shadow','transparent');
		$('.friend-font').css('color','#73777d');
		$('.themetag').css('color', 'white');
		$('.themetag').css('border', '1px solid grey');
		$('.hquote').css('color','white');
		$('.Righthead').css('background-image','url(images/blue.jpg)');
		});
			 $('#hbrown').on('click', function() {
		$('#hback').css('background-image', 'url(images/brow.jpg)');
		$('.themetag').css('background', ' rgb(181,158,111)');
		$('.themetag').css('background', ' linear-gradient(90deg, rgba(181,158,111,0.9444152661064426) 0%, rgba(187,144,125,0.6138830532212884) 100%)');
		$('.card').css('background-color','rgba(237,234,228,0.8)');
		$('#nav').css('background','#bfb193');
		$('#nav').css('box-shadow','transparent');
		$('.friend-font').css('color','#73777d');
		$('.themetag').css('color', 'white');
		$('.themetag').css('border', '1px solid grey');
		$('.hquote').css('color','grey');
	$('.Righthead').css('background-image','url(images/brow.jpg)');
		});
			 $('#hwhite').on('click', function() {
		$('#hback').css('background-image', 'url(images/white.jpg)');
		$('.themetag').css('background', ' rgb(125,125,125)');
		$('.themetag').css('background', ' linear-gradient(90deg, rgba(125,125,125,0.9444152661064426) 0%, rgba(255,255,250,0.6138830532212884) 100%)');
		$('.card').css('background-color','rgba(255,255,255,0.8)');
		$('#nav').css('background','rgba(0,0,0,0.5)');
		$('#nav').css('box-shadow','transparent');
		$('.friend-font').css('color','#73777d');
		$('.themetag').css('color', 'white');
		$('.themetag').css('border', '1px solid grey');
		$('.hquote').css('color','grey');
$('.card').css('box-shadow','10px 10px 5px rgba(0,0,0,0.2)');
	$('.Righthead').css('background-image','url(images/white.jpg)');
		
		});
			 $('#hgreen').on('click', function() {
		$('#hback').css('background-image', 'url(images/green.jpg)');
		$('.themetag').css('background', 'rgb(122,191,169)');
		$('.themetag').css('background', 'linear-gradient(90deg, rgba(122,191,169,0.8323704481792717) 0%, rgba(217,236,178,0.5578606442577031) 100%)');
		$('.themetag').css('color', '#4f7570');
		$('.card').css('background-color','rgba(228,237,233,0.7)');
		$('#nav').css('background','#b1bab5');
		$('#nav').css('box-shadow','rgba(0,0,0,0.1)');
		$('.themetag').css('border', '1px solid grey');
			$('.friend-font').css('color','grey');
			$('.hquote').css('color','white');
	$('.Righthead').css('background-image','url(images/green.jpg)');
		
		
		});
		
			 $('#hpink').on('click', function() {
		$('#hback').css('background-image', 'url(images/pink.jpg)');
		$('.themetag').css('background', ' rgb(158,173,240)');
		$('.themetag').css('background', ' linear-gradient(90deg, rgba(158,173,240,0.9444152661064426) 0%, rgba(203,98,140,0.5138830532212884) 100%)');
		$('.card').css('background-color','rgba(251,235,255,0.8)');
		$('#nav').css('background','#c4b1e0');
		$('#nav').css('box-shadow','transparent');
		$('.friend-font').css('color','#73777d');
		$('.themetag').css('color', 'white');
		$('.themetag').css('border', '1px solid grey');
		$('.hquote').css('color','white');
	$('.Righthead').css('background-image','url(images/pink.jpg)');
		});
	 </script>
	 
	 
	<div style="position:fixed;z-index:999999;"> 
	<!--menu located top-left, traditional menu can be problematic when it comes to responsive screen at smaller screen width
	However, only few choices are given in these type of menu with its size restriction, also difficult to find which reduces user friendliness
	kinda of a give n take relation here T^T -->
	
	
	<div id="out">
    <div id="first"><a href="#"><img src="images/icons8-search-128.png" title="Search"></a></div>
    <div id="second"><a href="calendarFeature/index.php"><img src="images/icons8-calendar-128.png" title="Scheduler Calendar"></a></div>
    <div id="third"><a href="#"><img src="images/icons8-settings-128.png" title="Settings"></a></div>
	</div>
	<div id="nav">
    <img src="images/home.png">
	</div>
	</div> <!-- end of menu div -->
	
<!--quick chat panel-->
<div id="chatContainer" class="chatBox">
	
	<div class="context">
	
		<div class="conRight">
			<div class="Righthead">
			
				<div class="headName">  Quick Chat -- username </div>
				<button style="float:right;height:32px; margin: 5px 5px 5px auto;" id="closechat"> close </button>
			</div>
			<div class="RightCont" >
			<p id="caution" style="background-color: #fcf5d4; border-bottom:1px solid black;"> <i>For the purpose of this project, we have adapted automatic response on 'Quick Chat' Please enter 'Chat Room' for real-time chatting </i></p>
				

				<ul class="newsList">
				
				</ul>
			</div>
			<div class="RightFoot">
				<div class="emjon">
					<ul>
						<li><img src="img/em_02.jpg"/></li>
						<li><img src="img/em_05.jpg"/></li>
						<li><img src="img/em_07.jpg"/></li>
						<li><img src="img/em_12.jpg"/></li>
						<li><img src="img/em_14.jpg"/></li>
						<li><img src="img/em_16.jpg"/></li>
						<li><img src="img/em_20.jpg"/></li>
						<li><img src="img/em_23.jpg"/></li>
						<li><img src="img/em_25.jpg"/></li>
						<li><img src="img/em_30.jpg"/></li>
						<li><img src="img/em_31.jpg"/></li>
						<li><img src="img/em_33.jpg"/></li>
						<li><img src="img/em_37.jpg"/></li>
						<li><img src="img/em_38.jpg"/></li>
						<li><img src="img/em_40.jpg"/></li>
						<li><img src="img/em_45.jpg"/></li>
						<li><img src="img/em_47.jpg"/></li>
						<li><img src="img/em_48.jpg"/></li>
						<li><img src="img/em_52.jpg"/></li>
						<li><img src="img/em_54.jpg"/></li>
						<li><img src="img/em_55.jpg"/></li>
					</ul>
				</div>
				<div class="footTop">
					<ul>
						<li><img src="img/20170926103645_31.jpg"/></li>
						<li class="ExP"><img src="img/20170926103645_33.jpg"/></li>
						<li><img src="img/20170926103645_35.jpg"/></li>
						<li><img src="img/20170926103645_37.jpg"/></li>
						<li><img src="img/20170926103645_39.jpg"/></li>
						<li><img src="img/20170926103645_41.jpg" alt="" /></li>
						<li><img src="img/20170926103645_43.jpg"/></li>
						<li><img src="img/20170926103645_45.jpg"/></li>
					</ul>
				</div>
				<div class="inputBox">
					<textarea id="dope" style="margin: auto auto auto 20px; width: 80%;height: 75px; border: none; outline: 1px solid #8c95b8;" name="" rows="" cols=""></textarea>
					<button class="sendBtn">Send</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="paircontainer" class="chatBox" style="height:300px; width:400px; background-color:rgba(0,0,0,0.4);">
	<div class="friend" id="closepair" style="height:150px; text-align:left;">						
							<div class="friendchat" > 
							<div class="friend-img"> </div>
							<div class="friend-infor" style="color:white;"> 
							
						
						<?php  echo'	<p class="friend-font" style="color:white;"><i> '.$paired.' </i></p> <br>  
							<p class="friend-font" style="color:white;"> <i> '. $match. ' % Similarity </i></p> ';?> 
							
							
							</div>
							</div> 
							
							
							</div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/chat.js"></script>




<!--change profile panel-->
<div id="uploading" class="uploadcontainer" >
<div id="profileupload" class="upload-profile"> 

<div style="height:38px; width:100%; background-color:#b4caed; border: 1px solid white;">
<p style="width:50%; float:left;"> Select Photo</p>
<button id="closeprofile" class="profilebutton">Close
</button>
</div>

<div class="filedrop" ondrop="upload_file(event)" ondragover="return false"  >
<br><br><br><br>
	<p><i> Drop file here </i></p> <br>
		<p><i> or </i></p> <br>
		<p><i><input type="button" value="Select File" onclick="file_explorer();"></i></p>
		<input type="file" style="display:none;" id="selectfile">
</div>


	<script src="js/uploading.js" type="text/javascript"></script>

</div>
</div>
      <section class="section" >
	
	  	<div style="width:50%; text-align:center;margin:auto; ">
		<img class="dshadow" src="images/Overlap.png"> </img> <br> <br>
		<p class="hquote" style="color:white; font-size:115%;"><i> -- friends are never apart, maybe in distance but never in heart</i></p> 
		<!--somehow looked empty here, maybe could set up database of random quotes for space filling-->
		</div>
	

         <div class="container" style="z-index:9999;" >

            <div class="columns">
               <div class="column order-2 column-main is-8-tablet is-8-desktop is-6-widescreen">
                  <div class="card" >
  <div style="margin-bottom: 20px;border:solid thin #aaa;padding-left:10px;padding-right:10px;padding-top:10px;">

                   <form method="post" enctype="multipart/form-data">
                     <textarea style="width: 100%;height:150px;padding-left:10px;padding-right:10px;padding-top:10px; background-color:transparent;" name="post" placeholder="What would you like to share today?"></textarea>
                     <br>
                     <input type="file" name="file" id="addimg" >
					
                     <div align="center"><input id="post_button" class="themetag button" style="color:white;" type="submit" value="Post"></div>
                   </form>

                 </div>
                 <!--post1-->

         

                  <!--end of post 1-->

                  </div>


                  <div class="card"> <!--all posts are stored to database by posting time, whole card section will be pulled from data base by time, tag to display...ish...comeback-->
                    
                     <article class="card-content article" role="article">
                        <div class="article-meta size-small is-uppercase level is-mobile">
                           <div class="level-left"><time class="level-item" dateTime="2020-03-01T00:00:00.000Z" title="2020-03-01T00:00:00.000Z">2020-03-01</time><span class="level-item"><a class="link-muted" href="/hexo-theme-icarus/categories/Configuration/">Configuration</a></span><span class="level-item">15 minutes read (About 2193 words)</span></div>
                        </div>
                        <h1 class="title is-3 is-size-4-mobile"><a class="link-muted" href="">This is the topic </a></h1>
                        <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus laoreet, libero vitae vestibulum dignissim, erat est eleifend velit, lacinia facilisis urna nibh quis magna. Vivamus non felis id eros elementum consequat nec a tellus. Praesent sodales quis sapien ac suscipit. Donec pellentesque blandit orci ac tempus. Suspendisse turpis mauris, porta at venenatis vel, placerat nec est. Praesent bibendum id quam non tincidunt. Cras cursus metus eget felis tincidunt ultricies. Nullam turpis magna, vestibulum quis arcu eget, euismod tempus lacus. Aenean suscipit felis eu lectus congue tempor. Aenean finibus, leo vel suscipit fermentum, felis nunc maximus lorem, aliquet imperdiet risus ante sit amet purus. Nunc ut justo ac neque porttitor auctor vel ut neque. Nullam commodo lacus et congue maximus. Cras fringilla nunc ut ante elementum tincidunt.
						 </p>
                        </div>
                        <a class="article-more button is-small size-small" href="">Read More</a>
                     </article>
                  </div>
				              <div class="card" style="opacity:0.9;"> <!--all posts are stored to database by posting time, whole card section will be pulled from data base by time, tag to display...ish...comeback-->
                     <div class="card-image"><a class="image is-7by3"></a></div>
                     <article class="card-content article" role="article">
                        <div class="article-meta size-small is-uppercase level is-mobile">
                           <div class="level-left"><time class="level-item" dateTime="2020-03-01T00:00:00.000Z" title="2020-03-01T00:00:00.000Z">2020-03-01</time><span class="level-item"><a class="link-muted" href="/hexo-theme-icarus/categories/Configuration/">Configuration</a></span><span class="level-item">15 minutes read (About 2193 words)</span></div>
                        </div>
                        <h1 class="title is-3 is-size-4-mobile"><a class="link-muted"</a></h1>
                        <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus laoreet, libero vitae vestibulum dignissim, erat est eleifend velit, lacinia facilisis urna nibh quis magna. Vivamus non felis id eros elementum consequat nec a tellus. Praesent sodales quis sapien ac suscipit. Donec pellentesque blandit orci ac tempus. Suspendisse turpis mauris, porta at venenatis vel, placerat nec est. Praesent bibendum id quam non tincidunt. Cras cursus metus eget felis tincidunt ultricies. Nullam turpis magna, vestibulum quis arcu eget, euismod tempus lacus. Aenean suscipit felis eu lectus congue tempor. Aenean finibus, leo vel suscipit fermentum, felis nunc maximus lorem, aliquet imperdiet risus ante sit amet purus. Nunc ut justo ac neque porttitor auctor vel ut neque. Nullam commodo lacus et congue maximus. Cras fringilla nunc ut ante elementum tincidunt.
						 </p>
                        </div>
                        <a class="article-more button is-small size-small" href="">Read More</a>
                     </article>
                  </div>
        
        
            
      
  
  
   
          
                  <nav class="pagination is-centered mt-4" role="navigation" aria-label="pagination">
                     <div class="pagination-previous is-invisible is-hidden-mobile"><a href="">Previous</a></div>
                     <div class="pagination-next"><a href="">Next</a></div>
                     <ul class="pagination-list is-hidden-mobile">
                        <li><a class="pagination-link is-current" href="">1</a></li>
                        <li><a class="pagination-link" href="">2</a></li>
                        <li><a class="pagination-link" href="">3</a></li>
                        <li><a class="pagination-link" href="">4</a></li> <!--by page or "load more" option-->
                     </ul>
                  </nav>
               </div>
               <div class="column column-left is-4-tablet is-4-desktop is-3-widescreen  order-1">
                  <div class="card widget">
                     <div class="card-content">
                        <nav class="level">
                           <div class="level-item has-text-centered flex-shrink-1">
                              
						<?php
							  	echo '
							  <div id="changeprofile">
							  
 
                                 <figure class="image is-128x128 mx-auto mb-2" >
								 
								
								<img  class="avatar" src=" ' .$photo.' " alt="Profile Photo">
								
							
								 
								
								 <div class="changephoto">
								<p class="phototext" > Change Photo</p>
								</div>
								</figure>
									
                              
								
								 <p class="title is-size-4 is-block line-height-inherit"> ' . $current . '</p>        
								
                               
								
                              </div>
							  ';
                                ?>
								
								<!-- photo = path of profile photo, current = current logged username-->
                           </div>
                        </nav>
                        <nav class="level is-mobile">
                           <div class="level-item has-text-centered is-marginless">
                              <div>
                                 <p class="heading">Posts</p>
                              
                                    <p class="title">38</p>
                            
                              </div>
                           </div>
                           <div class="level-item has-text-centered is-marginless">
                              <div>
                            
                                    <p class="title">9</p>
                                 
                              </div>
                           </div>
                           <div class="level-item has-text-centered is-marginless">
                              <div>
                            
                                    <p class="title">4</p>
                                 
                              </div>
                           </div>
                        </nav>																	
                        <div class="level"><a class="themetag level-item button is-rounded" href="profile.php" target="_blank" rel="noopener">My Profile</a></div>
                     </div>
					 				  <script>
document.getElementById('profileupload').style.display = "none";
document.getElementById('uploading').style.display = "none";
$('#changeprofile').click(function(){
 document.getElementById('profileupload').style.display = "";
 document.getElementById('uploading').style.display = "";
 
 $('#closeprofile').click(function(){
 document.getElementById('profileupload').style.display = "none";
 document.getElementById('uploading').style.display = "none";
});

 
});
</script>
                  </div>

                  <!--!-->
                  <div class="card widget">
                     <div class="card-content">
                        <div class="menu">
                           <h3 class="menu-label">My Tags</h3>
						   <p>Biking</p>
						      <p>Gaming</p>
							   <p>Etc</p>
							<!--interest tags from user-->
                        </div>
                     </div>
                  </div>
                  <div class="card widget">
                     <div class="card-content">
                        <div class="menu">
                           <h3 class="menu-label">Categories</h3> 
						   <!--filter the displayed content by selected tag-->
                           <ul class="menu-list">
                              <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Hobbies </span></span><span class="level-end"><span class="level-item tag">4</span></span></a></li>
                              <li>
                                 <a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Filter by Tags</span></span><span class="level-end"><span class="level-item tag">12</span></span></a>
                                 <ul class="mr-0">
                                    <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Arts</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                                    <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Baking</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                                    <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Books</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                                    <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Exercises</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                                    <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Games</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                                    <li><a class="level is-mobile is-marginless" ><span class="level-start"><span class="level-item">Travel</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                                 </ul>
                              </li>
                              <li><a class="level is-mobile is-marginless" href="/hexo-theme-icarus/categories/Widgets/"><span class="level-start"><span class="level-item">Widgets</span></span><span class="level-end"><span class="level-item tag">2</span></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="column-right-shadow is-hidden-widescreen"></div>
               </div>
               <div class="column column-right is-4-tablet is-4-desktop is-3-widescreen is-hidden-touch is-hidden-desktop-only order-3">
                  <div class="card widget">
                     <div class="card-content friend-wrap">
                        <h4 class="menu-label">Friend List</h4>
						
					
						
						
						
							<!--friendlist?-->
							<div class="friend">
							
							
							<?php
for ($i = 0;$i < count($_SESSION['friendnames']);$i++) {
    $temp = $_SESSION['friendnames'][$i];
//	$fid= $_SESSION['friendid'][$i];
//	<div class="friendchat" id="' . $fid .'"> 
    echo '
						
							<div class="friendchat"> 
							<div class="friend-img"> </div>
							<div class="friend-infor"> 
							<p class="friend-font"><i> ' . $temp . ' </i></p> <br>
							<p class="friend-font"> <i> currently offline </i></p>
							</div>
							</div> 
							';
}
?>
							

							</div>
							
							<a href="chatroom/chatroom.php">
							<div class="to-friend themetag"> Enter Chat Room </div>
							</a>
							
							
                     </div>
                  </div>
                  <div class="card widget">
                     <div class="card-content" style="text-align:center;">
                       <!--something random, recommended user or reviews. Maybe friend notification....-->
					   
					   
					   
					   
					   
					   		<!--friendlist?-->
						
							
							
							
					   
					   <div id="pairs" class="themetag to-friend"> Pair Friends </div>
                     </div>
	
                  </div>
				  			

				  
                  <div class="card widget">
                     <div class="card-content">
                        <div class="menu">
                           <h3 class="menu-label">Tags</h3>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
							<p>something</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
							 <script>
							 
							 
							 
document.getElementById('paircontainer').style.display = "none";

						 
$('#pairs').click(function(){
document.getElementById('paircontainer').style.display = "";

$('#closepair').click(function(){
 document.getElementById('paircontainer').style.display = "none";
});

	});

document.getElementById('chatContainer').style.display = "none";

$('.friendchat').click(function(){
 document.getElementById('chatContainer').style.display = "";
 
 
 
 
setTimeout(fade_out, 2000);

function fade_out() {
  $("#caution").fadeOut().empty();
}
 
 
 
 $('#closechat').click(function(){
 document.getElementById('chatContainer').style.display = "none";
});

 
});

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
         </div>
      </section>
      <footer class="footer" style="background-color:black; opacity:0.6; color:white;">
		<p>This is the footer</p>
      </footer>

      <div id="outdated">
         <h6>Your browser is out-of-date!</h6>
         <p>Update your browser to view this website correctly.&amp;npsb;<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
         <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">×</a></p>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/outdatedbrowser@1.1.5/outdatedbrowser/outdatedbrowser.min.js" defer></script><script>window.addEventListener("load", function () {
         outdatedBrowser({
             bgColor: '#f25648',
             color: '#ffffff',
             lowerThan: 'object-fit' // display on IE11 or below
         });
         });
      </script><!--!-->
  <script src="js/object.js"></script>
  <script src="js/nprogress.js"></script>
  <script src="js/index.js"></script>
   
   </body>
</html>
