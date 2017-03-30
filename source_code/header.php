<?php
	function navigateHeader($activehead){
		switch($activehead){
			case 'home':

			echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li class="active" ><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';
		    break;

		    case 'floor':
		    echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li class="active"><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';

		    break;

		    case 'about':

		    echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li class="active" 
						><a href="about.php" style="color:white;">About</a></li>';
						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';


		    break;
		    case 'survey':

		    echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li class="active"><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';
		    break;



			case 'search':

			echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li class="active"><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';
		    break;

			case 'map':

			echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li class="active"><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li ><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';

		    break;

			case 'thankyou':

			echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li class="active"><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';

		    break;
			case 'sponsor':

			echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li class="active"><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li><a href="login.php" style="color:white;">Log In</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';
		    break;
			case 'login':


			echo '<div class="navbar navbar-default navbar-fixed-top" style = "background-color: #2f2f2f;" role="navigation">';
			echo '<div class="container">';
			echo '<div class="navbar-header">';
				  	
				echo'</div>';
				echo '<div class="navbar-collapse collapse" >';
					echo '<ul class="nav navbar-nav navbar-right" >';
						echo '<li><a href="index.php" style="color:white;">Home</a></li>';
						echo '<li><a href="survey.php" style="color:white;">Survey</a></li>';
						echo '<li><a href="display.php" style="color:white;">Search</a></li>';
						echo '<li><a href="indexmap.php" style="color:white;">Map</a></li>';
						echo '<li><a href="floorPlans.php" style="color:white;">Floor</a></li>';
						echo '<li><a href="thankyou.php" style="color:white;">Thank Page</a></li>';
						echo '<li><a href="sponsor.php" style="color:white;">Sponsor</a></li>';
						echo '<li><a href="about.php" style="color:white;">About</a></li>';

						echo '<li class="active"><a href="login.php" style="color:white;">Hi Admin</a></li>';
					echo '</ul>';
				echo '</div><!--/.nav-collapse -->';
				echo '</div>';
		    echo'</div>';
		    break;
		}
	}
			
?>