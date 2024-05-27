'use strict';



// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }



// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });



// testimonials variables
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// modal variable
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// modal toggle function
const testimonialsModalFunc = function () {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < testimonialsItem.length; i++) {

  testimonialsItem[i].addEventListener("click", function () {

    modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = this.querySelector("[data-testimonials-title]").innerHTML;
    modalText.innerHTML = this.querySelector("[data-testimonials-text]").innerHTML;

    testimonialsModalFunc();

  });

}

// add click event to modal close button
modalCloseBtn.addEventListener("click", testimonialsModalFunc);
overlay.addEventListener("click", testimonialsModalFunc);



// custom select variables
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

select.addEventListener("click", function () { elementToggleFunc(this); });

// add event in all select items
for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);

  });
}

// filter variables
const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = function (selectedValue) {

  for (let i = 0; i < filterItems.length; i++) {

    if (selectedValue === "all") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }

  }

}

// add event in all filter button items for large screen
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {

  filterBtn[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedValue);

    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;

  });

}



// contact form variables
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// add event to all form input field
for (let i = 0; i < formInputs.length; i++) {
  formInputs[i].addEventListener("input", function () {

    // check form validation
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }

  });
}

// page navigation variables
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// add event to all nav link
for (let i = 0; i < navigationLinks.length; i++) {
  navigationLinks[i].addEventListener("click", function () {

    for (let i = 0; i < pages.length; i++) {
      if (this.innerHTML.toLowerCase() === pages[i].dataset.page) {
        pages[i].classList.add("active");
        navigationLinks[i].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        pages[i].classList.remove("active");
        navigationLinks[i].classList.remove("active");
      }
    }

  });
}

//Scroll to contact form script -->

window.onscroll= function(){scrollFunction()};

function scrollFunction(){
  if(document.body.scrollTop >100 || document.documentElement.scrollTop > 100){
    document.getElementById("back-to-top").style.display = "block";
  }
    else{
      document.getElementById("back-to-top").style.display = "none";
    }
  }
  document.getElementById('back-to-top').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior
    window.scrollTo({top: 0, behavior: 'smooth'});
   // document.querySelector('[data-page="contact"]').scrollIntoView({
     // behavior: 'smooth' // Smooth scroll
    });

//sending email from Contact form
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  const fullNameInput = document.getElementById('fullname');
  const emailInput = document.getElementById('email');
  const messageInput = document.getElementById('message');
  const sendButton = document.getElementById('sendMessageBtn');

  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form from submitting

    const fullName = fullNameInput.value.trim();
    const email = emailInput.value.trim();
    const message = messageInput.value.trim();

    if (!fullName || !email || !message) {
      alert('Please fill in all fields');
      return;
    }

  //   const subject = `New message from ${fullName}`;
  //   const body = `Name: ${fullName}\nEmail: ${email}\nMessage: ${message}`;
  //   const mailtoLink = `mailto:danwamuyu06@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

  //   // Open mailto link in new tab
  //   //window.open(mailtoLink, '_self');
  //   window.location.href = mailtoLink;
  //  // form.reset();
  //   //sendButton.disabled = true; // Disable button after submitting
  // });
  const subject = 'New message from ${fullName}';
   const body = 'Name: ${fullName}\n Email: ${email}\n Message:${message}';
   const mailtoLink = 'mailto: danwamuyu06@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}'
//open mailto link in new tab
window.open(mailtoLink, '_blank');
form.reset();
  });

  // Enable/disable the send button based on form validation
  function validateForm() {
    const isValid = fullNameInput.value.trim() !== '' && emailInput.value.trim() !== '' && messageInput.value.trim() !== '';
    sendButton.disabled = !isValid;
  }

  fullNameInput.addEventListener('input', validateForm);
  emailInput.addEventListener('input', validateForm);
  messageInput.addEventListener('input', validateForm);
});

