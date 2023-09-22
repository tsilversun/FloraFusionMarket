function toggleModal(modalId, otherModalId) {
    document.getElementById(modalId).classList.add('hidden');
    document.getElementById(otherModalId).classList.remove('hidden');
  }
 
 
  document.getElementById('loginButton').addEventListener('click', function() {
    document.getElementById('loginModal').classList.remove('hidden');
  });