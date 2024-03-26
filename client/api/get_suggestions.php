<?php
include "../database/connection.php";
// Get the input from the user
$input = $_GET['query'];

// Perform a database query to get suggestions based on the input
// This is a simplified example, you should sanitize and validate user input before using it in a query
$query = "SELECT
tbl_student.student_id,
tbl_student.student_first_name,
tbl_student.learner_reference_number,
tbl_student.student_last_name,
tbl_student.student_middle_name,
tbl_academic_year.gradeLevel,
tbl_strand.strand_id,
tbl_strand.strand_name,
tbl_section.section_name
FROM
tbl_student
INNER JOIN
tbl_academic_year ON tbl_student.student_id = tbl_academic_year.student_id
INNER JOIN
tbl_strand ON tbl_academic_year.strand_id = tbl_strand.strand_id
INNER JOIN
tbl_section ON tbl_academic_year.section_id = tbl_section.section_id
WHERE tbl_student.learner_reference_number LIKE '%$input%'
ORDER BY tbl_academic_year.date_enrolled DESC
LIMIT 1";
$result = mysqli_query($connection, $query);

// Return the suggestions as JSON
$suggestions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $suggestions[] = $row;
}
echo json_encode($suggestions);
?>
