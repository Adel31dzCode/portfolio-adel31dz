<?php

require_once("../conection_updated.php");

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_user'], $_POST['search_pass'])) {

		$user_value = $_POST['search_user'];
		$pass_value = $_POST['search_pass'];
		
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = :user_value AND passwords = :pass_value");
		
		$stmt->bindParam(':user_value', $user_value, PDO::PARAM_STR);
		$stmt->bindParam(':pass_value', $pass_value, PDO::PARAM_STR);
		
		$stmt->execute();

       
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
			//setcookie("true", "true", time() + (10 * 365 * 24 * 60 * 60), "/");
			
            setcookie("username", $result['username'], time() + (10 * 365 * 24 * 60 * 60), "/");
			setcookie("password", $result['passwords'], time() + (10 * 365 * 24 * 60 * 60), "/");
			setcookie("email", $result['email'], time() + (10 * 365 * 24 * 60 * 60), "/");
			setcookie("fl", "fl", time() - 3600 , "/");
			header("Location: ../index.php");
			exit();
        } else {
			setcookie("fl", "fl",time() + (10 * 365 * 24 * 60 * 60) , "/");
        }
    }
} catch (PDOException $e) {
    echo "خطأ: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<link rel="shortcut icon" href="img/logo_unique.png" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<title>Login</title>
</head>
<body>

<div id="clicker_remove"></div>

<nav>


        <a href=""><img src="img/horizon.png" alt="logo" id="logo"></a>
		<a href=""><img src="img/logo_unique.png" alt="logo_media" id="logo_media"></a>
		

		<ul id="group_ul">

			<a href="../index.php"><li class="list">Home</li></a><hr id="dis">
			<a href="../projects/project.php"><li class="list">Project</li></a><hr id="dis">
			<a href="../chat/index.php"><li class="list">Chat</li></a><hr id="dis">
			<a href="../login/login.php"><li class="list  current">Log in</li></a><hr id="dis">
			<a href="../register/register.php"><li class="list">Register</li></a><hr id="dis">

		</ul>

		<div id="burger">
			<span class="brg1"></span>
			<span class="brg2"></span>
			<span class="brg3"></span>
		</div>

    </nav> <!-- Close Nav -->

	<div id="all">


	<div id="field">

        <h1 id="tittle">Login</h1>

        <!--  -->

        <form method="POST" id="form">
            <div style="position: relative;">
                <input title="Type username" type="text" name="search_user" class="same_styling" id="username_field" required="required">
                <span class="plash">Enter Username</span>
                <p id="checker_username">Enter Username Above!</p>
            </div>

            <div style="position: relative;">
                <input title="Type password" type="password" name="search_pass" class="same_styling" id="password_field" required="required">
                <i class="fa-regular fa-eye fix" id="eye"></i>
                <i class="fa-regular fa-eye-slash fix slash" id="slash_eye"></i>
                <span class="plash">Enter Password</span>
                <p id="checker_pass">Enter Password Above!</p>
            </div>



            <input type="submit" value="Register" id="submit">
            <p id="linking">You Don't Have Account? <a href="../register/register.php" id="link_fixing">Register</a></p>
        </form>


    </div>


	</div>








	<script src="login1.js"></script>

</body>
</html>
