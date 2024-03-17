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
    <title>Dashboard | Inventory System</title>
</head>

<body>
    <div class="flex min-h-screen h-auto shadow">

        <!--Modal Components-->
        <div class="hidden z-20 w-full h-screen" id="modal-product">
            <div class="w-full h-screen absolute" style="background-color: rgb(0,0,0,0.8);">
                <div class="h-full w-full flex items-center justify-center">
                    <div class="w-4/12 h-auto bg-white rounded-md px-5 py-2">
                        <form method="POST" class="h-full flex flex-col justify-between">
                            <header class="py-5">
                                <h2 class="font-medium">Add Product</h2>
                                <small class="text-sm text-slate-400">Create your product</small>
                            </header>
                            <div class="h-full w-full">
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="productName" class="text-sm">Product Name</label>
                                        <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="productName" name="productName" type="text" placeholder="Enter name" required autofocus>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="productName" class="text-sm">Price</label>
                                        <input class="w-full py-2 px-3 border rounded appearance-none focus:outline-blue-300" id="productName" name="productName" type="number" min="0" placeholder="Enter price" required>
                                    </div>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <img class='w-10 h-10 object-cover rounded-md shadow-md' src='https://d1rlzxa98cyc61.cloudfront.net/catalog/product/cache/1801c418208f9607a371e61f8d9184d9/1/7/179919_2020_5.jpg' alt='product' />
                                    <input class="w-full py-2 px-3 border rounded focus:outline-blue-300" id="productName" name="productName" accept="image/*" type="file" required>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="categories" class="text-sm">Category</label>
                                        <?php
                                        include("../api/get_categories.php");
                                        ?>
                                    </div>
                                </div>
                                <div class="py-2 flex items-center gap-2 justify-between">
                                    <div class="flex flex-col gap-2 w-full">
                                        <label for="supplier" class="text-sm">Supplier</label>
                                        <?php
                                        include("../api/get_suppliers.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end gap-2 py-5">
                                <button type="button" id="cancelModal" class="py-2 px-5 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-500">Cancel</button>
                                <button type="submit" class="py-2 px-5 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-500">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Components-->
        <div>
            <div class="relative w-72 h-full">
                <aside class="w-72 h-full p-5 bg-slate-800 flex flex-col justify-between fixed">
                    <header class="py-5 px-2 flex items-center gap-5">
                        <img class="w-10 h-10 object-cover rounded" src="https://api.dicebear.com/7.x/initials/svg?seed=Felix" alt="profile" />
                        <div class="text-white">
                            <h3 class="text-sm">Jhon Doe</h3>
                            <p class="text-sm text-slate-400">Admin</p>
                        </div>
                    </header>
                    <ul class="h-full py-10">
                        <li class="py-3 px-5 my-2 bg-slate-500 rounded-md"><a href="#" class="flex items-center gap-2 justify-start text-sm font-medium text-slate-200"><i class="w-5 fa-solid fa-chart-line"></i>Dashboard</a></li>
                        <li class="py-3 px-5 my-2"><a href="#" class="flex items-center gap-2 justify-start text-sm font-medium text-slate-300"><i class="w-5 fa-solid fa-plus"></i>Items</a></li>
                        <li class="py-3 px-5 my-2"><a href="#" class="flex items-center gap-2 justify-start text-sm font-medium text-slate-300"><i class="w-5 fa-solid fa-truck"></i>Supplier</a></li>
                        <li class="py-3 px-5 my-2"><a href="#" class="flex items-center gap-2 justify-start text-sm font-medium text-slate-300"><i class="w-5 fa-solid fa-user"></i>User Management</a></li>
                        <li class="py-3 px-5 my-2"><a href="#" class="flex items-center gap-2 justify-start text-sm font-medium text-slate-300"><i class="w-5 fa-solid fa-file-lines"></i>Reports</a></li>
                    </ul>
                    <div class="py-5 border-t border-t-slate-500">
                        <button type="button" class="py-3 px-5 flex items-center gap-5 hover:bg-slate-500 w-full rounded-md">
                            <i class="fa-solid fa-gear text-white"></i>
                            <h3 class="text-slate-300">Settings</h3>
                        </button>
                        <button type="button" class="py-3 px-5 flex items-center gap-5 hover:bg-slate-500 w-full rounded-md">
                            <i class="fa-solid fa-arrow-right-from-bracket text-white"></i>
                            <h3 class="text-slate-300">Log out</h3>
                        </button>
                    </div>
                </aside>
            </div>
        </div>
        <section class="w-full h-auto bg-slate-200">
            <nav class="bg-white h-14 w-full px-5 fixed shadow z-10">
                <div class="flex items-center w-full h-full">
                    <div class="flex items-center gap-5">
                        <i class="fa-solid fa-bars cursor-pointer hover:text-blue-500"></i>
                        <h3 class="font-medium">Dashboard</h3>
                    </div>
                </div>
            </nav>
            <div class="px-5 py-20">
                <div class="bg-slate-100 px-3 py-5 rounded-md my-5">
                    <div class="flex items-center justify-end gap-2">
                        <select class="py-2 px-5 border border-blue-500 text-slate-500 font-medium rounded-md">
                            <option value="" selected>Sort by</option>
                            <option value="Name">Sort by Name</option>
                            <option value="Stock">Sort by Stock</option>
                            <option value="Price">Sort by Price</option>
                        </select>
                        <button type="button" id="openModal" class="py-2 px-5 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-500">Add</button>
                        <button type="button" class="py-2 px-5 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-500">Export Excel</button>
                    </div>
                </div>
                <div class="relative overflow-x-auto rounded-md overflow-none">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-700 uppercase bg-slate-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stock
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 20; $i++) {
                                echo "<tr class='bg-white border-b'>
                            <th scope='row' class='flex items-center gap-5 px-6 py-4 font-medium whitespace-nowrap'>
                                <img class='w-10 h-10 object-cover rounded-md shadow-md' src='https://d1rlzxa98cyc61.cloudfront.net/catalog/product/cache/1801c418208f9607a371e61f8d9184d9/1/7/179919_2020_5.jpg' alt='product' />
                                Apple MacBook Pro 17'
                            </th>
                            <td class='px-6 py-4'>
                                Silver
                            </td>
                            <td class='px-6 py-4'>
                                Laptop
                            </td>
                            <td class='px-6 py-4'>
                                $2999
                            </td>
                            <td class='px-6 py-4'>
                                56
                            </td>
                            <td class='px-6 py-4'>
                            <span class='bg-red-500 text-red-100 rounded-md text-sm px-2 font-medium'>Low</span>
                            </td>
                            <td class='px-6 py-4'>
                                <button>View</button>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>";
                            }
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