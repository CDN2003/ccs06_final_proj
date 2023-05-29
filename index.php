<?php

require "config.php";
require "src/items.php";

use App\User;
use App\item;

// Only logged in user should be able to open this page
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: login.php');
    exit();
}

$user = User::getById($_SESSION['user']['id']);
$foods = Item::list();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
    </head>
    <body>
        <h1>Welcome <?php echo htmlspecialchars($_SESSION['user']['fullname']); ?></h1>
        <!-- Properly escape the user's full name with htmlspecialchars -->

        <h2>Foods</h2>

        <table border="1" cellpadding="10" id="myTable">
            <tr>
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <?php foreach ($foods as $food) : ?>
                <tr>
                    <td><?php echo $food['category_name']; ?></td>
                    <td><?php echo $food['item_name']; ?></td>
                    <td><?php echo $food['item_desc']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="logout.php">LOGOUT</a>
    </body>
</html>

<hr />
<pre>
SESSION DATA

<?php
var_dump($_SESSION);
?>
</pre>