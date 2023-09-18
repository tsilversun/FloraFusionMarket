function login() {
            
    showCustomerDetailsModal();
    return false; // Prevent the form from submitting
}

function showCustomerDetailsModal() {
    $('#customerDetailsModal').modal('show');
}

function closeCustomerDetailsModal() {
    $('#customerDetailsModal').modal('hide');
}

function saveCustomerDetails() {
    // Add logic to save customer details here
    alert('Customer details saved');
    //  window.location.href = '../FloraFusion/Customer/index.php';
    closeCustomerDetailsModal();
}


function Logins() {
    // Add logic to save customer details here
     window.location.href = '../FloraFusion/Customer/index.php';
    closeCustomerDetailsModal();
}