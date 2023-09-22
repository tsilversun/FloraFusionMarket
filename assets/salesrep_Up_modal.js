        // Open updateSalesReportModal
        const updateSalesModalButton = document.getElementById('updateSalesButton');
        const updateSalesReportModal = document.getElementById('updateSalesReportModal');
        updateSalesModalButton.addEventListener('click', () => {
            openModal('updateSalesReportModal');
        });
        
        // Close updateSalesReportModal on cancel
        const cancelUpdateSalesReportButton = document.getElementById('cancelUpdateSalesReport');
        cancelUpdateSalesReportButton.addEventListener('click', () => {
            closeModal('updateSalesReportModal');
        });
        
        // Event listener to close updateSalesReportModal when clicking outside of it
        updateSalesReportModal.addEventListener('click', (event) => {
            if (event.target === updateSalesReportModal) {
                closeModal('updateSalesReportModal');
            }
        });
        
        // Event listener to close updateSalesReportModal on 'Escape' key press
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeModal('updateSalesReportModal');
            }
        });