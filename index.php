<?php
$lang = 'fr'; // Langue par défaut
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + 3600 * 24 * 30); // Stocker la langue choisie dans un cookie pendant 30 jours
} elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}
include_once("assets/locales/$lang.php");
require_once 'assets/php/avis.php';
$avis = new Avis();
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Club Penguin Bots</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/Sys_Snowbot.ico">
    <script src="assets/js/ajax.js" defer></script>
    <script src="assets/js/avis.js"></script>
    <script src="assets/js/contact.js"></script>
</head>

<body>
    <video src="assets/mov/pres_video2.mp4" id="background-video" autoplay loop muted alt=<?php echo $trad['alt']['videoPresentation']; ?>></video>

    <?php include('assets/php/header.php'); ?> <!-- Inclusion du header redondant -->

    <section>
        <div id="space-for-bgv"></div>
        <div id="main-place">
            
            <div id="space1"></div>
            <div id="presentation" class="frame">

            </div>
            <div id="space2"></div>
            <div id="download" class="frame">
                <div class="stage" id="stage1">
                    <div id="allIn1">
                        <h2><?php echo $trad['title']['allBots']; ?></h2>
                        <h3><?php echo $trad['text']['allBots']; ?></h3>
                        <h3><?php echo $trad['global']['work']; ?></h3>
                        <a href="#" download><button class="down-button" id="wip"><?php echo $trad['global']['download']; ?></button></a>
                        <button id="load_more" onclick="loadStages()"><?php echo $trad['global']['otherProject']; ?></button>
                    </div>
                </div>
            </div>
            <div id="space3"></div>
            <div id="frame3" class="frame">


            <?php include 'assets/php/ratings.php'; //Affichage de la note moyenne
             ?>

            
                <form id="avis" action="assets/php/avis.php" method="GET">
                    <label for="rating"><?php echo $trad['comment']['note']; ?></label>
                    <select name="rating" id="rating">
                        <option value="1">1 <?php echo $trad['comment']['star']; ?></option>
                        <option value="2">2 <?php echo $trad['comment']['stars']; ?></option>
                        <option value="3">3 <?php echo $trad['comment']['stars']; ?></option>
                        <option value="4">4 <?php echo $trad['comment']['stars']; ?></option>
                        <option value="5">5 <?php echo $trad['comment']['stars']; ?></option>
                    </select>
                    <br>
                    <label for="comment"><?php echo $trad['comment']['comment']; ?> :</label>
                    <textarea name="comment" id="comment" maxlength="170"></textarea>
                    <br>
                    <input type="submit" value="<?php echo $trad['comment']['send']; ?>" onclick="validateForm(event)">
                </form>

            </div>
            <div id="space4"></div>
            <div id="frame4" class="frame">
                <div id="contact">
                    <h2><?php echo $trad['title']['contact']; ?></h2>
                    <h6><?php echo $trad['text']['contact']; ?></h6>

                    <form id="contact" action="assets/php/contact.php" method="POST">
                        <label for="email">
                            Email
                        </label>
                        <input id="email" type="email" name="email">
                        <p></p>
                        <br>
                        <label for="comment"><?php echo $trad['comment']['comment']; ?> :</label>
                        <textarea name="comment" id="comment" maxlength="1500"></textarea>
                        <br>
                        <input type="submit" value="<?php echo $trad['comment']['send']; ?>" onclick="emailCheck(event)">
                    </form>

                </div>
            </div>
            <div id="copyright"><h6>© COPYRIGHT GrouinK and TatouPROD ©</h6></div>
        </div>
    </section>

    <footer>

    </footer>
</body>
</html>