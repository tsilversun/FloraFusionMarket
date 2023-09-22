 <!-- Modal -->
 <div id="rateModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white w-1/2 p-4 rounded-lg shadow-lg">
           
            <button id="closeModalButton" class="absolute top-0 right-0 mt-2 mr-2 text-gray-600 hover:text-gray-800">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
           
            <div class="flex items-center mb-4">
               
                <div class="mr-4">
                    <i class="fas fa-user-circle fa-3x"></i> 
                </div>
                
                <p class="text-lg font-semibold">JJA</p>
            </div>

            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Rating:</label>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1"></label>
                </div>
            </div>

      
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Message:</label>
                <textarea name="message" id="message" class="w-full h-24 p-2 border rounded-lg"></textarea>
            </div>

           
            <button id="submitRating" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Submit
            </button>

            
        </div>
    </div>