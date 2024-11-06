/*-----------------*\
      DROPDOWN
\*-----------------*/

document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.querySelector('.dropdown3-click-button');
    const dropdownContent = document.querySelector('.section-dropdown3');

    dropdownButton.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdownContent.classList.toggle('show');
    });

    document.addEventListener('click', function(event) {
        if (!dropdownContent.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownContent.classList.remove('show');
        }
    });
});

/*-----------------*\
  IMAGE UPLODATION
\*-----------------*/

document.getElementById('create-post-form-img').addEventListener('change', function() {
    const fileInput = this;
    const imagePreview = document.getElementById('image-preview');
    const label = document.getElementById('upload-label');

    imagePreview.innerHTML = '';

    if (fileInput.files && fileInput.files.length > 0) {
        const file = fileInput.files[0];

        if (file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;

                imagePreview.classList.add('active');

                imagePreview.appendChild(img);
            };

            reader.readAsDataURL(file);

            label.innerHTML = `File selected: ${file.name}`;
        } else {
            label.innerHTML = 'Please select an image';
            imagePreview.classList.remove('active');
        }
    } else {
        label.innerHTML = 'Click me to upload image';
        imagePreview.classList.remove('active');
    }
});

/*-----------------*\
  COMMUNITY SEARCH
\*-----------------*/

function toggleSearchBar(event) {
    document.getElementById('create-post-community-button').style.opacity = '0';
    document.getElementById('create-post-community-button').style.pointerEvents = 'none';

    document.getElementById('create-post-community-search-bar').classList.remove('hidden');
    document.getElementById('create-post-community-search-bar').classList.add('visible');
    
    document.getElementById('create-post-community-community-bar').classList.remove('hidden');
    document.getElementById('create-post-community-community-bar').classList.add('visible');
}

function selectCommunity(communityName) {
    document.getElementById('post-community-search-input').value = communityName;

    document.getElementById('create-post-community-community-bar').classList.remove('visible');
    document.getElementById('create-post-community-community-bar').classList.add('hidden');
}

// Show the community bar when clicking on the search input
document.getElementById('post-community-search-input').addEventListener('click', function() {
    document.getElementById('create-post-community-community-bar').classList.remove('hidden');
    document.getElementById('create-post-community-community-bar').classList.add('visible');
});

// Hide the community bar if clicking outside
document.addEventListener('click', function(event) {
    const communityBar = document.getElementById('create-post-community-community-bar');
    const searchInput = document.getElementById('post-community-search-input');
    
    if (!communityBar.contains(event.target) && !searchInput.contains(event.target)) {
        communityBar.classList.remove('visible');
        communityBar.classList.add('hidden');
    }
});
