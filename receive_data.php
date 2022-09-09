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
        $word = $_POST["word"] ?? '';
        // ?? '' => soluzione per non far apparire l'errore di index nell'array POST:
        // se il primo parametro ('word') esiste, usalo; altrimenti usa il secondo parametro: '';
        $paragraph = 'Lorem ciao dolor sit amet, ciao adipiscing elit, sed do ciao tempor incididunt ut labore et ciao magna aliqua.';
    ?>

    <h1>
        Parola digitata:
        <?php echo $word ?>
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
        <?php echo str_replace($word, '***', $paragraph) ?>
    </p>

</body>
</html>