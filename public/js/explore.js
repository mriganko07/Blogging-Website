/*-----------------*\
  #MAIN
\*-----------------*/

// const slidebar = document.querySelector('.main-slidebar');
// let isDown = false;
// let startX;
// let scrollLeft;

// slidebar.addEventListener('mousedown', (e) => {
//   isDown = true;
//   slidebar.classList.add('active');
//   startX = e.pageX - slidebar.offsetLeft;
//   scrollLeft = slidebar.scrollLeft;
// });

// slidebar.addEventListener('mouseleave', () => {
//   isDown = false;
//   slidebar.classList.remove('active');
// });

// slidebar.addEventListener('mouseup', () => {
//   isDown = false;
//   slidebar.classList.remove('active');
// });

// slidebar.addEventListener('mousemove', (e) => {
//   if (!isDown) return;
//   e.preventDefault();
//   const x = e.pageX - slidebar.offsetLeft;
//   const walk = (x - startX) * 2; //scroll-fast
//   slidebar.scrollLeft = scrollLeft - walk;
// });



// const buttons = document.querySelectorAll('.identifier-button');
// const sections = document.querySelectorAll('.identifier-body');

// const defaultSection = document.getElementById('identifier-body-all');
// defaultSection.classList.add('active');

// buttons.forEach(button => {
//     button.addEventListener('click', function() {
//         const target = this.getAttribute('data-target');
        
//         sections.forEach(section => {
//             section.classList.remove('active');
//         });
        
//         document.getElementById(target).classList.add('active');
//     });
// }); 


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
  const walk = (x - startX) * 2; // Adjust scrolling speed
  slidebar.scrollLeft = scrollLeft - walk;
});

// Tab Switching Logic
const buttons = document.querySelectorAll('.identifier-button');
const sections = document.querySelectorAll('.identifier-body');

const defaultSection = document.getElementById('identifier-body-all');
if (defaultSection) {
  defaultSection.classList.add('active');
}

// Button Click Handler
buttons.forEach((button) => {
  button.addEventListener('click', function () {
    const target = this.getAttribute('data-target');

    // Remove active class from all sections
    sections.forEach((section) => section.classList.remove('active'));

    // Add active class to target section
    const targetSection = document.getElementById(target);
    if (targetSection) {
      targetSection.classList.add('active');
    }

    // Remove background color from all buttons
    buttons.forEach((btn) => btn.style.backgroundColor = '');
    
    // Set background color for the selected button
    this.style.backgroundColor = '#5d5d5d';
  });
});



/*-----------------*\
  #USER PROFILE
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
