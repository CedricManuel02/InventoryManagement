<?php
include "../database/connection.php";

// Query to fetch data from the database
$query = "SELECT tbl_subject.subject_id, tbl_subject.subject_name FROM tbl_strand INNER JOIN tbl_subject ON tbl_subject.strand_id = tbl_strand.strand_id;";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row["subject_id"] . '">' . $row["subject_name"] . '</option>';
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
