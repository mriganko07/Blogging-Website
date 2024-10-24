document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.querySelector('.dropdown3-click-button');
    const dropdownContent = document.querySelector('.section-dropdown3');

    // Show the dropdown when the button is clicked
    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();  // Prevent the click from propagating
        dropdownContent.classList.toggle('show');
    });

    // Hide the dropdown when clicking outside the dropdown
    document.addEventListener('click', function(event) {
        if (!dropdownContent.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownContent.classList.remove('show');
        }
    });
});
