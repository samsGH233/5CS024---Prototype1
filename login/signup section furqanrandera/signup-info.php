<?php

// Here is how I retrieved the data from the HTML signup form
$Username = $_POST['Username'];
$dropdown = $_POST['dropdown'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Here is where the database analyst will put his details to connect to his phpmyadmin database.
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


// Here is just a message incase the connection to the database fails
if (mysqli_connect_error()) {
    echo "Could not connect to MySQL database: " . $mysqli -> connect_error;
} else {
    
}

?>