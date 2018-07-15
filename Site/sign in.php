<?php
	include("dbh.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	    // username and password sent from form 
	      
	    $userName = mysqli_real_escape_string($con,$_POST['userName']);
	    $password = mysqli_real_escape_string($con,$_POST['password']); 
	    $sql = "SELECT id FROM tb_users_225_STEAL WHERE userName = '$userName' AND password = '$password'";
	    $result = mysqli_query($con,$sql);
		if (!$result) {
	    	printf("Error: %s\n", mysqli_error($con));
	    exit();
		}
	    
		
	    $count = mysqli_num_rows($result);
	    // If result matched $myusername and $mypassword, table row must be 1 row
			
	    if($count == 1) {

	        $_SESSION['login_user'] = $userName;
	        header("location: events.php");
	    }else {
	        $error = "Your Login Name or Password is invalid <br><a href='#recover'>click here to recover password</a>";
		}
   }
	
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>STEAL - Home</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.png" />
        </head>
	</head>
	<body>
		<div id="Wrapper">
			<header>
			 <section class="headCenter">
			 	<a href="#" id="logo"><img src="images/logo_invert_R_small.png"></a>
					<section class="login">
						<a class="installSteam" href="#"><img src="images/btn_header_installsteam_download.png">Install Steam</a>
						<a id="loginButton" href="dev_page.html">login</a>
						<a class="middle">|</a>
						<a id="langButton" href="#">language              </a>	
					</section>
				<nav class="navBar">
    				<ul>
      					<li><a href="#">STORE		</a></li>
      					<li><a href="#">COMMUNITY	</a></li>
      					<li><a href="#">ABOUT		</a></li>
      					<li><a href="#">SUPPORT		</a></li>
    				</ul>
				</nav>
			  </section>
		    </header>
		   <main>
				  <nav class="your_nav">
				  	<ul>
						<li><a class="popup_menu_item" href="#">Your Store	</a><img src="images/btn_arrow_down_padded_white.png"></li>
						<li><a class="popup_menu_item" href="#">Games		</a><img src="images/btn_arrow_down_padded_white.png"></li>
						<li><a class="popup_menu_item" href="#">Software	</a><img src="images/btn_arrow_down_padded_white.png"></li>
						<li><a class="popup_menu_item" href="#">Hardware	</a><img src="images/btn_arrow_down_padded_white.png"></li>
						<li><a class="popup_menu_item" href="#">Videos		</a><img src="images/btn_arrow_down_padded_white.png"></li>
						<li><a class="popup_menu_item" href="#">News		</a></li>
					</ul>		
					<div class="search_area">
						<form name="searchform" method="get" action="#" onsubmit="return">
							<div class="searchbox">
								<input id="nav_search" name="term" type="text" placeholder="search the store" size="22" autocomplete="off">
								<a href="#" class="search_button"><img src="images/search_icon_btn.png"></a>
							</div>
						</form>
					</div>
				  </nav>
				<div id="loginregister">
					<section class="loginwindow">
					  <div class="left_signin">
					  		<div class="signin">
							<h3>SIGN IN</h3>
							<p>To an existing Steal™ account</p>
							<form class="loginform" action="" method="post">
							<p>Steal™ account name</p>
								<input type="text" name="userName">
							<p>Password</p>	
								<input type="password" name="password">
								<button type="submit" class="submit" >Sign in</button>
							</form>
						</div>
						<div class="create">
							<h3>CREATE</h3>
							<p>A new free account</p>
							<p>It's free to join and easy to use. Continue on to create your Steal™ account and get Steal™, the leading digital solution for PC and Mac gamers.</p>
							<button type="submit" class="submit" >Join Steal™</button>
						</div>
					  </div>
						<div class="yjoin">
							<h3> WHY JOIN STEAL™?</h3>
							<ul>
								<li>Buy and download full retail games			</li>
								<li>Join the Steal™ Community					</li>
								<li>Chat with your friends while gaming			</li>
								<li>Play your games on any supported platform	</li>
								<li>Schedule a game, tournament, or LAN party	</li>
								<li>Receive automatic game updates, and more!	</li>
							</ul>
							<img src="images/why_join_preview.png"
						</div>
				 <span class="error"><?php echo $error; ?></span>
						<br><br>
                   		<a href="register.php">Register</a>
                   </section>
					 <a class="forgotpw" href="#">Forgot your password?</a>
					 <a class="learnmore" href="#">Learn more about Steal.</a>
					</section>
				</div>
			</main>
			<footer>
				<div>
					<a href="#">About Valve</a>   
					<a href="#">Steamworks</a>   
					<a href="#">Jobs</a>   
					<a href="#">Steam Distribution</a>   
					<a href="#">Gift Cards</a>   
					<a href="#">Steal</a>   
					<a href="#">@steal_games</a>
				</div>
			</footer>
		
		</div>
		</body>
</html>

