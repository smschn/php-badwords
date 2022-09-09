<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords: 2</title>
</head>
<body>

    <?php
        $receivedWord = $_POST['userWord'];
        $paragraph = 'Tempum lorem ipsum dolor sit amet, lorem adipiscing elit, sed do eiusmod lorem incididunt ut labore et lorem magna aliqua.';
    ?>

    <h1>Ciao <?php echo $receivedWord ?>.</h1>

</body>
</html>