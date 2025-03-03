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




/*-----------------*\
  #MAIN
\*-----------------*/



/*-----------------*\
     BACKGROUND
\*-----------------*/


const infoImage = document.getElementById("infoImage");
const infoCover = document.querySelector(".info-cover");

function updateBackground() {
    const newSrc = infoImage.src;
    infoCover.style.setProperty("--bg-url", `url('${newSrc}')`);
}

updateBackground();

const observer = new MutationObserver(updateBackground);
observer.observe(infoImage, { attributes: true, attributeFilter: ["src"] });


/*-----------------------*\
   BUTTON TOGGLE & POPUP
\*-----------------------*/


// document.addEventListener("DOMContentLoaded", function () {
//     const buttons = document.querySelectorAll(".com-follower-profile-button");

//     buttons.forEach((button) => {
//         button.addEventListener("click", function (event) {
//             // event.preventDefault(); // Prevents unwanted page jumps
//             if (this.innerText === "Follow") {
//                 this.innerText = "Followed";
//                 this.classList.add("followed");
//             } else {
//                 this.innerText = "Follow";
//                 this.classList.remove("followed");
//             }
//         });
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".com-follower-profile-button");

    buttons.forEach((button) => {
        button.addEventListener("click", function (event) {
            // event.preventDefault(); // Prevents unwanted page jumps

            if (this.innerText === "Follow") {
                this.innerText = "Followed";
                this.classList.add("followed");
                alert("You're successfully following this user");
            } else {
                this.innerText = "Follow";
                this.classList.remove("followed");
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".text-info-inner-button");

    buttons.forEach((button) => {
        button.addEventListener("click", function (event) {
            // event.preventDefault(); // Prevents unwanted page jumps

            if (this.innerText === "Follow") {
                this.innerText = "Followed";
                this.classList.add("followed");
                alert("You're successfully following this user");
            } else {
                this.innerText = "Follow";
                this.classList.remove("followed");
            }
        });
    });
});

/*-----------------*\
       #POPUP
\*-----------------*/

// document.addEventListener("DOMContentLoaded", function () {
//     const buttons = document.querySelectorAll(".com-follower-profile-button");

//     buttons.forEach((button) => {
//         button.addEventListener("click", function (event) {
//             // event.preventDefault(); // Prevents page jumps
//             alert("You're successfully following this user");
//         });
//     });
// });
