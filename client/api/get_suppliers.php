<?php
    include "../database/connection.php";
    $query = "SELECT supplierID, supplierName FROM tbl_supplier"; // query string
    $result = mysqli_query($connection, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row["supplierID"] . '">' . $row["supplierName"] . '</option>';
        }
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>