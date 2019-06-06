// Set reCaptcha to dark mode
document.addEventListener('DOMContentLoaded', function () {
  var footerForm = document.querySelectorAll('.parent-element div.g-recaptcha');
  var contactForm = document.querySelectorAll('.another-parent-element div.g-recaptcha');

  function setDarkTheme(el) {
    el.setAttribute('data-theme', 'dark');
  }

  footerForm.forEach(setDarkTheme);
  contactForm.forEach(setDarkTheme);
});