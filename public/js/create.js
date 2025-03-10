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
  IMAGE UPLOAD
\*-----------------*/

document.getElementById('create-post-form-img').addEventListener('change', function() {
    const fileInput = this;
    const imagePreview = document.getElementById('image-preview');
    const imagePreviewBg = document.getElementById('image-preview-bg');
    const label = document.getElementById('upload-label');

    imagePreview.innerHTML = '';
    imagePreview.appendChild(imagePreviewBg);

    if (fileInput.files && fileInput.files.length > 0) {
        const file = fileInput.files[0];

        if (file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style = "position: relative; z-index: 2; max-width: 100%; max-height: 100%; display: block; margin: auto;";

                imagePreview.classList.add('active');
                imagePreview.appendChild(img);

                imagePreviewBg.style.backgroundImage = `url('${e.target.result}')`;
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

function selectCommunity(entity) {
    console.log("Selected entity:", entity); 
    document.getElementById('selected_entity').value = entity;

    document.getElementById('post-community-search-input').value = entity;

    document.getElementById('create-post-community-community-bar').classList.remove('visible');
    document.getElementById('create-post-community-community-bar').classList.add('hidden');
}

document.getElementById('post-community-search-input').addEventListener('click', function() {
    document.getElementById('create-post-community-community-bar').classList.remove('hidden');
    document.getElementById('create-post-community-community-bar').classList.add('visible');
});

document.addEventListener('click', function(event) {
    const communityBar = document.getElementById('create-post-community-community-bar');
    const searchInput = document.getElementById('post-community-search-input');
    
    if (!communityBar.contains(event.target) && !searchInput.contains(event.target)) {
        communityBar.classList.remove('visible');
        communityBar.classList.add('hidden');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const communityElements = document.querySelectorAll('.profile-img2');
    communityElements.forEach(element => {
        element.addEventListener('click', function () {
            const communityName = this.querySelector('span').textContent; 
            selectCommunity(`r/${communityName}`);
        });
    });

    const usernameElements = document.querySelectorAll('.your-profile-selector'); 
    usernameElements.forEach(usernameElement => {
        usernameElement.addEventListener('click', function () {
            const username = this.textContent.trim(); 
            selectCommunity(`r/${username}`);
        });
    });
});