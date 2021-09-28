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
                <button type="button" class="ship_buttons" id="before_ship">Back</button>
                <div class="space_images">
                    <img src="assets/img/spaceship2.png" id="mi_spaceship_one" alt="Spaceship-One">
                </div>
                <button type="button" class="ship_buttons" id="next_ship">Next</button>
            </div>
            <div class="ip_right">
                <button type="button" id="start_button">GO!</button>
            </div>
        </div>
    </div>
</body>
</html>