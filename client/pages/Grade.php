<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../styles/Layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Student | Inventory System</title>
</head>
<body>
    <div class="flex min-h-screen h-auto shadow">

        <!--Main Components-->
        <?php
        include "../components/Sidebar.php";
        ?>
        <section class="w-full h-auto bg-slate-200">
            <?php
            include "../components/Navbar.php";
            ?>
            <div class="px-5 py-20">
                <div class="relative bg-white px-10 py-5 overflow-x-auto rounded-md overflow-none">
                    <form method="POST" class="h-full flex flex-col justify-between">
                        <header class="py-5 flex flex-col justify-between">
                            <h2 class="font-medium">Create Grade</h2>
                            <small class="text-sm text-slate-400">Create a student grade</small>
                        </header>
                        <div class="h-full w-full">
                            <div class="py-2 flex items-center gap-2 justify-between relative">
                                <div class="w-full">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="searchStudent" class="text-sm">Learner Reference Number (LRN)</label>
                                        <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="searchStudent" type="number" placeholder="Enter LRN (12 Digit Number)" required autofocus>
                                    </div>
                                    <div id="searchBar" class="hidden z-20 bg-white absolute max-h-44 top-20 w-full rounded-lg shadow overflow-hidden overflow-y-auto">

                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <label for="subjectGrade" class="text-sm">Student Name</label>
                                    <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentName" name="studentName" type="text" disabled>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <label for="subjectGrade" class="text-sm">Strand</label>
                                    <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="strandName" type="text" disabled>
                                </div>
                            </div>
                            <div class="py-2 flex items-center gap-2 justify-between relative">
                                <div class="w-full">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="searchStudent" class="text-sm">Section</label>
                                        <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="sectionName" type="text" disabled>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <label for="subjectGrade" class="text-sm">Grade Level</label>
                                    <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="gradeLevel" type="text" disabled>
                                </div>

                                <div class="flex flex-col gap-2 w-full">
                                    <label for="subjectGrade" class="text-sm">Semester</label>
                                    <select name="studentGender" id="studentGender" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="Male">First Semester</option>
                                        <option value="Female">Second Semester</option>
                                    </select>
                                </div>
                            </div>
                            <div id="subjectDiv" class="hidden">
                                <div class="py-2 font-medium text-sm">
                                    <h3>Subject:</h3>
                                </div>
                                <div class="py-2 flex items-end gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="subjectName" class="text-sm">Subject Name</label>
                                        <select name="subjectList" id="subjectList" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>
                                           
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="subjectGrade" class="text-sm">Final Grade</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="subjectGrade" name="subjectGrade" type="text" pattern="\d+(\.\d{1,2})?" title="Please enter a valid decimal number (up to 2 decimal places)" required>
                                    </div>
                                    <div class="flex items-center w-auto">
                                        <button type="button" id="addGradeButton" class="py-2 px-5 bg-blue-600 text-white font-normal rounded-md hover:bg-blue-500">Create</button>
                                    </div>
                                </div>
                                <div id="gradedDiv">
                                
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end py-10">
                            <button type="submit" class="py-2 px-5 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-500">Generate PDF</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="../js/grade.js"></script>
</body>
</html>