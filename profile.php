
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
<link rel="stylesheet" href="css/profile.css">
<title>Profile</title>
</head>
<body>

  <div class="container">
    <header>
      <div class="inner">
<!--add menu here once menu is finished on home page-->
<div class="brand" style="background-image: url(images/wallpaper.jpg);"> <!--background forest img-->
  <div class="meta" style="position:absolute;">
	<img src="images/Overlap.png"> 
      <h1 class="title" style="color:white;">username - profile</h1> <!--javascript to retrieve username from database. php to keep track of which user it is logged in as-->
   
  </div>
  <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
      <use xlink:href="#gentle-wave" x="48" y="0" />
      <use xlink:href="#gentle-wave" x="48" y="3" />
      <use xlink:href="#gentle-wave" x="48" y="5" />
      <use xlink:href="#gentle-wave" x="48" y="7" />
    </g>
  </svg>
</div>
      </div>
    </header>
	
	
    <main>
	
      <div class="inner" >      <!--this is the container for my post section-->
  <div class="index wrap" style="background-color: rgba(178,200,209,0.1); width:100%;"> <!--the wrapper for every posts-->
    <h1 style="width:100%; text-align:center; margin: 20px 0 20px 0;">My Posts</h1> <!--when no post present, prompt "Haven't yet made post, post something..."-->
  
  <div class="card" style="background-color:white; padding:10% auto; height:180px; width:80%;  margin:auto auto 30px auto;border: 1px solid #1C6EA4;
border-radius: 10px;"> <!-- this is the syntax and layout for posts, rearrange into javascript pull i number of post from database.
						for best visual result, display only 4 posts at a time, only scrollable on card section, 
						profile info remain visible and then footer-->

    <div class="cover" >
              <h2 class="title"> <!--Add total views n total comments by the date?-->
          <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World">Hello World</a>
        </h2>
    </div>
    <div class="message">  <!--placeholder for now--> 
      <div class="inner">
			<p style="line-height:1.6em;"> something  random and random and some the  random and random and some the  random and random and some the random and random and some the blablabla difference between wahahahahaha ahhhhh...</p>
          <div class="meta">
            <i class="ic i-calendar"></i><time itemprop="dateCreated datePublished" datetime="2020-08-10T19:43:53-05:00">2020-08-10</time>
          </div>
      
        <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World" style="float:right;" class="btn">more...</a>
      </div>
    </div>
  </div>
    <div class="card" style="background-color:white; padding:10% auto; height:180px; width:80%;  margin:auto;border: 1px solid #1C6EA4;
border-radius: 10px;">
    <div class="cover" >
              <h2 class="title">
          <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World">Hello World</a>
        </h2>
    </div>
    <div class="message">
      <div class="inner">
			<p style="line-height:1.6em;"> something  random and random and some the  random and random and some the  random and random and some the random and random and some the blablabla difference between wahahahahaha ahhhhh...</p>
          <div class="meta">
            <i class="ic i-calendar"></i><time itemprop="dateCreated datePublished" datetime="2020-08-10T19:43:53-05:00">2020-08-10</time>
          </div>
      
        <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World" style="float:right;" class="btn">more...</a>
      </div>
    </div>
  </div>
  
    <div class="card" style="background-color:white; padding:10% auto; height:180px; width:80%;  margin:auto;border: 1px solid #1C6EA4;
border-radius: 10px;">
    <div class="cover" >
              <h2 class="title">
          <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World">Hello World</a>
        </h2>
    </div>
    <div class="message">
      <div class="inner">
			<p style="line-height:1.6em;"> something  random and random and some the  random and random and some the  random and random and some the random and random and some the blablabla difference between wahahahahaha ahhhhh...</p>
          <div class="meta">
            <i class="ic i-calendar"></i><time itemprop="dateCreated datePublished" datetime="2020-08-10T19:43:53-05:00">2020-08-10</time>
          </div>
      
        <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World" style="float:right;" class="btn">more...</a>
      </div>
    </div>
  </div>
      <div class="card" style="background-color:white; padding:10% auto; height:180px; width:80%;  margin:auto;border: 1px solid #1C6EA4;
border-radius: 10px;">
    <div class="cover" >
              <h2 class="title">
          <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World">Hello World</a>
        </h2>
    </div>
    <div class="message">
      <div class="inner">
			<p style="line-height:1.6em;"> something  random and random and some the  random and random and some the  random and random and some the random and random and some the blablabla difference between wahahahahaha ahhhhh...</p>
          <div class="meta">
            <i class="ic i-calendar"></i><time itemprop="dateCreated datePublished" datetime="2020-08-10T19:43:53-05:00">2020-08-10</time>
          </div>
      
        <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World" style="float:right;" class="btn">more...</a>
      </div>
    </div>
  </div>
      <div class="card" style="background-color:white; padding:10% auto; height:180px; width:80%;  margin:auto;border: 1px solid #1C6EA4;
border-radius: 10px;">
    <div class="cover" >
              <h2 class="title">
          <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World">Hello World</a>
        </h2>
    </div>
    <div class="message">
      <div class="inner">
			<p style="line-height:1.6em;"> something  random and random and some the  random and random and some the  random and random and some the random and random and some the blablabla difference between wahahahahaha ahhhhh...</p>
          <div class="meta">
            <i class="ic i-calendar"></i><time itemprop="dateCreated datePublished" datetime="2020-08-10T19:43:53-05:00">2020-08-10</time>
          </div>
      
        <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World" style="float:right;" class="btn">more...</a>
      
	  </div>
    </div>
  </div>
  
  <a href="2020/08/10/hello-world/" itemprop="url" title="Hello World" style="text-align:center;" class="btn"> Load More...</a>
      
  
  
  
  </div>

  



        
        <div class="sidebar">
          
<div class="inner" style="background-color:rgba(199,217,217,0.8);"> <!--profile section-->

  <div class="panels">
    <div class="inner">
      <div class="overview panel" data-title="Overview">
        <div class="author" >
  <img class="image" itemprop="image" 
      src="images/avatar.jpg"> <!--allows user upload image, need store img name in database and call by name to accomodate different user uploads-->
  <p class="name" itemprop="name">Username</p> <!-- retrieve username-->
  <div class="description"> my quotes</div> <!--button to edit n modify the quote-->
</div>

<nav class="state">
    <div class="item posts">
      <span class="count">1 | 5 | 5</span>
      <span class="name">Posts | Comments | Pairs</span> <!--probably need database count posts/ comments/ pairs here-->
    </div>
</nav>


<!--div with tags defined by user, add js function allow user modify their tag (I have codes half done for this section) --> 

<div class="social">
<!--span with recommended "People matching your interest"-->
</div>


<ul class="menu">
    <li class="item">
      <a href="/" rel="section"><i class="ic i-home"></i>Friend List</a>
    </li>
	 <li class="item">
      <a href="/" rel="section"><i class="ic i-home"></i>Update Profile</a>
    </li>
	 <li class="item">
      <a href="/" rel="section"><i class="ic i-home"></i>Settings</a>
    </li
	<!--setting, update account, update email, password change, username change?, 
	use javascript to pop up the module allow editing-->
	
</ul>

      </div>
    </div>
  </div>

  <ul class="quick">
    <li class="prev pjax">
    </li>
    <li class="up"><i class="ic i-arrow-up"></i></li>
    <li class="down"><i class="ic i-arrow-down"></i></li>
    <li class="next pjax">
    </li>
    <li class="percent"></li>
  </ul>
</div>

        </div> <!--end of sidebar-->
		
		
        
      </div>
    </main>

    <footer>
      <div class="inner">
        <div class="copyright">
  
  &copy; 2020
  <span itemprop="copyrightYear">Capstone</span>
  <span class="with-love">
    <i class="ic i-sakura rotate"></i>
  </span>
  <span class="author" itemprop="copyrightHolder">Overlap</span>
</div>

      </div>
    </footer>
  </div>


<script src="//cdn.jsdelivr.net/combine/npm/pace-js@1.0.2/pace.min.js,npm/pjax@0.2.8/pjax.min.js,npm/velocity-animate@1.5.2/velocity.min.js,npm/velocity-animate@1.5.2/velocity.ui.min.js,npm/algoliasearch@4/dist/algoliasearch-lite.umd.js,npm/instantsearch.js@4/dist/instantsearch.production.min.js,npm/lozad@1/dist/lozad.min.js,npm/quicklink@2/dist/quicklink.umd.js"></script>


<script src="/js/profile.js"></script>





</body>
</html>
