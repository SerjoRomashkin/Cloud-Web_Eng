<?php
	include('session.php');
	
	$game_ids= explode(',', $user_games_session);			
   	foreach ($game_ids as $value) { 
		$sql = "SELECT * FROM tb_games_225_STEAL WHERE game_id = '$value' ";
		$events_result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($events_result);
	  }
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>STEAL - Prod Page</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.png" />
        </head>
	</head>
	<body>
		<div id="Wrapper">
			<header>
			 <section class="headCenter">
			 	<a href="index.php" id="logo"><img src="images/logo_invert_R_small.png"></a>
					<section class="login">
						<a class="installSteam" href="#"><img src="images/btn_header_installsteam_download.png">Install Steam</a>
						<a id="loginButton" href="logout.php">Logout</a>
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
				<img class="promoCards" src="images/steamcards_promo_02.png">
				<aside>
					<p>GIFT CARDS			</p>
						<a href="#">Now Available on Steal		</a>
					<p>RECOMMENDED			</p>
						<a href="#">By Friends					</a></br>
						<a href="#">By Curators					</a></br>
						<a href="#">Tags						</a></br>
					<p>DISCOVERY QUEUES		</p>
						<a href="#">Recommendations				</a></br>	
						<a href="#">New Releases				</a></br>
					<p>BROWSE CATEGORIES	</p>
						<a href="#">Top Sellers					</a></br>	
						<a href="#">Recenbtey Updated			</a></br>
						<a href="#">New realeases				</a></br>
						<a href="#">Upcoming					</a></br>
						<a href="#">Specials					</a></br>
						<a href="#">Virtuual Reality 			</a></br>
						<a href="#">Steal Controller Friendly	</a></br>
					<p>BROWSE BY GENRE		</p>
						<a href="#">Free to Play				</a></br>
						<a href="#">Early Access				</a></br>
						<a href="#">Action						</a></br>
						<a href="#">Adventure					</a></br>
						<a href="#">Casual						</a></br>
						<a href="#">Indie			 			</a></br>
				</aside>
				<article>
					<div class="prodmain">
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
						
						<span>
							<label>Screenshots:</label><br>
							<section>
								<a href="images/Witcher-3-Wild-Hunt-Open-World_big.jpg">
									<img alt="Screenshot1" src="images/Witcher-3-Wild-Hunt-Open-World.jpg"> 
								</a>
								<a href="images/The_Witcher_3_Wild_Hunt_Prepare_for_impact_big.jpg">
									<img alt="Screenshot2" src="images/The_Witcher_3_Wild_Hunt_Prepare_for_impact.jpg"> 
								</a>
								<input type="file" name="upload" accept="video/*,image/*" >
							</section>
						</span>
						<span>
							<label>Tags:</label><br>
							<textarea class="txtInp" name="tags" rows="5" cols="40" placeholder="Ex: Horror, Rich Story, Open World..."></textarea>
						</span>
						
						<span id="submitSpan">
							<input type="submit" class="subBtn" value="Update"></p>
							<a href="dev_page.php" class="back_to_dev">Back to Developer main</a>
						</span>
					</form>
					</div>
					</article>
				</main>
			
			<footer>
				<div>
					<a href="#">About Valve</a>   
					<a href="#">Stealworks</a>   
					<a href="#">Jobs</a>   
					<a href="#">Steal Distribution</a>   
					<a href="#">Gift Cards</a>   
					<a href="#">Steal</a>   
					<a href="#">@steal_games</a>
				</div>
			</footer>
		</div>	
	</body>
</html>