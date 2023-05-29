<?php

require "config.php";

try {
	$sql_items = "
		CREATE TABLE IF NOT EXISTS items (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			item_name VARCHAR(50) NOT NULL,
			item_desc VARCHAR(500) NOT NULL
		  );

	";
	$conn->exec($sql_items);
	echo "<li>Created users table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

