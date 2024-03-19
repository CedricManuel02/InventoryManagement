<?php

$currentFiles = basename($_SERVER['PHP_SELF']);
$name = '';

switch ($currentFiles) {
    case "Dashboard.php":
        $name = "Dashboard";
        break;
    case "Student.php":
        $name = "Student";
        break;
    case "UserManagement.php":
        $name = "User Management";
        break;
    default: 
        $name = "Page 404";
}

echo "<nav class='bg-white h-14 w-full px-5 fixed shadow z-10'>
<div class='flex items-center w-full h-full'>
    <div class='flex items-center gap-5'>
        <i class='fa-solid fa-bars cursor-pointer hover:text-blue-500'></i>
        <h3 class='font-medium'>$name</h3>
    </div>
</div>
</nav>";


?>