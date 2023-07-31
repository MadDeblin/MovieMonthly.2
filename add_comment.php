<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$userID = ''; // Set the appropriate value for UserID if needed
$commentID = ''; // Set the appropriate value for CommentID if needed
$username = $_POST['name'];
$usercomment = $_POST['comment'];
$dateTime = date('Y-m-d H:i:s'); // Assuming you want to store the current date and time

// Insert comment into the database
$sql = "INSERT INTO mmcomment (UserID, CommentID, Username, Usercomment, Datetime)
        VALUES ('$userID', '$commentID', '$username', '$usercomment', '$dateTime')";

if ($conn->query($sql) === TRUE) {
    header("Location: mmfilm.php?status=success");
    exit;
} else {
    header("Location: mmfilm.php?status=error");
    exit;
}


// Close the database connection
$conn->close();
?>
