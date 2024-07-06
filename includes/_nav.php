<?php 


if (isset($_SESSION['username']) && isset($_SESSION["user_id"])){

	echo $_SESSION['username'];

	echo '<nav class="navbar navbar-inverse">';
    echo '<div class="container-fluid">';
    echo '<div class="navbar-header">';
	      echo '<a class="navbar-brand" href="home.php">' . "Blogie" . '</a>';
	   echo '</div>';
	    echo '<ul class="nav navbar-nav">';
	    echo '<li>';

	    echo '<a href="home.php">' . "Home" . '</a>';
	    echo '</li>';

	    echo '<li>' . '<a href="dashboard.php">' . "Dashboard" . '</a>';

	    echo '</li>';

	    echo  '</ul>';

	    echo '<ul class="nav navbar-nav navbar-right">';

	    echo '<li>'; 
	    echo '<a href="profile.php"><span class="glyphicon glyphicon-user">';
	    echo '</span>' . "Profile" . '</a>';

	    echo '</li>';

	    echo '<li>';
	    echo '<a href="logout.php">';
	    echo '<span class="glyphicon glyphicon-log-in">' . '</span>' . "Logout" . '</a>';
	    echo '</li>';

	    echo '</ul>';   
	 echo  '</div>';

	echo '</nav>';

}

else {


		echo '<nav class="navbar navbar-inverse">';
		echo '<div class="container-fluid">';
		echo '<div class="navbar-header">';
			      echo '<a class="navbar-brand" href="home.php">' . "Blogie" . '</a>';
			   echo '</div>';
			    echo '<ul class="nav navbar-nav">';
			    echo '<li>';

			    echo '<a href="home.php">' . "Home" . '</a>';
			    echo '</li>';

			    echo '<li>' . '<a href="#">' . "About" . '</a>';

			    echo '</li>';

			    echo  '</ul>';

			    echo '<ul class="nav navbar-nav navbar-right">';

			    echo '<li>'; 
			    echo '<a href="register.php"><span class="glyphicon glyphicon-user">';
			    echo '</span>' . "Sign Up" . '</a>';

			    echo '</li>';

			    echo '<li>';
			    echo '<a href="login.php">';
			    echo '<span class="glyphicon glyphicon-log-in">' . '</span>' . "Login" . '</a>';
			    echo '</li>';

			    echo '</ul>';   
			 echo  '</div>';

			echo '</nav>';


}





