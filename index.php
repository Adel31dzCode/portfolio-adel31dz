<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/logo_unique.png" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/login_styling1.css">
	<title>Portfolio Adel</title>
</head>
<body>

	<div id="clicker_remove"></div>
	
    <nav>

        <a href=""><img src="img/horizon.png" alt="logo" id="logo"></a>
		<a href=""><img src="img/logo_unique.png" alt="logo_media" id="logo_media"></a>
		
		<div class="br"></div>

		<ul id="group_ul">

			<a href="" class="link_u"><li class="list current">Home</li></a><hr id="dis">
			<a href="projects/project.php" class="link_u"><li class="list">Projects</li></a><hr id="dis">
			<a href="chat/" class="link_u"><li class="list">Chat</li></a><hr id="dis">
			<a class="for" href="login/login.php" class="link_u"><li class="list">Log in</li></a><hr id="dis" class="<?php if (isset($_COOKIE['username'], $_COOKIE['password'], $_COOKIE['email'])) { echo "withed";}?>">
			<a class="for" href="register/register.php" class="link_u"><li class="list">Register</li></a><hr id="dis" class="<?php if (isset($_COOKIE['username'], $_COOKIE['password'], $_COOKIE['email'])) { echo "withed";} ?>">

			<div title="<?php  if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>" id="secret">
				<img  alt="" id="avatar">
				<p id="name_user"><?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?> <img src="img/arrow.png" id="arrow"></p>

				<div id="menus">
					<ul>
						<a title="Click for Show Profile" href="/profile/"><li class="many">Profile</li></a>
						<hr class="lin">
						<a href="/profile/"><li class="many">Subs</li></a>
						<hr class="lin">
						<a title="Click for Log out" href=""><li class="many" id="logout">Log out</li></a>
					</ul>
				</div>

			</div>

		</ul>

		<div id="burger">
			<span class="brg1"></span>
			<span class="brg2"></span>
			<span class="brg3"></span>
		</div>

    </nav> <!-- Close Nav -->

	<div class="flex">

		<div id="content">

			<div class="triangle"></div>


			<h1 id="copy">Hello,</h1>

			<h1 id="occupation">I am <br id="disbale"><span id="here"><span id="inside"></span><span id="caret"></span></span></h1>

			<p id="info">
			My Name Is Hamlil Mohamed Adel From Algeria.
			<br>I am Web Desiner and Editor.
			<br>Thank Fou For Your Visite.<br> And I Hope Be Enjoy.</p>

			<p id="contacte">Contact Me In:</p>


			<div id="fix_position">
				<a href="https://www.facebook.com/profile.php?id=100088792934532" target="_blank"><img class="soial" src="img/facebook.png" alt="facebook"></a>
				<a href="https://www.instagram.com/adel31dz/" target="_blank"><img class="soial" src="img/instagram.png" alt="instagram"></a>
				<a href="https://www.youtube.com/channel/UClGfIOK2BN05JnZ01lrKtlA" target="_blank"><img class="soial" src="img/youtube.png" alt="youtube"></a>
			</div>	

		</div> <!-- Close content section -->

		<div id="photos">

			<img id="svg" src="img/svg.svg" alt="svg" />

			<img id="pc" src="img/pc1 (2).png" alt="Pc" />


		 </div> <!-- Close Photos section -->


	</div>





	
	<script src="js/main.js"></script>
	<script src="js/js_styling.js"></script>
</body>
</html>