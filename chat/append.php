<?php 

require_once("../conection_updated.php");

	
	try {
		
		$stmt = $conn->prepare("SELECT * FROM `comments`");
		
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


		foreach ($result as $row) {
			$color = isset($_COOKIE['username']) && $_COOKIE['username'] === $row['names'] ? "color: red;" : "";

            echo '
			
			<div class="mess">
			<div class="profile">
				<span class="flex_pr">
					<img  alt="" class="photo">
					<span>
						<p class="name" style=" '. $color .'" >' . $row['names'] . '</p>
						<p class="date">' . $row['date'] . '</p>
					</span>
				</span>
			</div>

			<p class="content">' . $row['comment'] . '</p>
		</div>


		<hr class="space">
			
		';
        }



	
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
}
	
	?>

			