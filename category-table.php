<?php

require "config.php";

try {
	$sql_category = "
		CREATE TABLE IF NOT EXISTS category (
			category_id INT(11) AUTO_INCREMENT PRIMARY KEY,
			category_name VARCHAR(50) NOT NULL,
			category_desc VARCHAR(500) NOT NULL
		  );

	";
	$conn->exec($sql_category);
	echo "<li>Created users table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

