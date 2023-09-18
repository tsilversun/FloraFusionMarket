const openAddModalButton = document.getElementById('openAddModal');
const addSalesReportModal = document.getElementById('addSalesReportModal');
openAddModalButton.addEventListener('click', () => {
    addSalesReportModal.classList.remove('hidden');
});


const closeModal = () => {
    addSalesReportModal.classList.add('hidden');
};


addSalesReportModal.addEventListener('click', (event) => {
    if (event.target === addSalesReportModal) {
        closeModal();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeModal();
    }
});




const addSalesReportButton = document.getElementById('addSalesReport');
addSalesReportButton.addEventListener('click', () => {
    
    closeModal();
});


const cancelAddSalesReportButton = document.getElementById('cancelAddSalesReport');
cancelAddSalesReportButton.addEventListener('click', () => {
    closeModal();
});