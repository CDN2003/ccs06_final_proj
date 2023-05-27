<?php

require "config.php";

try {
	$sql_category = "
		CREATE TABLE IF NOT EXISTS category (
			category_id INT(11) AUTO_INCREMENT PRIMARY KEY,
			name_name VARCHAR(50) NOT NULL,
		  );

	";
	$conn->exec($sql_users);
	echo "<li>Created users table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

