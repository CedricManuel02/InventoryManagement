<?php
include "../database/connection.php";

$input = $_GET['query'];

// Query to fetch data from the database
$query = "SELECT tbl_subject.subject_id, tbl_subject.subject_name FROM tbl_strand INNER JOIN tbl_subject ON tbl_subject.strand_id = tbl_strand.strand_id WHERE tbl_subject.strand_id = $input";
$result = mysqli_query($connection, $query);

// Return the subject as JSON
$subject = [];
while ($row = mysqli_fetch_assoc($result)) {
    $subject[] = $row;
}
echo json_encode($subject);
?>
