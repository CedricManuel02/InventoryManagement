<?php
$currentFile = basename($_SERVER['PHP_SELF']);
echo "
<div class='hidden z-20 w-full h-screen' id='modal-settings'>
<div class='block'>
    <div class='w-full h-screen absolute' style='background-color: rgb(0,0,0,0.8);'>
        <div class='h-full w-full flex items-center justify-center'>
            <div class='w-5/12 h-3/5 bg-white rounded-md px-5 py-2'>
                <form method='POST' action='../api/set_product.php' enctype='multipart/form-data' class='h-full flex flex-col justify-start'>
                    <header class='py-5 border-b border-b-slate-200 flex items-center justify-between'>
                        <h2 class='font-medium'>Settings</h2>
                        <i class='fa fa-close cursor-pointer hover:text-blue-500' id='cancelSettings'></i>
                    </header>
                    <div class='h-full w-full flex items-center py-5'>
                        <div class='w-44 h-full'>
                            <div class='flex items-center gap-3 py-2 px-4 rounded-md bg-[#EEE]'>
                                <i class='fa fa-gear text-slate-500'></i>
                                <h3 class='font-medium text-sm text-slate-500'>Settings</h3>
                            </div>
                        </div>
                        <div class='w-full h-full px-5'>
                            <div class='flex items-center border-b border-b-slate-200 py-4 justify-between'>
                                <div>
                                    <h3 class='font-medium text-sm text-slate-600'>Profile</h3>
                                    <small class='text-slate-400'>Manage your profile by updating information</small>
                                </div>
                                <button class='border text-sm rounded-md py-2 px-5 font-semibold text-slate-600'>Manage</button>
                            </div>
                            <div class='flex items-center border-b border-b-slate-200 py-4 justify-between'>
                                <h3 class='font-medium text-sm text-slate-600'>Change Password</h3>
                                <button class='border text-sm rounded-md py-2 px-5 font-semibold text-slate-600'>Change</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div>
    <div class='relative w-64 h-full'>
        <aside class='w-64 h-full py-5 px-2 bg-[#171717] flex flex-col justify-between fixed'>
            <header class='py-5 px-2 flex items-center gap-5'>
                <img class='w-10 h-10 object-cover rounded' src='https://api.dicebear.com/7.x/initials/svg?seed=Felix' alt='profile' />
                <div class='text-white'>
                    <h3 class='text-sm'>Jhon Doe</h3>
                    <p class='text-sm text-slate-400'>Admin</p>
                </div>
            </header>
            <ul class='h-full py-5'>
                <li class='py-3 px-5 my-2' . ($currentFile == 'Student.php' ? ' bg-[#2F2F2F] rounded-md' : '') . ''><a href='./Student.php' class='flex items-center gap-2 justify-start text-sm font-medium text-slate-300 hover:text-white'><i class='w-5 fa-solid fa-plus'></i>Student</a></li>
            </ul>
            <div class='py-5 border-t border-t-[#2F2F2F]'>
                <button type='button' id='openSettings' class='py-3 px-5 flex items-center gap-5 hover:bg-[#2F2F2F] w-full rounded-md'>
                    <i class='fa-solid fa-gear text-white'></i>
                    <h3 class='text-slate-300'>Settings</h3>
                </button>
                <button type='button' class='py-3 px-5 flex items-center gap-5 hover:bg-[#2F2F2F] w-full rounded-md'>
                    <i class='fa-solid fa-arrow-right-from-bracket text-white'></i>
                    <h3 class='text-slate-300'>Log out</h3>
                </button>
            </div>
        </aside>
    </div>
</div>
";
?>
