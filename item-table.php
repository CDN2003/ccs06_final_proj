<?php

require "config.php";

try {
	$sql_items = "
		CREATE TABLE IF NOT EXISTS items (
			id INT(11) AUTO_INCREMENT PRIMARY KEY,
			item_name VARCHAR(50) NOT NULL,
			category_id VARCHAR(20)
            FOREIGN KEY (category_id) REFERENCES (category)
		  );

	";
	$conn->exec($sql_users);
	echo "<li>Created users table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

