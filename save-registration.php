<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
	


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$errors = [];
	
		// Validate first name
		$first_name = trim($_POST['first_name']);
		if (empty($first_name)) {
			$errors[] = "First name is required.";
		}
	
		// Validate last name
		$last_name = trim($_POST['last_name']);
		if (empty($last_name)) {
			$errors[] = "Last name is required.";
		}
	
		// Validate email
		$email = trim($_POST['email']);
		if (empty($email)) {
			$errors[] = "Email address is required.";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Invalid email format.";
		}
	
		// Validate password
		$password = trim($_POST['password']);
		if (empty($password)) {
			$errors[] = "Password is required.";
		} elseif (strlen($password) < 8) {
			$errors[] = "Password must be at least 8 characters.";
		}
	
		// Validate confirm password
		$confirm_password = trim($_POST['confirm_password']);
		if (empty($confirm_password)) {
			$errors[] = "Confirm password is required.";
		} elseif ($password !== $confirm_password) {
			$errors[] = "Passwords do not match.";
		}
	
		// Validate address
		$address = trim($_POST['address']);
		if (empty($address)) {
			$errors[] = "Address is required.";
		}
	
		// Validate contact number
		$contact_number = trim($_POST['contact_number']);
		if (empty($contact_number)) {
			$errors[] = "Contact number is required.";
		}
	
		// If there are no errors, process the form data
		if (empty($errors)) {
				$result = User::register($first_name, $last_name, $email, $password, $address, $contact_number);
		
				if ($result) {
		
					// Set the logged in session variable and redirect user to index page
		
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user'] = [
						'id' => $result,
						'fullname' => $first_name . ' ' . $last_name,
						'email' => $email
					];
					header('Location: index.php');
				}
			}else{
				header('Location: register.php');
			}
		}
	
} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

