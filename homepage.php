<?php
    require_once 'database/userSession.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/scss/style_homepage.css">
    <title>Star Wars</title>
</head>
<body>
    <div class="interface_page">
        <div class="main_interface">
            <div class="mi_top">
                <h1> Welcome, <b><?php echo $nomeusuario?></b>!</h1>
            </div>
            <div class="mi_middle">
                <p>By the age of <b><?php echo $idadeusuario?></b>, you are more than ready to start your journey and discover everything about this incredible world of <b>STAR WARS</b>!</p>
                <p>Choose a spaceship to <b>EXPLORE THE STARS</b>!</p>
            </div>
            <div class="mi_bot">
                <button type="button" class="ship_buttons" id="back_ship">Back</button>
                <div class="space_images">
                    <img src="assets/img/spaceship1.png" id="mi_spaceship_one" alt="Spaceship-One">
                </div>
                <button type="button" class="ship_buttons" id="next_ship">Next</button>
            </div>
            <div class="ip_right">
                <button type="button" id="start_button">GO!</button>
            </div>
        </div>
    </div>
    <div class="content_page">
        <div class="movie" id="movie1">
            <img src="" alt="Star Wars 1">
            <div class="movieDesc">
                <h3>Star Wars Um</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie2">
            <img src="" alt="Star Wars 2">
            <div class="movieDesc">
                <h3>Star Wars Dois</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie3">
            <img src="" alt="Star Wars 3">
            <div class="movieDesc">
                <h3>Star Wars Tres</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie4">
            <img src="" alt="Star Wars 4">
            <div class="movieDesc">
                <h3>Star Wars Quatro</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie5">
            <img src="" alt="Star Wars 5">
            <div class="movieDesc">
                <h3>Star Wars Cinco</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie6">
            <img src="" alt="Star Wars 6">
            <div class="movieDesc">
                <h3>Star Wars Seis</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie7">
            <img src="" alt="Star Wars 7">
            <div class="movieDesc">
                <h3>Star Wars Sete</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie8">
            <img src="" alt="Star Wars 8">
            <div class="movieDesc">
                <h3>Star Wars Dois</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
        <div class="movie" id="movie9">
            <img src="" alt="Star Wars 9">
            <div class="movieDesc">
                <h3>Star Wars Nove</h3>
                <p>Breve descrição sobre o filme</p>
            </div>
        </div>
    </div>
    <script src="js/script_spaceships.js"></script>
    <script src="js/script_contentpage.js"></script>
</body>
</html>