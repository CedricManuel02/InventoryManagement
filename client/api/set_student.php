<?php
include "../database/connection.php";

if (
    isset($_POST["studentLRN"]) &&
    isset($_POST["academicLevel"]) &&
    isset($_POST["studentFirstName"]) &&
    isset($_POST["studentLastName"]) ||
    isset($_POST["studentMiddleName"]) &&
    isset($_POST["studentBirthdate"]) &&
    isset($_POST["studentGender"]) &&
    isset($_POST["studentContact"]) &&
    isset($_POST["studentAddress"]) &&
    isset($_POST["strandID"]) && 
    isset($_POST["sectionID"]) &&
    isset($_POST["gradeLevel"])
) {

    // function for validating student data
    function validateData($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Validate the student information
    $student_lrn = validateData($_POST["studentLRN"]);
    $student_first_name = validateData($_POST["studentFirstName"]);
    $student_last_name = validateData($_POST["studentLastName"]);
    $student_middle_name = validateData($_POST["studentMiddleName"]);
    $student_birthdate = validateData($_POST["studentBirthdate"]);
    $student_gender = validateData($_POST["studentGender"]);
    $student_contact = validateData($_POST["studentContact"]);
    $student_address = validateData($_POST["studentAddress"]);

    $academic_year = validateData($_POST["academicYear"]);
    $strand_id = validateData($_POST["strandID"]);
    $section_id = validateData($_POST["sectionID"]);
    $grade_level = validateData($_POST["gradeLevel"]);

    if (empty($student_first_name)) {
        header("Location: ../../client/pages/student.php?error=First Name is required");
        exit();
    } else if (empty($student_last_name)) {
        header("Location: ../../client/pages/student.php?error=Last Name is required");
        exit();
    } else if (empty($student_birthdate)) {
        header("Location: ../../client/pages/student.php?error=Birthdate is required");
        exit();
    } else if (empty($student_gender)) {
        header("Location: ../../client/pages/student.php?error=Gender is required");
        exit();
    } else if (empty($student_contact)) {
        header("Location: ../../client/pages/student.php?error=Contact is required");
        exit();
    } else if (empty($student_address)) {
        header("Location: ../../client/pages/student.php?error=Address is required");
        exit();
    }
    else if (empty($academic_year)) {
        header("Location: ../../client/pages/student.php?error=Academic year is required");
        exit();
    } 
    else if (empty($strand_id)) {
        header("Location: ../../client/pages/student.php?error=Strand is required");
        exit();
    } 
    else if (empty($section_id)) {
        header("Location: ../../client/pages/student.php?error=Section is required");
        exit();
    } 
    else if (empty($grade_level)) {
        header("Location: ../../client/pages/student.php?error=Grade Level is required");
        exit();
    } 
    
    
    else {
        $query = "INSERT INTO tbl_student VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, 0, NOW(), null, null)";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "ssssssss", $student_lrn, $student_first_name, $student_middle_name, $student_last_name, $student_birthdate, $student_gender, $student_contact, $student_address);
        $success = mysqli_stmt_execute($stmt);
    
        if ($success) {
            $student_id = mysqli_insert_id($connection); // Get the auto-generated student_id
    
            $query = "INSERT INTO tbl_academic_year VALUES (null, ?, ?, ?, ?, ?, NOW())";
            $stmt = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt, "iiiss", $section_id, $strand_id, $student_id, $grade_level, $academic_year);
            $success = mysqli_stmt_execute($stmt);
    
            if ($success) {
                header("Location: ../../client/pages/student.php?success=Student added successfully");
                exit();
            } else {
                header("Location: ../../client/pages/student.php?error=Failed to add student's academic year");
                exit();
            }
        } else {
            header("Location: ../../client/pages/student.php?error=Failed to add student");
            exit();
        }
    }
    
} else {
    header("Location: ../../client/pages/student.php?error=Product data not found");
    exit();
}
