document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.portfolio-items-box img');
    images.forEach(img => {
        img.addEventListener('click', function() {
            openPopup(this.src);
        });
    });
});

function openPopup(src) {
    const popupContainer = document.getElementById('popupContainer');
    const popupImage = document.getElementById('popupImage');
    
    popupImage.src = src;
    popupContainer.style.display = 'flex';
}

function closePopup() {
    const popupContainer = document.getElementById('popupContainer');
    
    popupContainer.style.display = 'none';
}
