<?php
include "../database/connection.php";

if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["retype-password"])){
    // functions to validate the data 
    function validateData($data){
        return htmlspecialchars(stripslashes(trim($data)));
    }
    // assigning all data into a variable
    $email = validateData($_POST["email"]);
    $password = validateData($_POST["password"]);
    $retypepassword = validateData($_POST["retype-password"]);
    if(empty($email)){
        header("Location: ../../client/pages/register.php?error=Email is required");
        exit();
    }
    else if(empty($password)){
        header("Location: ../../client/pages/register.php?error=Password is required");
        exit(); 
    }
    else if($password !== $retypepassword){
        header("Location: ../../client/pages/register.php?error=Password does not match");
        exit();
    }
    else{
        $query = "INSERT INTO tbl_user VALUES (null, '$email', '$password', NOW(), null)";

        $response = mysqli_query($connection, $query);

        if($response){
            echo "Successfully registered";
        }
        else{
            echo "Failed to registerd" . mysqli_error($connection);
        }

        mysqli_close($connection);
    }
}
else{
    header("Location: ../../client/pages/register.php");
    exit();
}
?>