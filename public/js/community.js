// --------------\\
// SIDE BAR \\
// ------------------\\

const sidebarLink = document.querySelectorAll('.sidebar__list a')
 
 function linkColor(){
     sidebarLink.forEach(l => l.classList.remove('active-link'))
     this.classList.add('active-link')
 }
 
 sidebarLink.forEach(l => l.addEventListener('click', linkColor))



 
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

// -----------------------\\
// COPY PROFILE \\
// ---------------------------\\

function toggleShareModal() {
    const modal = document.getElementById("shareModal");
    modal.style.display = modal.style.display === "block" ? "none" : "block";
}

window.onclick = function(event) {
    const modal = document.getElementById("shareModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}


/*-----------------*\
  #MAIN
\*-----------------*/

const slidebar = document.querySelector('.main-slidebar');
let isDown = false;
let startX;
let scrollLeft;

slidebar.addEventListener('mousedown', (e) => {
  isDown = true;
  slidebar.classList.add('active');
  startX = e.pageX - slidebar.offsetLeft;
  scrollLeft = slidebar.scrollLeft;
});

slidebar.addEventListener('mouseleave', () => {
  isDown = false;
  slidebar.classList.remove('active');
});

slidebar.addEventListener('mouseup', () => {
  isDown = false;
  slidebar.classList.remove('active');
});

slidebar.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slidebar.offsetLeft;
  const walk = (x - startX) * 2;
  slidebar.scrollLeft = scrollLeft - walk;
});



const buttons = document.querySelectorAll('.identifier-button');
const sections = document.querySelectorAll('.identifier-body');

const defaultSection = document.getElementById('identifier-body-all');
defaultSection.classList.add('active');

buttons.forEach(button => {
    button.addEventListener('click', function() {
        const target = this.getAttribute('data-target');
        
        sections.forEach(section => {
            section.classList.remove('active');
        });
        
        document.getElementById(target).classList.add('active');
    });
}); 


buttons.forEach(button => {
    button.addEventListener('click', function() {
        const target = this.getAttribute('data-target');
        
        sections.forEach(section => {
            section.classList.remove('active');
        });
        
        // Show the selected section
        document.getElementById(target).classList.add('active');

        buttons.forEach(btn => btn.classList.remove('active-button'));
        this.classList.add('active-button');
    });
});



// ---------------------------------------\\
// JOIN & JOINED BUTTON \\
// ------------------------------------------\\

function toggleButton(button) {
    if (button.classList.contains("join")) {
        button.classList.remove("join");
        button.classList.add("joined");
        button.querySelector("span").textContent = "Joined";
    } else {
        button.classList.remove("joined");
        button.classList.add("join");
        button.querySelector("span").textContent = "Join";
    }
}

// -----------------------------------------------------\\
// UP VOTE & DOWN VOTE EFFECT \\
// ---------------------------------------------------------\\

document.addEventListener('click', (event) => {
    const likeDislikeDiv = event.target.closest('.like-dislike');
    if (!likeDislikeDiv) return; 

    const upvote = likeDislikeDiv.querySelector('.upvote');
    const downvote = likeDislikeDiv.querySelector('.downvote');
    const span = likeDislikeDiv.querySelector('span');

    const isUpvoteClicked = likeDislikeDiv.classList.contains('highlight-upvote');
    const isDownvoteClicked = likeDislikeDiv.classList.contains('highlight-downvote');

    if (event.target === upvote) {
        if (!isUpvoteClicked) {
            likeDislikeDiv.classList.add('highlight-upvote');
            likeDislikeDiv.classList.remove('highlight-downvote');
            span.style.color = 'white';
            upvote.innerHTML = `
                <svg rpl="" fill="white" height="16" icon-name="upvote-fill" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.706 8.953 10.834.372A1.123 1.123 0 0 0 10 0a1.128 1.128 0 0 0-.833.368L1.29 8.957a1.249 1.249 0 0 0-.171 1.343 1.114 1.114 0 0 0 1.007.7H6v6.877A1.125 1.125 0 0 0 7.123 19h5.754A1.125 1.125 0 0 0 14 17.877V11h3.877a1.114 1.114 0 0 0 1.005-.7 1.251 1.251 0 0 0-.176-1.347Z"></path>
                </svg>
            `;
            downvote.innerHTML = `
                <svg rpl="" fill="currentColor" height="16" icon-name="downvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Z"></path>
                </svg>
            `;
        } else {
            likeDislikeDiv.classList.remove('highlight-upvote');
            span.style.color = '';
            upvote.innerHTML = `
                <svg rpl="" fill="currentColor" height="16" icon-name="upvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                </svg>
            `;
        }
    }

    if (event.target === downvote) {
        if (!isDownvoteClicked) {
            likeDislikeDiv.classList.add('highlight-downvote');
            likeDislikeDiv.classList.remove('highlight-upvote');
            span.style.color = 'white';
            downvote.innerHTML = `
                <svg rpl="" fill="white" height="16" icon-name="downvote-fill" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.88 9.7a1.114 1.114 0 0 0-1.006-.7H14V2.123A1.125 1.125 0 0 0 12.877 1H7.123A1.125 1.125 0 0 0 6 2.123V9H2.123a1.114 1.114 0 0 0-1.005.7 1.25 1.25 0 0 0 .176 1.348l7.872 8.581a1.124 1.124 0 0 0 1.667.003l7.876-8.589A1.248 1.248 0 0 0 18.88 9.7Z"></path>
                </svg>
            `;
            upvote.innerHTML = `
                <svg rpl="" fill="currentColor" height="16" icon-name="upvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.877 19H7.123A1.125 1.125 0 0 1 6 17.877V11H2.126a1.114 1.114 0 0 1-1.007-.7 1.249 1.249 0 0 1 .171-1.343L9.166.368a1.128 1.128 0 0 1 1.668.004l7.872 8.581a1.25 1.25 0 0 1 .176 1.348 1.113 1.113 0 0 1-1.005.7H14v6.877A1.125 1.125 0 0 1 12.877 19ZM7.25 17.75h5.5v-8h4.934L10 1.31 2.258 9.75H7.25v8ZM2.227 9.784l-.012.016c.01-.006.014-.01.012-.016Z"></path>
                </svg>
            `;
        } else {
            likeDislikeDiv.classList.remove('highlight-downvote');
            span.style.color = '';
            downvote.innerHTML = `
                <svg rpl="" fill="currentColor" height="16" icon-name="downvote-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 20a1.122 1.122 0 0 1-.834-.372l-7.872-8.581A1.251 1.251 0 0 1 1.118 9.7 1.114 1.114 0 0 1 2.123 9H6V2.123A1.125 1.125 0 0 1 7.123 1h5.754A1.125 1.125 0 0 1 14 2.123V9h3.874a1.114 1.114 0 0 1 1.007.7 1.25 1.25 0 0 1-.171 1.345l-7.876 8.589A1.128 1.128 0 0 1 10 20Zm-7.684-9.75L10 18.69l7.741-8.44H12.75v-8h-5.5v8H2.316Z"></path>
                </svg>
            `;
        }
    }
});

