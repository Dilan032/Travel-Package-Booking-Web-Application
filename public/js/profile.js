// Add 'highlighted' class to 'Dashboard' on page load
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('dashboard').classList.add('highlighted');
});

function highlightMenuItem(element) {
    // Remove 'highlighted' class from all menu items
    document.querySelectorAll('.user-side-menu-bg .grid div').forEach(item => {
        item.classList.remove('highlighted');
    });

    // Add 'highlighted' class to the clicked menu item
    element.classList.add('highlighted');
}
