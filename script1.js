var bar = document.getElementById('bar');
var nav = document.getElementById('navbar1');
var close = document.getElementById('close');


if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}



// new
const allHoverImages = document.querySelectorAll('.hover-container div img');
const imgContainer = document.querySelector('.img-container');

window.addEventListener('DOMContentLoaded', () => {
    allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
    image.addEventListener('mouseover', () =>{
        imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
        image.parentElement.classList.add('active');
    });
});

function resetActiveImg(){
    allHoverImages.forEach((img) => {
        img.parentElement.classList.remove('active');
    });
}




document.addEventListener("DOMContentLoaded", function() {
    
    const navLinks = document.querySelectorAll('.account-settings-links .list-group-item');
    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            
            document.querySelectorAll('.tab-pane').forEach(tab => {
                tab.classList.remove('active', 'show');
            });
            
            const targetId = this.getAttribute('href');
            const targetPane = document.querySelector(targetId);
            targetPane.classList.add('active', 'show');
        });
    });

    
    const saveButton = document.querySelector('.btn-primary');
    saveButton.addEventListener('click', function() {
        
        console.log('Changes saved!');
    });

    
    const cancelButton = document.querySelector('.btn-default');
    cancelButton.addEventListener('click', function() {
    
        console.log('Changes canceled!');
    });
});


