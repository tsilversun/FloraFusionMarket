 <!-- modal -->
 <div id="order-details-modal" class="fixed inset-0 z-10 flex items-center justify-center hidden">
            <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <h2 class="text-2xl font-semibold mb-4">Order Details</h2>
                    
                
                    <form id="order-details-form">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="order-number">
                                Order Number
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="order-number" type="text" placeholder="Order Number" readonly>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="order-date">
                                Date
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="order-date" type="text" placeholder="Date" readonly>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="customer-info">
                                Customer Info
                            </label>
                            <textarea class="form-textarea border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="customer-info" placeholder="Customer Info" readonly></textarea>
                        </div>

                        
                        <table class="w-full border-collapse mb-4">
                            <thead>
                                <tr class="border-b">
                                    <th class="py-2 px-4 text-left">Plant Name</th>
                                    <th class="py-2 px-4 text-left">Qty</th>
                                    <th class="py-2 px-4 text-left">Price</th>
                                    <th class="py-2 px-4 text-left">Total Price</th>
                                </tr>
                            </thead>
                            <tbody id="order-items">
                                
                            </tbody>
                        </table>

                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="total-amount">
                                Total Amount
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="total-amount" type="text" placeholder="Total Amount" readonly>
                        </div>

                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="mode-of-payment">
                                Mode of Payment
                            </label>
                            <select class="form-select border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mode-of-payment">
                                
                                <option value="paypal">GCash</option>
                                <option value="cash">Cash on Delivery</option>
                            </select>
                        </div>

                    
                        <div class="text-center">
                            <button id="place-order-button" type="button" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none">
                                Place Order
                            </button>
                        </div>
                    </form>

                    
                    <button id="close-order-details" class="mt-4 bg-gray-200 text-gray-600 py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">
                        Close
                    </button>
                </div>
            </div>
        </div>

    
        <div id="order-view-modal" class="fixed inset-0 z-10 flex items-center justify-center hidden">
            <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!-- Content for order viewing modal -->

                
                    <button id="close-order-view" class="mt-4 bg-gray-200 text-gray-600 py-2 px-4 rounded-full hover:bg-gray-300 focus:outline-none">
                        Close
                    </button>
                </div>
            </div>

       