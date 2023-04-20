const emailCheck = (email) => /[a-zA-Z0-9-._]+@[a-zA-Z0-9-._]+\.[a-z]{2,}/.test(email)
const errorContainer = document.querySelector('form p:first-of-type')
const email = document.getElementById('email')

const eventInputEmail = function (event) {
  if (emailCheck(email.value)) {
    email.classList.remove('error')
    errorContainer.innerText = ''
    if(document.getElementById("comment").value.trim() !== '') {
      submitForm();
    } else {
      alert("<?php echo $trad['comment']['emptyField']; ?>");
    }
  } else {
    errorContainer.innerText = 'L\'email n\'a pas le bon format'
    email.classList.add('error')
  }
}

document.querySelector('form').addEventListener('submit', (event) => {
  event.preventDefault()
  eventInputEmail()
  email.addEventListener('input', eventInputEmail)
})

function submitForm() {
  // Soumettre le formulaire au script PHP
  document.getElementById("contact").action = "assets/php/contact.php";
  document.getElementById("contact").submit();
}
