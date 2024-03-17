<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login | Inventory Management</title>
</head>
<body>
    <main>
        <section>
            <header>
                <h1>Welcome Back!</h1>
            </header>
            <?php
            if (isset($_GET["error"])) { ?>
                <p class="error"><?php echo $_GET["error"]; ?></p>
            <?php } ?>
            <form action="../../server/auth/Login.php" method="POST">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" autofocus>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password">
                <button class="btn-primary text-white" type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="./Register.php">Register</a></p>
        </section>
    </main>
</body>

</html>