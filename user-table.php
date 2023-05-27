<?php

require "config.php";

try {
	$sql_users = "
		CREATE TABLE IF NOT EXISTS users (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			first_name VARCHAR(50) NOT NULL,
			last_name VARCHAR(50) NOT NULL,
			email VARCHAR(100) NOT NULL,
			password VARCHAR(500) NOT NULL,
			address VARCHAR(255),
			contact_number VARCHAR(20)
		  );

	";
	$conn->exec($sql_users);
	echo "<li>Created users table";

	// $sql_posts = "
	// 	CREATE TABLE IF NOT EXISTS posts (
	// 		id INT AUTO_INCREMENT PRIMARY KEY,
	// 		post_message VARCHAR(500) NOT NULL,
	// 		user_id INT,
	// 		created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	// 		FOREIGN KEY (user_id) REFERENCES users(id)
	// 	)
	// ";
	// $conn->exec($sql_posts);
	// echo "<li>Created posts table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

