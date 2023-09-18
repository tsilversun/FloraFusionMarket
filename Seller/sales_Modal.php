<!-- Modal for Adding Sales Report -->
<div id="addSalesReportModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
           
        </div>

        <!-- Modal Content -->
        <div class="modal-content py-4 text-left px-6">
            <h2 class="text-xl font-semibold mb-4">Sales Report for the month of:</h2>

            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="month">Month:</label>
                    <input type="text" class="border border-gray-300 rounded-md px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-500 w-400" id="month" name="month" placeholder="Month">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="year">Year:</label>
                    <input type="text" class="border border-gray-300 rounded-md px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-500 w-400" id="year" name="year" placeholder="Year">
                </div>

                <!-- Sales Details Table -->
                <table class="min-w-full divide-y divide-gray-800 border border-gray-800 mb-4">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Sold</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Sales</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"> <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md" id="openAddModal">+</button></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sales details rows will be added here dynamically -->
                    </tbody>
                </table>

                
                
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="total">Total:</label>
                    <input type="text" class="border border-gray-300 rounded-md px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-500 w-400" id="total" name="total" placeholder="Total">
                </div>
                
               
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="notes">Notes:</label>
                    <textarea class="border border-gray-300 rounded-md px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring focus:border-blue-500 w-600" id="notes" name="notes" placeholder="Notes"></textarea>
                </div>

               

                
                <div class="flex justify-end">
                    <button type="button" id="addSalesReport" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md mr-2">Add</button>
                    <button type="button" id="cancelAddSalesReport" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
