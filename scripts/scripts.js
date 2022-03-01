
const navSmScreen = document.querySelector('.nav-sm-screen');
const toggleIcon = document.querySelector('.toggle-icon'); 
const depasaLogo = document.querySelector('.depasa-logo');

toggleIcon.addEventListener('click', () => {   
    navSmScreen.classList.toggle('toggle');  
    depasaLogo.classList.toggle('toggleLogo');
}); 



const alertRecordChanges = document.querySelector('.alert');

setTimeout(() => {
    alertRecordChanges.style.display = 'none';
}, 6000);
