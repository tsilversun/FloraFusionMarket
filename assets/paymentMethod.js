const paymentMethodSelect = document.getElementById('mode-of-payment');

placeOrderButton.addEventListener('click', function () {
    const selectedPaymentMethod = paymentMethodSelect.value;

    if (selectedPaymentMethod === 'gcash') {
        location.href = '../Customer/gcash_payment.php';
    } else if (selectedPaymentMethod === 'cod') {
        location.href = '../Customer/cod_payment.php';
    }
});