document.querySelector('button')
        .addEventListener(1, async () => {
          try {
            console.log('Avant le fetch')
            const response = await fetch('/server.php')
            console.log('Après le fetch')
          } catch (error) {

          }
        })


        

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementsByTagName('header')[0].classList.add("header-scrolled");
    document.getElementById("main-title").style.fontSize = "0px";
    document.getElementById("background-video").style.filter = "blur(75px)";
    document.getElementById("go-up").style.height = "4vw";
    document.getElementById("go-up").style.width = "4vw";
  } else {
    document.getElementsByTagName('header')[0].classList.remove("header-scrolled");
    document.getElementById("main-title").style.fontSize = "3.5rem";
    document.getElementById("background-video").style.filter = "blur(0px)";
    document.getElementById("go-up").style.height = "0px";
    document.getElementById("go-up").style.width = "0px";
  }
}


function loadStages() {
  var lang = "<?php echo $lang; ?>";
  // Créer un objet XMLHttpRequest
  var xhr = new XMLHttpRequest();
  // Spécifier la méthode HTTP et l'URL de la requête
  xhr.open('GET', 'load-stages.php', true);
  // Envoyer la requête au serveur
  xhr.send();
  // Gérer la réponse du serveur
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Si la réponse est prête et que le code de statut HTTP est 200 (OK)
      // Ajouter la réponse dans la div "download"
      var downloadDiv = document.getElementById('download');
      downloadDiv.innerHTML += this.responseText;
      // Masquer le bouton "Voir d'autres projets"
      var loadMoreButton = document.getElementById('load_more');
      loadMoreButton.style.display = 'none';
    }
  };
}

