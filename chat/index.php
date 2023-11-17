<?php 


require_once("../conection_updated.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {

$value = $_POST['comment'];
$user = $_COOKIE['username'];

$sttm1 = $conn->prepare("INSERT INTO comments (names, comment) VALUES (:names, :comment)");

$sttm1->bindParam(':names', $user);
$sttm1->bindParam(':comment', $value);

$sttm1->execute();

	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles1.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

	<link rel="stylesheet" href="../css/login_styling1.css">
	<link rel="shortcut icon" href="img/logo_unique.png" type="image/x-icon">
	<style>
	#must {
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
	font-size: 50px;
    color: red;
	z-index: 999999999999999999999;
	font-family: var(--font);
	background: rgb(112, 105, 105);
	padding: 15px;
	border-radius: 12px;
	display: none;
}
@media (max-width: 400px) {
#must {
	width: 100%;
	font-size: 20px;
    text-align: center;
}
.nam {
	font-size: 20px
}
}

#append_here {
	
}

</style>
	<title>Chat</title>
</head>
<body>


<div id="clicker_remove"></div>

<div id="must"><a href="../register/register.php">Register</a> or <a href="../login/login.php">Login</a> For Talk</div>
	
    <nav>

		<div id="icon"><svg id="svgs" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="icon-sm" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg></div>

        <a href=""><img src="img/horizon.png" alt="logo" id="logo"></a>
		<a href=""><img src="img/logo_unique.png" alt="logo_media" id="logo_media"></a>
		

		<ul id="group_ul">

			<a class="tak" href="../index.php"><li class="list">Home</li></a><hr id="dis">
			<a class="tak" href="../projects/project.php"><li class="list">Project</li></a><hr id="dis">
			<a class="tak" href="../chat/"><li class="list current">Chat</li></a><hr id="dis">
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

	<div id="chat_kind">

        <div id="normal">University Chat</div>
        <div id="expection">Custom Friends</div>

    </div>

	<div id="members">
		<h1 id="title">Members</h1>




		<?php


try {
		
	$get_name = $conn->prepare("SELECT * FROM `users`");
	
	$get_name->execute();

	$last = $get_name->fetchAll(PDO::FETCH_ASSOC);


	foreach ($last as $column) {

		echo '
		<div class="mem">
		<img alt="" class="pho">
		<p class="nam">' . $column['username'] . '</p>
		</div>

		';
		
	}



} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
	</div>

    <div id="all">
        <form id="form_comment" method="POST">
             <input type="text" maxlength="70" placeholder="Type any thing..." name="comment" id="fr"> 

              <!-- <input type="submit" value="Send"  id="stop">  -->
			<input type="image" src="img/send.png" alt="Submit" id="stop">

        </form>
		<div id="bg"></div>

		<div id="append_here" style="padding-bottom: 60px;">


	
		</div>

    </div>




	<script src="mains.js"></script>
	<script src="../js/js_styling.js"></script>
	<script>

/*window.onload = function() {
    setTimeout(function() {
        // قم بالتمرير لأسفل بعد انتهاء التحميل بفترة زمنية
        window.scrollTo(0, document.body.scrollHeight);
    }, 100); // قم بتعديل الفترة الزمنية حسب احتياجاتك
}*/



	</script>
</body>
</html>
