function validateForm(event) {
    event.preventDefault();
    var rating = document.getElementById("rating").value;
    var comment = document.getElementById("comment").value;
    if (rating == "" || comment == "") {
        alert("Veuillez remplir tous les champs !");
    } else {
        submitForm();
    }
}

function submitForm() {
    // Soumettre le formulaire au script PHP
    document.getElementById("avis").action = "assets/php/avis.php";
    document.getElementById("avis").submit();
    
    // Afficher un message de confirmation
    const message = document.getElementById("submit-message");
    alert("Votre avis a bien été pris en compte !");
  }
  