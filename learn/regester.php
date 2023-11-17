

<form method="POST">

<input type="text" name="user">
<input type="text" name="pass">
<input type="submit">

</form>

<?php



require_once("connection.php");

  try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST'  && $_POST['user'] && $_POST['pass']) {

      $stmt = $conn->prepare("INSERT INTO users (id, username, email) VALUES (:id, :username, :email)");
    
    $id = "";
    $username = $_POST['user'];
    $email = $_POST['pass'];


    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);

    $stmt->execute();
    echo "ok effectted";
    header("Location: register.php");
    }
    
  } catch(PDOException $e) {
      echo "خطأ: " . $e->getMessage();
  }
  ?>