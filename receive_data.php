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
        $wordReceived = $_POST['word'];
        $paragraph = 'Lorem ciao dolor sit amet, ciao adipiscing elit, sed do ciao tempor incididunt ut labore et ciao magna aliqua.';
    ?>

    <h1>
        <?php echo $wordReceived ?>
    </h1>

    <p>
        Lunghezza del paragrafo:
        <?php echo strlen($paragraph) ?>
    </p>

    <p>
        Paragrafo normale:
        <?php echo $paragraph ?>
    </p>

    <p>
        Paragrafo con censura della parola 'ciao':
        <?php echo str_replace('ciao', '***', $paragraph) ?>
    </p>

</body>
</html>