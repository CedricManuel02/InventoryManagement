<?php
include "../database/connection.php";
// Get the input from the user
$input = $_GET['query'];

// Perform a database query to get suggestions based on the input
// This is a simplified example, you should sanitize and validate user input before using it in a query
$query = "SELECT * FROM tbl_student WHERE learner_reference_number LIKE '%$input%' LIMIT 5";
$result = mysqli_query($connection, $query);

// Return the suggestions as JSON
$suggestions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $suggestions[] = $row;
}
echo json_encode($suggestions);
?>
