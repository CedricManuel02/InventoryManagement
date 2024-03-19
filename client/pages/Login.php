<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login | Inventory Management</title>
</head>

<body>
    <main class="w-full h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat bg-[url('https://upload.wikimedia.org/wikipedia/commons/3/32/St._La_Salle_Hall_Facade.JPG')] relative before:absolute before:bg-[rgba(0,0,0,0.8)] before:z-10 before:w-full before:h-screen">
        <section class="bg-white text-slate-800 z-20 relative w-3/12 h-auto px-5 py-10  rounded-md shadow-md ">
            <header class="py-2">
                <h1 class="font-semibold text-blue-500 text-center text-xl">Welcome Back!</h1>
            </header>
            <?php
            if (isset($_GET["error"])) { ?>
                <p class="error"><?php echo $_GET["error"]; ?></p>
            <?php } ?>
            <form class="flex flex-col justify-center" action="../../server/auth/Login.php" method="POST">
                <div class="py-2 flex items-center gap-2 justify-between">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="email" class="text-sm">Email</label>
                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="email" name="email" type="email" placeholder="Enter email" required autofocus>
                    </div>
                </div>
                <div class="py-2 flex items-center gap-2 justify-between">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="password" class="text-sm">Password</label>
                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="password" name="password" type="password" placeholder="Enter password" required>
                    </div>
                </div>
                <div class="flex items-center justify-between py-3">
                    <div class="flex items-center gap-2">
                        <label for="remember-me" class="text-sm cursor-pointer">
                            Remember me?
                        </label>
                        <input type="checkbox" name="rememberMe" id="remember-me">
                    </div>
                    <a  class="text-blue-500 underline text-sm my-2" href="#">Forgot Password?</a>
                </div>
                <button class="bg-blue-500 py-2 font-semibold rounded-md text-white" type="submit">Login</button>
            </form>
            <p class="py-5 text-center text-sm">Don't have an account? <a class="text-blue-500 underline" href="./Register.php">Register</a></p>
        </section>
    </main>
</body>

</html>