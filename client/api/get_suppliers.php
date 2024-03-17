<?php
    include "../database/connection.php";
    $query = "SELECT supplierID, supplierName FROM tbl_supplier"; // query string
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo '<select name="category" id="category" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>';
        echo '<option value="" selected disabled>Select a supplier</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row["supplierID"] . '">' . $row["supplierName"] . '</option>';
        }
        echo '</select>';
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>