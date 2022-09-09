<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords: 2</title>
</head>
<body>

    <?php error_reporting (E_ALL ^ E_NOTICE); ?> <!-- così non vedo errori sull'index di $_POST -->

    <?php
        $receivedWord = $_POST['userWord'];
        $paragraph = 'Tempum lorem ipsum dolor sit amet, lorem adipiscing elit, sed do eiusmod lorem incididunt ut labore et lorem magna aliqua.';
    ?>

    <h1>
        <?php echo $receivedWord ?>
    </h1>

    <p>
        Lunghezza del paragrafo: <?php echo strlen($paragraph) ?>
    </p>
    
    <p>
        <?php echo $paragraph ?>
    </p>

</body>
</html>