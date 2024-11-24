// --------------\\
// SIDE BAR \\
// ------------------\\

const sidebarLink = document.querySelectorAll('.sidebar__list a')
 
 function linkColor(){
     sidebarLink.forEach(l => l.classList.remove('active-link'))
     this.classList.add('active-link')
 }
 
 sidebarLink.forEach(l => l.addEventListener('click', linkColor))


// -----------------------------------------------------\\
// UP VOTE & DOWN VOTE EFFECT \\
// ---------------------------------------------------------\\

document.addEventListener('click', (event) => {
    const likeDislikeDiv = event.target.closest('.like-dislike');
    if (!likeDislikeDiv) return;

    const upvote = likeDislikeDiv.querySelector('.upvote');
    const downvote = likeDislikeDiv.querySelector('.downvote');
    const span = likeDislikeDiv.querySelector('span');
    let count = parseInt(span.textContent);

    const isUpvoteHighlighted = upvote.classList.contains('highlight-upvote');
    const isDownvoteHighlighted = downvote.classList.contains('highlight-downvote');

    if (event.target.closest('.upvote')) {
        if (!isUpvoteHighlighted) {
            upvote.classList.add('highlight-upvote');
            downvote.classList.remove('highlight-downvote');
            count += isDownvoteHighlighted ? 2 : 1;
        } else {
            upvote.classList.remove('highlight-upvote');
            count -= 1;
        }
    }

    if (event.target.closest('.downvote')) {
        if (!isDownvoteHighlighted) {
            downvote.classList.add('highlight-downvote');
            upvote.classList.remove('highlight-upvote');
            count -= isUpvoteHighlighted ? 2 : 1;
        } else {
            downvote.classList.remove('highlight-downvote');
            count += 1;
        }
    }

    span.textContent = count;
});

// -----------------\\
// COPY LINK \\
// ----------------------\\

function copyCurrentLink() {
    const currentLink = window.location.href;

    const tempInput = document.createElement("input");
    tempInput.value = currentLink; 
    document.body.appendChild(tempInput); 
    tempInput.select(); 
    document.execCommand("copy"); 
    document.body.removeChild(tempInput); 

    alert("Current link copied to clipboard!");
}




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