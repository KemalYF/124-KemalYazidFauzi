window.addEventListener('scroll', function() {
    const header = document.querySelector('.navbar-container');
    if (window.scrollY > 0) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});