<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>STEAL - Prod Page</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.png" />
        </head>

		<meta name="author" content="Serj" />
	</head>
	<body>
<div id="Wrapper">
			<header>
				<section class="login">
					<a href="index.html" id="logo"></a>
					<a id="loginButton" href="index.html">Logout</a>	
				<nav class="navBar">
    				<ul>
      					<li><a href="#">STORE		</a></li>
      					<li><a href="#">COMMUNITY	</a></li>
      					<li><a href="#">ABOUT		</a></li>
      					<li><a href="#">SUPPORT		</a></li>
    				</ul>
				</nav>
				  </header>
				  
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
						<form id="searchform" name="searchform" method="get" action="#" onsubmit="return">
							<div class="searchbox">
								<input id="nav_search" name="term" type="text" placeholder="search the store" size="22" autocomplete="off">
								<a href="#" class="search_button"><img src="images/search_icon_btn.png"></a>
							</div>
						</form>
					</div>
				  </nav>
				  
				  	<main>
					<form>
						<span>
							<label>Box Art:</label><br>
							<img alt="BoxArt" src="images/Witcher_3_cover_art.jpg"><br>
						</span>
						<span>
							<label>Title:</label><br>
							<input type="text" name="gameTitle" class="txtInp">
						</span>
						
						<span>
							<label>Genre:</label><br>
							<select name="genre" class="txtInp">
								<option value="action" selected>Action</option>
								<option value="adventure">Adventure</option>
								<option value="rpg">Role-Playing</option>
								<option value="racing">Racing</option>
							</select>
						</span>
						
						<span id="">
							<label>Screenshots:</label><br>
							<section>
								<a href="images/Witcher-3-Wild-Hunt-Open-World_big.jpg">
									<img class="screenshots" alt="Screenshot1" src="images/Witcher-3-Wild-Hunt-Open-World.jpg"> 
								</a>
								<a href="images/The_Witcher_3_Wild_Hunt_Prepare_for_impact_big.jpg">
									<img class="screenshots" alt="Screenshot2" src="images/The_Witcher_3_Wild_Hunt_Prepare_for_impact.jpg"> 
								</a>
								<input type="file" name="upload" accept="image/*" >
							</section>
						</span>
						
						<div class="Yjoin">
							<h3>WHY JOIN STEAL?</h3>
							<ol>
								<li>Buy and download full retail games at the cheapest prices</li><br>
								<li>Join the STEAL Community</li><br>
								<li>Share and download user generated content</li><br>
								<li>Chat with your friends</li><br>
							</ol><br>
							<img src="images/why_join_preview.png"><br>
							<p>
								System Requirements:<br>
								Windows XP, Vista, or 7<br>
								512 MB RAM<br>
								1 Ghz or faster processor<br>
								
								Intel Mac, OS X version 10.7 (Lion), or later.<br>
								Two-button mouse strongly recommended<br>
								
								1GB HD space (recommended)<br>
								Internet connection (broadband recommended)<br>
							</p>
						</div>
							
						<span>
							<label>Tags:</label><br>
							<textarea class="txtInp" name="tags" rows="5" cols="40" placeholder="Ex: Horror, Rich Story, Open World..."></textarea>
						</span>
						
						<span id="submitSpan">
							<input type="submit" class="subBtn" value="Update"></p>
							<a href="dev_page.html" class="back_to_dev">Back to Developer main</a>
						</span>
					</form>
					
					
					
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