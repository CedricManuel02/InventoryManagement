<?php
// including the sql connection

include "../database/connection.php";


if (isset($_POST["email"]) && isset($_POST["password"])) {

    // function for validating the data //
    function validateData($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // creating a variable and validate each value
    $email = validateData($_POST["email"]);
    $password = validateData($_POST["password"]);

    // Check if the email is empty
    if (empty($email)) {
        header("Location: ../../client/pages/login.php?error=Email is required");
        exit();
    }
    // Check if the password is empty
    else if (empty($password)) {
        header("Location: ../../client/pages/login.php?error=Password is required");
        exit();
    }
    // if both password and email are not empty it displays a message
    else {
        $query = "SELECT * FROM tbl_user";

        $response = mysqli_query($connection, $query);

        if (mysqli_num_rows($response)) {
            echo "Hello";
        }
    }
} else {
    header("Location: ../../client/pages/login.php");
    exit();
}
