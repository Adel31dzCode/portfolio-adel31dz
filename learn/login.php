

<form method="POST">

<input type="text" name="search_name">
<input type="submit">

</form>

<script>



</script>

<?php



require_once("connection.php");


try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_name'])) {

        $search_value = $_POST['search_name'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :search_value");
        $stmt->bindParam(':search_value', $search_value, PDO::PARAM_STR);

        $stmt->execute();

       
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "success: Id is: " . $result['id'] . " username is: " . $result['username'] . " email is: " . $result['email'];
            setcookie("id" ,$result['id']);
            setcookie("username" ,$result['username']);
            setcookie("email" ,$result['email']);
        } else {
            echo "لا يوجد تطابق.";
        }
    }
} catch (PDOException $e) {
    echo "خطأ: " . $e->getMessage();
}






  ?>
