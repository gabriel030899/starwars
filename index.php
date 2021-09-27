
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars</title>
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page_top">
        <div class="user_info">
            <div class="user_info_title">
                <h2>Hello, <b>Padawan</b>!</h2>
            </div>
            <div class="user_info_form">
                <h3>May the <b>FORCE</b> know your <b>name</b> and <b>age</b>:</h3>
                <form method="post" action="sessionStart.php" id="user_form">
                    <div class="form_data">
                        <label for="">Name:</label>
                        <input type="text" name="userName" required>
                    </div>
                    <div class="form_data">
                        <label for="">Age:</label>
                        <input type="number" name="userAge" required>
                    </div>
                    <div class="form_button_div">
                        <input type="submit" id="form_button">
                    </div>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>