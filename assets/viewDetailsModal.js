// view orderbutton and Order details 
document.getElementById('viewOrderButton').addEventListener('click', function() {
    document.getElementById('orderDetailsModal').classList.remove('hidden');
  });

 
  function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
  }