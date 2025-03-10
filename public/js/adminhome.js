const sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');
const themeToggler = document.querySelector('.theme-toggler');

document.body.classList.add('dark-theme-variables');
themeToggler.querySelector('span:nth-child(1)').classList.remove('active');
themeToggler.querySelector('span:nth-child(2)').classList.add('active');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = "block";
});
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = "none";
});

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
});




document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
    if(!button.classList.contains('delete')) {
        button.classList.add('delete');
        setTimeout(() => button.classList.remove('delete'), 3200);
    }
    e.preventDefault();
}));




function openPopup(imgElement) {
    var popup = document.getElementById("imagePopup");
    var popupImg = document.getElementById("popupImg");
    popupImg.src = imgElement.src; 
    popup.style.display = "block"; 
  }
  
  document.querySelector(".popup .close").onclick = function() {
    document.getElementById("imagePopup").style.display = "none";
  };
  
  window.onclick = function(event) {
    var popup = document.getElementById("imagePopup");
    if (event.target == popup) {
      popup.style.display = "none";
    }
  };
  