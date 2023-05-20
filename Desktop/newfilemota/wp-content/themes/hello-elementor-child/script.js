
/******lightbox */
function showLightbox(image) {
    let lightbox = document.querySelector('.lightbox')
    lightbox.classList.add('active')
    document.querySelector('.lightbox-image').setAttribute('src',image)
}
function hideLightbox() {
    let lightbox = document.querySelector('.lightbox')
    lightbox.classList.remove('active')
}
