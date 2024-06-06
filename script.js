// Hamburger Menu Toggle
const menuToggle = document.querySelector('.menu-toggle');
const mainNav = document.querySelector('.main-nav');

menuToggle.addEventListener('click', () => {
    mainNav.classList.toggle('open');
    menuToggle.classList.toggle('open');
});

// Request Form Functionality for All Buttons
const requestServiceBtns = document.querySelectorAll('.request-service-btn');
const requestForm = document.getElementById('request-form');
const serviceRequestForm = document.getElementById('service-request-form');
const confirmationMessage = document.getElementById('confirmation-message');
const closeButton = document.createElement("span");
closeButton.textContent = "x";
closeButton.classList.add("close-button");

requestForm.appendChild(closeButton);

closeButton.addEventListener("click", () => {
    requestForm.style.display = "none";
});

requestServiceBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        requestForm.style.display = 'block'; 
        confirmationMessage.style.display = 'none'; 
    });
});

serviceRequestForm.addEventListener('submit', (event) => {
    event.preventDefault();
    requestForm.style.display = 'none';
    confirmationMessage.style.display = 'block';
    serviceRequestForm.reset();
});
