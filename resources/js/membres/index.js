// Filtrage et recherche des membres
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-membres');
    const statusFilter = document.getElementById('filter-status');
    const membreRows = document.querySelectorAll('.membre-row');
    
    // Fonction de filtrage
    function filterMembres() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedStatus = statusFilter.value;
        
        membreRows.forEach(row => {
            const name = row.dataset.name.toLowerCase();
            const email = row.dataset.email.toLowerCase();
            const status = row.dataset.status;
            
            // Vérifier la recherche (nom ou email)
            const matchesSearch = name.includes(searchTerm) || email.includes(searchTerm);
            
            // Vérifier le statut
            const matchesStatus = selectedStatus === 'all' || status === selectedStatus;
            
            // Afficher ou masquer la ligne
            if (matchesSearch && matchesStatus) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        
        // Mettre à jour le compteur
        updateCounter();
    }
    
    // Fonction pour mettre à jour le compteur
    function updateCounter() {
        const visibleRows = document.querySelectorAll('.membre-row:not([style*="display: none"])');
        const totalElement = document.getElementById('total-membres');
        if (totalElement) {
            totalElement.textContent = visibleRows.length;
        }
    }
    
    // Événements
    if (searchInput) {
        searchInput.addEventListener('input', filterMembres);
    }
    
    if (statusFilter) {
        statusFilter.addEventListener('change', filterMembres);
    }
});
