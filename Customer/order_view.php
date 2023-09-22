<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8 p-4">
        <h1 class="text-2xl font-semibold mb-4">Order Details</h1>
        <div class="mb-4">
            <p><strong>Order Number:</strong> #12345</p>
            <p><strong>Date:</strong> January 19, 2023</p>
            <p><strong>Customer Info:</strong> JJA, jja@gmail.com</p>
        </div>

        <!-- Plant Details Table -->
        <div class="mb-4">
            <h2 class="text-lg font-semibold mb-2">Plant Details</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-3 bg-gray-100 border border-gray-300">Plant Name</th>
                        <th class="py-2 px-3 bg-gray-100 border border-gray-300">Quantity</th>
                        <th class="py-2 px-3 bg-gray-100 border border-gray-300">Price</th>
                        <th class="py-2 px-3 bg-gray-100 border border-gray-300">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data -->
                    <tr>
                        <td class="py-2 px-3 border border-gray-300">Snake Plant</td>
                        <td class="py-2 px-3 border border-gray-300">2</td>
                        <td class="py-2 px-3 border border-gray-300">10.00</td>
                        <td class="py-2 px-3 border border-gray-300">20.00</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-3 border border-gray-300">Succulent</td>
                        <td class="py-2 px-3 border border-gray-300">3</td>
                        <td class="py-2 px-3 border border-gray-300">15.00</td>
                        <td class="py-2 px-3 border border-gray-300">45.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mode of Payment -->
        <div class="mb-4">
            <p><strong>Mode of Payment:</strong> Cash on Delivery</p>
        </div>

        <!-- Total Amount -->
        <div>
            <p class="text-xl font-semibold"><strong>Total Amount:</strong> 165.00</p>
        </div>
        <button type="button" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none"><a href="index.php">Back</a>
                
            </button>
    </div>
</body>
</html>