<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM signup WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homePage.php</title>
</head>
<body>

<!-- The code here will need to be dragged into the actual homePage.php file.

Step 1:
Drag the php code from the top.

Step 2:
Also take the php code from...

-->

    <h1>Home Page</h1>

<!-- Here to... -->

    <?php if (isset($user)): ?>

        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>

        <p><a href="logout.php">Log out</a></p>

    <?php endif; ?>

<!-- Here! to show the actual name of the user and the logout link. -->

<!-- Also make sure to delete this file once you have copied this code into the ACTUAL homepage. -->

</body>
</html>