<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Student | Inventory System</title>
</head>

<body>
    <div class="flex min-h-screen h-auto shadow">
        <!--Modal Components-->
        <div class="hidden z-20 w-full h-screen" id="modal-product">
            <div class="w-full h-screen absolute" style="background-color: rgb(0,0,0,0.8);">
                <div class="h-full w-full flex items-center justify-center">
                    <div class="w-5/12 h-auto bg-white rounded-md px-5 py-2">
                        <form method="POST" action="../api/set_student.php" enctype="multipart/form-data" class="h-full flex flex-col justify-between">
                            <header class="py-5 flex items-center justify-between">
                                <div>
                                <h2 class="font-medium">Add Student</h2>
                                <small class="text-sm text-slate-400">Create a student information</small>
                                </div>
                                <i class="fa fa-close cursor-pointer hover:text-blue-500" id="cancelModal"></i>
                            </header>
                            <div class="h-full w-full">
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentLRN" class="text-sm">Learner Reference Number (LRN)</label>
                                        <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="studentLRN" name="studentLRN" type="number" placeholder="Enter LRN (12 Digit Number)" required autofocus>
                                    </div>
                                    <div class="flex w-96 flex-col gap-2">
                                        <label for="academicYear" class="text-sm">Academic Year</label>
                                        <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="academicYear" name="academicYear" type="text" placeholder="Ex. 2020-2021" required autofocus>
                                    </div>
                                </div>      
                                <div class="py-2 font-medium text-sm">
                                    <h3>Enrolled To:</h3>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="strandID" class="text-sm">Select Strand</label>
                                        <select name="strandID" id="strandID" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>
                                            <option value="" selected disabled>Select</option>
                                            <?php
                                                include "../api/get_strand.php";
                                            ?>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="gradeLevel" class="text-sm">Select Level</label>
                                        <select name="gradeLevel" id="gradeLevel" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>
                                            <option value="" selected disabled>Select</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="sectionID" class="text-sm">Select Section</label>
                                        <select name="sectionID" id="sectionID" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>
                                            <option value="" selected disabled>Select</option>
                                            <?php
                                                include "../api/get_section.php";
                                            ?>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentFirstName" class="text-sm">First Name</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentFirstName" name="studentFirstName" type="text" placeholder="Enter first name" required>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentLastName" class="text-sm">Last Name</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentLastName" name="studentLastName" type="text" placeholder="Enter last name" required>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentMiddleName" class="text-sm">Middle Name</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentMiddleName" name="studentMiddleName" type="text" placeholder="Optional">
                                    </div>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentBirthdate" class="text-sm">Birthdate</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentBirthdate" name="studentBirthdate" type="date" required>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentGender" class="text-sm">Gender</label>
                                        <select name="studentGender" id="studentGender" class="w-full py-2 px-3 border rounded cursor-pointer focus:outline-blue-300" required>
                                            <option value="" selected disabled>Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentContact" class="text-sm">Contact</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentContact" name="studentContact" placeholder="Enter your contact number" type="tel" required>
                                    </div>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="studentAddress" class="text-sm">Address</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="studentAddress" name="studentAddress" placeholder="Enter your address" type="text" required>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="flex items-center justify-end py-5">
                                <button type="submit" class="py-2 px-5 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-500">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Components-->
        <?php
        include "../components/Sidebar.php";
        ?>
        <section class="w-full h-auto bg-slate-200">
            <?php
                include "../components/Navbar.php";
            ?>
            <div class="px-5 py-20">
                <div class="bg-slate-100 px-3 py-5 rounded-md my-5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-end gap-2">
                            <select class="py-2 px-5 border border-slate-500 text-slate-500 font-normal rounded-md focus:border-blue-500">
                                <option value="" selected>Sort by</option>
                                <option value="Name">Sort by Name</option>
                                <option value="Stock">Sort by Gender</option>
                            </select>
                            <button type="button" id="openModal" class="py-2 px-5 bg-blue-600 text-white font-normal rounded-md hover:bg-blue-500">Add Student</button>
                            <form action="../pdf/export_product.php" method="POST">
                                <button type="submit" class="py-2 px-5 bg-blue-600 text-white font-normal rounded-md hover:bg-blue-500">Export</button>
                            </form>
                        </div>
                        <div class="flex items-center gap-2">
                            <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" type="text" placeholder="Search..." required>
                            <button class="py-2 px-5 bg-blue-600 text-white font-normal rounded-md hover:bg-blue-500">Search</button>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-x-auto rounded-md overflow-none">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-700 uppercase bg-slate-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Strand
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Section
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Grade Level
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date Enrolled
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "../api/get_student.php";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>