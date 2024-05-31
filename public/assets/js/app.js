window.addEventListener('scroll', function() {
    const header = document.querySelector('.navbar-container');
    if (window.scrollY > 0) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    var dropbtn = document.querySelector('.dropbtn');
    dropbtn.addEventListener('click', function (e) {
      e.stopPropagation();
      var dropdown = this.parentElement;
      dropdown.classList.toggle('show');
    });
  
    window.addEventListener('click', function (e) {
      var dropdowns = document.querySelectorAll('.dropdown');
      dropdowns.forEach(function (dropdown) {
        if (!dropdown.contains(e.target)) {
          dropdown.classList.remove('show');
        }
      });
    });
  });