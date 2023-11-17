<?php 

require_once("../conection_updated.php");





try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'], $_POST['email'])) {

        $search_value = $_POST['username'];
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :search_value");
        $stmt->bindParam(':search_value', $search_value, PDO::PARAM_STR);
        $stmt->execute();
       // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        /*if ($result) {setcookie("err", "err", time() + (10 * 365 * 24 * 60 * 60), "/");} else {*/
            if ($stmt->rowCount() > 0) {
                setcookie("err", "err", 0, "/");
            } else {

setcookie("err", "err", time()-3600, "/");


 $stmt = $conn->prepare("INSERT IGNORE INTO users (username, passwords, email)
  VALUES (:username, :passwords, :email)");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':passwords', $password);
  $stmt->bindParam(':email', $email);

  // insert a row
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $stmt->execute();


  
  setcookie("username", $username, time() + (10 * 365 * 24 * 60 * 60), "/"); // 10 Years 
  setcookie("password", $password, time() + (10 * 365 * 24 * 60 * 60), "/"); // 10 Years 
  setcookie("email", $email, time() + (10 * 365 * 24 * 60 * 60), "/"); // 10 Years 

        
/* FOR SET THE TABLE ORDER BY USE THIS CODE :
SET @count = 0;
UPDATE `users` SET `id` = @count:= @count + 1;
ALTER TABLE `users` AUTO_INCREMENT = 1;
*/

header("Location: ../index.php");
exit();
}
}/* end of if insset the post field  */
}/*end of try*/catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
    $conn = null;



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="register.css">
	<link rel="shortcut icon" href="img/logo_unique.png" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<title>Register</title>
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
			<a href="../login/login.php"><li class="list">Log in</li></a><hr id="dis">
			<a href="../register/register.php"><li class="list current">Register</li></a><hr id="dis">

		</ul>

		<div id="burger">
			<span class="brg1"></span>
			<span class="brg2"></span>
			<span class="brg3"></span>
		</div>

    </nav> <!-- Close Nav -->

	<div id="all">


	<div id="field">

        <h1 id="tittle">Register</h1>

        <!--  -->

        <form method="POST" id="form">
            <div style="position: relative;">
                <input title="Type username" type="text" name="username" class="same_styling" id="username_field" required="required">
                <span class="plash">Create Username</span>
                <p id="checker_username">Create UserName Above!</p>
            </div>

            <div style="position: relative;">
                <input title="Type password" type="password" name="password" class="same_styling" id="password_field" required="required">
                <i class="fa-regular fa-eye fix" id="eye"></i>
                <i class="fa-regular fa-eye-slash fix slash" id="slash_eye"></i>
                <span class="plash">Create Password</span>
                <p id="checker_pass">Create UserName Above!</p>
            </div>

            <div style="position: relative;">
                <input title="Type Email" type="text" name="email" class="same_styling" id="email_field" required="required">
                <span class="plash">Type Email</span>
                <p id="checker_email">Type Email Above!</p>
            </div>

            <input type="submit" value="Register" id="submit">
            <p id="linking">You Have Account? <a href="../login/login.php" id="link_fixing">Login</a></p>
        </form>


    </div>


	</div>








	<script src="register.js"></script>
    <script>
if (document.cookie.split(';').some((item) => item.trim().startsWith('err='))) {
    console.log('is exist all');
    inner_txt.innerHTML = "This Name used Before";
    inner_txt.style.color = "red";
} else {
    console.log('not exist or both');
}

    </script>
</body>
</html>


