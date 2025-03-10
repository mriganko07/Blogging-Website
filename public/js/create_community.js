// ---------------------------------------\\
            // USER ICON DROPDOWN \\
// -------------------------------------------\\

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


// ---------------------------------------\\
           // IMAGE UPLOADATION \\
// -------------------------------------------\\


document.querySelector('#main-h3-input-first').addEventListener('input', function() {
    const communityName = this.value;
    document.querySelector('.main-form2-img-show-sec-first').innerText = communityName;
});

document.querySelector('#main-form1-text').addEventListener('input', function() {
    const communityName = this.value;
    document.querySelector('.main-form2-img-show-sec-second').innerText = communityName;
});
 
document.getElementById('com-cover-pic').setAttribute('accept', 'image/*');
document.getElementById('com-profile-pic').setAttribute('accept', 'image/*');

document.getElementById('com-cover-pic').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file && file.type.startsWith('image/')) {
        const imgUrl = URL.createObjectURL(file);
        document.querySelector('.main-form2-img-show-first img').src = imgUrl;
    }
});

document.getElementById('com-profile-pic').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file && file.type.startsWith('image/')) {
        const imgUrl = URL.createObjectURL(file);
        document.querySelector('.main-form2-img-show-sec img').src = imgUrl;
    }
});


// // ---------------------------------------\\
//         // FORM AND ELEMENTS BUTTONS \\
// // -------------------------------------------\\

// var form1 = document.getElementById("main-form1");
// var form2 = document.getElementById("main-form2");
// var form3 = document.getElementById("main-form3");
// var next1 = document.getElementById("next1");
// var next2 = document.getElementById("next2");
// var back1 = document.getElementById("back1");
// var back2 = document.getElementById("back2");
// var progress = document.getElementById("main-progress");

// var communityName = document.getElementById("main-h3-input-first");
// var description = document.querySelector(".main-form1-text");
// var firstFileInput = document.getElementById("main-form2-first-file");
// var secFileInput = document.getElementById("main-form2-sec-file");

// // Function to validate and navigate from form 1 to form 2
// next1.onclick = function () {
//     if (communityName.value.trim() === "" || /\s/.test(communityName.value)) {
//         alert("Community Name cannot be empty or contain spaces.");
//         return;
//     }

//     if (description.value.trim() === "") {
//         alert("Description cannot be empty.");
//         return;
//     }

//     form1.style.left = "-950px";
//     form2.style.left = "40px";
//     progress.style.width = "400px";
// }

// // Function to go back from form 2 to form 1
// back1.onclick = function () {
//     form1.style.left = "180px";
//     form2.style.left = "950px";
//     progress.style.width = "200px";
// }

// // Function to validate and navigate from form 2 to form 3
// next2.onclick = function () {
//     if (!firstFileInput.value) {
//         alert("Please upload a file for the Banner.");
//         return;
//     }
//     if (!secFileInput.value) {
//         alert("Please upload a file for the Profile.");
//         return;
//     }

//     form2.style.left = "-950px";
//     form3.style.left = "175px";
//     progress.style.width = "700px";
// }

// // Function to go back from form 3 to form 2
// back2.onclick = function () {
//     form2.style.left = "30px";
//     form3.style.left = "950px";
//     progress.style.width = "400px";
// }

// // Handle form submission (automatically handled by the form tag)
// document.getElementById("submit-button").onclick = function () {
//     // Additional validation can be done here if needed before submission
//     // The form will automatically submit when clicking the submit button
// }

