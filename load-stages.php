<?php
// Récupérer la langue stockée dans le cookie
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'fr'; // Langue par défaut
}

// Inclure le fichier des traductions
include_once("assets/locales/$lang.php");

// Code HTML des étapes supplémentaires
?>
<div class="stage" id="stage2">
  <div class="logo"><img src="assets/img/sled-racing-logo.webp" alt=<?php echo $trad['alt']['imagePenguin']; ?>></div>
  <div class="text">
    <h2 class="title"><?php echo $trad['title']['diggingBot']; ?></h2>
    <h3><?php echo $trad['text']['diggingBot']; ?></h3>
    <h3><?php echo $trad['text']['diggingBot2']; ?></h3>
    <a href="assets/download/AutoDiggingBot.zip" download><button class="down-button"><?php echo $trad['global']['download']; ?></button></a>
  </div>
</div>
<div class="stage" id="stage3">
  <div class="text">
    <h2 class="title"><?php echo $trad['title']['sleddingBot']; ?></h2>
    <h3><?php echo $trad['text']['sleddingBot']; ?></h3>
    <h3><?php echo $trad['global']['work']; ?></h3>
    <a href="#" download><button class="down-button" id="wip"><?php echo $trad['global']['download']; ?></button></a>
  </div>
  <div class="logo"><img src="assets/img/sled-racing-logo.webp" alt=<?php echo $trad['alt']['imagePenguin']; ?>></div>
</div>
<div class="stage" id="stage4">
  <div class="logo"><img src="assets/img/sled-racing-logo.webp" alt=<?php echo $trad['alt']['imagePenguin']; ?>></div>
  <div class="text">
    <h2 class="title"><?php echo $trad['title']['dancingBot']; ?></h2>
    <h3><?php echo $trad['text']['dancingBot']; ?></h3>
    <h3><?php echo $trad['global']['work']; ?></h3>
    <a href="#" download><button class="down-button" id="wip"><?php echo $trad['global']['download']; ?></button></a>
  </div>
</div>
