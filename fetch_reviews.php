<?php
// $servername = "your_database_host";
$host = "localhost";  
$username = "root";
$password = "";
$dbname = "reviews";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="reviews">';
        echo '<p><strong>' . $row["name"] . '</strong> - Rating: ' . $row["rating"].'⭐'. '</p>';
        echo '<p>-:' . $row["comment"] . '</p>';
        echo '</div>';
        echo '<hr class="my-4 bg-dark">';
    }
} else {
    echo 'No reviews yet.';
}

$conn->close();
?>
