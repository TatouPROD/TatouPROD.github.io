<?php

require_once __DIR__ . '/../models/avis.php';

$avis = new Avis();

// Récupération des avis
$allAvis = $avis->getAvis();
$goodAvis = $avis->getGoodAvis();

$ratings = array_column($allAvis, 'rating');
$comments = array_column($goodAvis, 'commentaire');

// Calcul de la moyenne des notes
if (count($ratings) > 0) {
    $average_rating = array_sum($ratings) / count($ratings);
    $average_rating = number_format($average_rating, 1);
    echo '<h2>' . $trad['comment']['average'] . '</h2>' . '<h5>' . $average_rating . '</h5>';
} else {
    echo '<h6>' . $trad['comment']['noNote'] . '</h6><br>';
}

// Affichage des commentaires aléatoires
if (!empty($comments)) {
    echo '<h4 class="note">' . $trad['comment']['randomComments'] . '<h5>';
    shuffle($comments);
    for ($i = 0; $i < 3 && $i < count($comments); $i++) {
        echo "<p class='commentaire'>" . $comments[$i] . "</p>";
    }
    echo '</h5></h4>';
} else {
}


?>

