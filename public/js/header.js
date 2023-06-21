var dropdownToggle = document.querySelector('.dropdown-toggle');
var dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('mouseover', function (e) {
    e.preventDefault();
    var parentLi = this.parentNode;
    parentLi.classList.toggle('show');
});

// Hide dropdown when hovering over other elements
var navBar = document.querySelector('ul');
navBar.addEventListener('mouseover', function (e) {
    var target = e.target;
    if (!target.closest('.dropdown')) {
        dropdownMenu.parentNode.classList.remove('show');
    }
});

// Active Links js
// Get the current page URL
var currentPage = window.location.href;

// Get the navigation links
var homeLink = document.getElementById('home-link');
var biographyLink = document.getElementById('biography-link');
var educationLink = document.getElementById('education-link');
var skillLink = document.getElementById('skill-link');
var contactLink = document.getElementById('contact-link');

// Check if the current page URL matches the link and add the active class
if (currentPage.includes("homepage")) {
    homeLink.classList.add('active');
} else if (currentPage.includes("biography")) {
    biographyLink.classList.add('active');
} else if (currentPage.includes("education")) {
    educationLink.classList.add('active');
} else if (currentPage.includes("skill")) {
    skillLink.classList.add('active');
} else if (currentPage.includes("contactpage")) {
    contactLink.classList.add('active');
}
