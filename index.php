<?php
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate molestias iusto pariatur consequuntur ipsa, neque quam ea, culpa sed, saepe vero repellat. Consequuntur quia est sint autem aspernatur, perspiciatis at?';
    $paragraph_length = strlen($paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censuring Bad Words</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h2>Paragrafo:</h2>
    <p><?php echo $paragraph; ?></p>
    <h4>Lunghezza paragrafo: <?php echo $paragraph_length; ?></h4>
</body>
</html>