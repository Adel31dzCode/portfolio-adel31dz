<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/login_styling1.css">
	<link rel="stylesheet" href="project1.css">
	<link rel="shortcut icon" href="img/logo_unique.png" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Projects</title>
</head>
<body>

<div id="clicker_remove"></div>

<nav>


        <a href=""><img src="img/horizon.png" alt="logo" id="logo"></a>
		<a href=""><img src="img/logo_unique.png" alt="logo_media" id="logo_media"></a>
		

		<ul id="group_ul">

			<a class="tak" href="../index.php"><li class="list">Home</li></a><hr id="dis">
			<a class="tak" href="..//projects/project.php"><li class="list current">Project</li></a><hr id="dis">
			<a class="tak" href="../chat/index.php"><li class="list">Chat</li></a><hr id="dis">
			<a class="for" href="../login/login.php" class="link_u"><li class="list">Log in</li></a><hr id="dis" class="<?php if (isset($_COOKIE['username'], $_COOKIE['password'], $_COOKIE['email'])) { echo "withed";}?>">
			<a class="for" href="../register/register.php" class="link_u"><li class="list">Register</li></a><hr id="dis" class="<?php if (isset($_COOKIE['username'], $_COOKIE['password'], $_COOKIE['email'])) { echo "withed";}?>">

			<div title="<?php  if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>" id="secret">
				<img  alt="" id="avatar">
				<p id="name_user"><?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?> <img src="../img/arrow.png" id="arrow"></p>

				<div id="menus">
					<ul>
						<a title="Click for Show Profile" href="../profile/"><li class="many">Profile</li></a>
						<hr class="lin">
						<a href="../profile/"><li class="many">Subs</li></a>
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

	<h1 class="tittle">Projects</h1>

	<div id="contener">



	<article class="section">
		<div class="seventen">
			<img src="img/main.png" class="screen">
			<span class="plus">
				For Test <br> HTML & CSS & JAVA SCRIPT & PHP & MYSQL
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>	
			<p class="info">This Web</p>
			<p class="date">2023/11/16</p>
			<a href="../" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>



	<article class="section">
		<div class="seventen">
			<img src="img/pt1.png" class="screen">
			<span class="plus">
				It's Web For Client
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>	

			<p class="info">Disney client A web for client</p>
			<p class="date">2023/02/12</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/Develompent/" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>


	<article class="section">
		<div class="seventen">
			<img src="img/pt2.png" class="screen">
			<span class="plus">
			It's Web For Client Second
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>	
			<p class="info">Disney Client A Web For Client 2</p>
			<p class="date">2022/03/02</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/DisneyFinish_Upgraded/" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>


	<article class="section">
		<div class="seventen">
			<img src="img/pt3.png" class="screen">
			<span class="plus">
				For Try Copy Netflix Web Site
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>				<p class="info">Copy Instagram Web</p>
			<p class="date">2023/01/24</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/instagram_new_update/" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>


	<article class="section">
		<div class="seventen">
			<img src="img/pt4.png" class="screen">
			<span class="plus">
			For Try Copy Instagram Web Site
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>				<p class="info">Create Login Page</p>
			<p class="date">2023/04/18</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/Log%20in%20page/Index.html" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>



	<article class="section">
		<div class="seventen">
			<img src="img/pt5.png" class="screen">
			<span class="plus">
			For Try Make Log in Page Proffecienal
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>				<p class="info">Create Web About Programming</p>
			<p class="date">2022/10/22</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/Transwixresponsive1/Index.html" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>



	<article class="section">
		<div class="seventen">
			<img src="img/pt6.png" class="screen">
			<span class="plus">
			For Test Css Propertys
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>				<p class="info">Game Web</p>
			<p class="date">2023/03/07</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/LastJs/" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>


	<article class="section">
		<div class="seventen">
			<img src="img/pt7.png" class="screen">
			<span class="plus">
			For Try First Web With js
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>				<p class="info">Copy Netflix Web</p>
			<p class="date">2023/03/28</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/Netflix_By_Adel31_dz/" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>



	<article class="section">
		<div class="seventen">
			<img src="img/pt8.png" class="screen">
			<span class="plus">
				Made Netflix			
			</span>
		</div>

		<div class="last_sec">
			<span>
				<img src="img/warning.png" class="warning">

				<div class="report">
					<ul>
						<li class="feedback" style-target="host" role="option" tabindex="0" >Link Worse</li>
						<li class="feedback" style-target="host" role="option" tabindex="1" aria-disabled="false">Like</li>
					</ul>
				</div>
			</span>				
			<p class="info" name="hell">Copy Netflix Web</p>
			<p class="date">2023/03/28</p>
			<a href="https://netflixdzismadedbyadel.on.drv.tw/Disney%20easy/" target="_blank"><img src="img/link.png" class="link"></a>
		</div>
	</article>




	</div>

	<div id="bg"></div>

<div id="more_info">


	<form Method="POST" id="form_all">

		<span>
			<select name="choose" id="opt"> 
				<option value="This_Web">This_Web</option>
				<option value="DisneyClient 1">DisneyClient 1</option>
				<option value="DisneyClient 2">DisneyClient 2</option>
				<option value="Instagram">Instagra</option>
				<option value="Login_Page">Login_Page</option>
				<option value="Transwix">Transwix</option>
				<option value="Game_Web">Game_Web</option>
				<option value="NetFlex">NetFlex</option>
				<option value="DisneyClient 3">DisneyClient 3</option>
			</select> 
			<img src="img/arrow.png" alt="arrow" id="arrow">
		</span>

		<textarea name="inf" id="area" cols="30" rows="10" maxlength="110" placeholder="Describe The Problem (One Messege)"></textarea>

		<span id="length">10/85</span>

		<input type="submit" value="Send" id="sub">

		<p id="ifer">You Didn't Login Or Register</p>

	</form>

</div>






	<script src="project11.js"></script>
	<script src="../js/js_styling.js"></script>

</body>
</html>


<?php 

require_once("../conection_updated.php");

try {

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_COOKIE['username'], $_COOKIE['password'] ,$_COOKIE['email'])) {
	
	$messenger = $_COOKIE['username'];
	$report = $_POST['inf'];


	$stmt = $conn->prepare("INSERT INTO reports (Messener ,report) VALUES (:user_send, :report)");
	$stmt->bindParam(':user_send', $messenger);
  	$stmt->bindParam(':report', $report);

	$stmt->execute();


}
} catch (PDOException $e) {
    //echo "error: " . $e->getMessage();
	echo '<div id="lastest">You Have Right To Send One Messege</div>';
}




?>