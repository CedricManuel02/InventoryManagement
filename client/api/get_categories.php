<?php
include "../database/connection.php";

// Query to fetch data from the database
$query = "SELECT categoryID, category FROM tbl_categories";
$result = mysqli_query($connection, $query);

if ($result) {
    echo '<select name="category" id="category" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>';
    echo '<option value="" selected disabled>Select a category</option>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row["categoryID"] . '">' . $row["category"] . '</option>';
    }
    echo '</select>';
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
