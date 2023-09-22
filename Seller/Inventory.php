<?php 
     session_start();  
    if(!isset($_SESSION['id'])){
        header('location: ./index.php');
        $role = $_SESSION['role'];
        if($role == 1){
            header('location: /FloraFusion/Customer/index.php');
        }else if($role == 2){
            header('location: /FloraFusion/seller/index.php');
        }else{
            echo "You Need To logged in!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Inventory</title>
</head>
<body>
    <div class="flex p-8 space-x-8">
    <div class=" bg-green-300 text-black p-4">
        <div class="bg-green-300 text-black h-screen w-64 flex flex-col">
    <div class="p-4">
    <img src="../assets/img/FloraFusion.jpg" class="h-8 mr-3" alt="Plant Logo" />
        <h2 class="text-2xl font-semibold">FloraFusion Market</h2>
    </div>
    <ul class="flex flex-col space-y-2 p-4">
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="../Seller/index.php" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8l-6-6zm-2 18H4v-2h6v2zm0-4H4v-2h6v2zm0-4H4V8h6v2zm5-6l-5-5v5h5zm-2 0H2V2h7v4z"/>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="#" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Inventory</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="orders.php" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Orders</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="sales_rep.php" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Sales Report</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="sold_his.php" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Sold History</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="../includes/logout.php" class="flex items-center space-x-2">
            <i class="mr-2 text-red-500 fas fa-sign-out-alt"></i>
                <span>Log out</span>
            </a>
        </li>
      
    </ul>
</div>
        
    </div>
        
    <!-- Add Category Button -->

    <div class="flex-1 bg-white p-4 shadow-md">
    <h2 class="text-xl font-semibold mb-4">Category</h2>
    <div class="flex justify-between items-center mb-4">
        <div class="relative ml-auto">
        <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md" id="addCategoryButton">+</button>
            <input type="text" class="border border-gray-300 rounded-md px-3 py-2 pr-10 placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-500" placeholder="Search">
        </div>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Products</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Cactus</td>
                <td class="px-6 py-4 whitespace-nowrap">28</td>
                <td class="px-6 py-4 whitespace-nowrap">
                <button id="updateButton" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Update</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md ml-2">Delete</button>
                </td>
            </tr>
           
        </tbody>
    </table>
</div>
</div>


<!-- Modal for Add Category -->
<div id="addCategoryModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="modal-container">
    <div class="modal-content bg-white p-6 rounded-lg shadow-lg">
      <div class="flex justify-end">
        <button class="text-gray-500 hover:text-gray-700" onclick="closeModal('addCategoryModal')">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <h2 class="text-2xl font-semibold mb-4">Add Category</h2>
      <!-- Category Name -->
      <input type="text" placeholder="Category Name" class="mt-1 p-2 w-full border rounded">
      <!-- Total Products -->
      <input type="number" placeholder="Total Products" class="mt-1 p-2 w-full border rounded">
      <!-- Add Button -->
      <button class="bg-green-500 mt-3 text-white rounded-md py-2 px-4 hover:bg-green-600">Add</button>
    </div>
  </div>
</div>



<!-- Modal for Update Plant -->
<div id="updatePlantModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="modal-container">
    <div class="modal-content bg-white p-6 rounded-lg shadow-lg">
      <div class="flex justify-end">
        <button class="text-gray-500 hover:text-gray-700" onclick="closeModal('updatePlantModal')">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <h2 class="text-2xl font-semibold mb-4">Update Plant</h2>
      <!-- Upload Image -->
      <input type="file" class="mt-1 p-2 w-full border rounded">
      <!-- ID Number -->
      <input type="text" placeholder="ID Number" class="mt-1 p-2 w-full border rounded">
      <!-- Plant Name -->
      <input type="text" placeholder="Plant Name" class="mt-1 p-2 w-full border rounded">
      <!-- Quantity -->
      <input type="number" placeholder="Quantity" class="mt-1 p-2 w-full border rounded">
      <!-- Price -->
      <input type="number" placeholder="Price" class="mt-1 p-2 w-full border rounded"">
      <!-- Description -->
      <textarea placeholder="Description" class="mt-1 p-2 w-full border rounded""></textarea>
      <!-- Update Button -->
      <button class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600">Update</button>
    </div>
  </div>
</div>


<script src="../assets/addUpdateModal.js"></script>
</body>
</html>
