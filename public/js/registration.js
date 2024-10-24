// Navigation between register and login
function showDiv(divId) {
    
    const registerDiv = document.getElementById('register');
    const loginDiv = document.getElementById('login');

    registerDiv.classList.remove('visible');
    loginDiv.classList.remove('visible');
    
    setTimeout(() => {
        document.getElementById(divId).classList.add('visible');
    }, 200);

}


// For Selecting the color and the line 
const button = document.getElementById('registerBtn');
const buttonTwo = document.getElementById('loginBtn')

button.addEventListener('click', function() {
    button.classList.add('active');  
});

buttonTwo.addEventListener('click', function() {
    buttonTwo.classList.add('active');  
});


document.addEventListener('click', function(event) {
    if (!button.contains(event.target)) {
        button.classList.remove('active'); 
    }
    else if (!buttonTwo.contains(event.target)) {
        buttonTwo.classList.remove('active'); 
    }
});

// For showing the forget passord section
const div1 = document.querySelector('.left-div');
const div2 = document.querySelector('.forgot');
const showButton  = document.getElementById('showButton');
// const backButton = document.getElementById('backButton');

showButton.addEventListener("click", function(){
    div1.style.display = "none";
    div2.style.display = "block ";
});