<?php
include "../database/connection.php";

$query = "SELECT
            tbl_student.student_first_name,
            tbl_student.student_last_name,
            tbl_student.student_middle_name,
            tbl_academic_year.gradeLevel,
            tbl_academic_year.date_enrolled,
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
            ";
$result = mysqli_query($connection, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Fetching and displaying data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='bg-white border-b'>
                    <th scope='row' class='flex items-center gap-5 px-6 py-4 font-medium text-slate-600 whitespace-nowrap'>
                        " . $row["student_last_name"] . ", ". $row["student_first_name"] . " " . substr($row["student_middle_name"], 0 , 1)  . "
                    </th>
                    <td class='px-6 py-4 text-slate-400'>".$row["strand_name"]."</td>
                    <td class='px-6 py-4 text-slate-400'>".$row["section_name"]."</td>
                    <td class='px-6 py-4 text-slate-400'>".$row["gradeLevel"]."</td>
                    <td class='px-6 py-4 text-slate-400'>". date('M d, Y', strtotime($row["date_enrolled"])) ."</td>
                    <td class='px-6 py-4'>
                        <button class='text-blue-400 hover:underline mx-1'>View</button>
                        <button class='text-blue-400 hover:underline mx-1'>Edit</button>
                        <button class='text-blue-400 hover:underline mx-1'>Delete</button>
                    </td>
                  </tr>";
        }
    } else {
        // No data found
        echo "<tr class='bg-white border-b'><td colspan='6' class='py-3 text-center text-slate-400'>No data</td></tr>";
    }
    mysqli_free_result($result);
} else {
    // Error handling
    echo "<tr><td colspan='6'>Error: " . mysqli_error($connection) . "</td></tr>";
}

mysqli_close($connection);
