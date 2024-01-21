document.addEventListener('DOMContentLoaded', function () {

         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function (e) {
                 e.preventDefault();
     
                 document.querySelector(this.getAttribute('href')).scrollIntoView({
                     behavior: 'smooth'
                 });
             });
         });
     
         $('#imageSlider').carousel();
     
         const leadForm = document.getElementById('leadForm');
     
         leadForm.addEventListener('submit', function (e) {
             e.preventDefault();
             console.log('Form submitted!');
         });
});
     