<?php
include "../database/connection.php";

// Query to fetch data from the database
$query = "SELECT strand_id, strand_name FROM tbl_strand";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row["strand_id"] . '">' . $row["strand_name"] . '</option>';
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
