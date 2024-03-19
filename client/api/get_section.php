<?php
include "../database/connection.php";

// Query to fetch data from the database
$query = "SELECT section_id, section_name FROM tbl_section";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row["section_id"] . '">' . $row["section_name"] . '</option>';
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
