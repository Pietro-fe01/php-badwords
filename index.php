<?php
    $paragraph = 'Lorem ipsum dolor sit amet lorem consectetur adipisicing elit. Lorem Cupiditate molestias iusto lorem pariatur consequuntur ipsa lorem, neque quam ea, culpa sed, saepe lorem vero repellat. Consequuntur lorem quia est sint autem aspernatur, lorem perspiciatis at?';
    $paragraph_length = strlen($paragraph);
    $censured_word = $_GET['censured_word'];
    $new_paragraph = str_replace(strtolower($censured_word), "***", strtolower($paragraph));
    $new_paragraph_length = strlen($new_paragraph);
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
    <main class="container">
        <section class="first paragraph">
            <h2>Paragrafo:</h2>
            <p><?php echo $paragraph; ?></p>
            <h4>Lunghezza paragrafo: <?php echo $paragraph_length; ?></h4>
        </section>
    
        <section class="second paragraph">
            <h2>Paragrafo censurato:</h2>
            <p><?php echo $new_paragraph; ?></p>
            <h4>Lunghezza paragrafo: <?php echo $new_paragraph_length; ?></h4>
        </section>

        <div class="hint">
            <h4>Esempio richiesta GET:</h4>
            <a href="http://localhost/BOOLEAN%20PHP/php-badwords/?censured_word=lorem">
                http://localhost/BOOLEAN%20PHP/php-badwords/?censured_word=lorem
            </a>
        </div>
    </main>
</body>
</html>