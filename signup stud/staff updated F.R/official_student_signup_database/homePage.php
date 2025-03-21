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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
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

    <!-- This is the events table copy this too into the homepage. -->

        <h2>Events you are currently attending.</h2>

        <?php 
        
        $sql = "SELECT app_events.Course, app_events.Time, app_events.Information, app_events.Room_Number
        FROM signup
        JOIN app_events ON signup.Event = app_events.Event_ID
        WHERE signup.id = {$_SESSION["user_id"]}";

        $result = $mysqli->query($sql);
        ?>

        <?php if ($result->num_rows > 0): ?>
            <table border="1">
                <tr>
                    <th>Course</th>
                    <th>Time</th>
                    <th>Information</th>
                    <th>Room Number</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['Course']) ?></td>
                        <td><?= htmlspecialchars($row['Time']) ?></td>
                        <td><?= htmlspecialchars($row['Information']) ?></td>
                        <td><?= htmlspecialchars($row['Room_Number']) ?></td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>You are currently attending no events.</p>
        <?php endif; ?>
</body>
</html>