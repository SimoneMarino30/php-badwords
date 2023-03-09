<?php

$my_text = $_GET["my_text"];
$my_bad_word = $_GET["badword"];

$length = 
$word_replaced = str_replace($my_bad_word, '***', $my_text);
// var_dump($word_replaced)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Outcome:</h1>
    <h2>Original:</h2>
    <p>The paraghrap "<?php echo $my_text?>" is <?php echo strlen($my_text) ?> letters long </p>
    <h2>Censored:</h2>
    <p>The paraghrap "<?php echo $word_replaced?>"  is <?php echo strlen($word_replaced) ?> letters long after censorship </p>
    <h3>WATCH YOUR LANGUAGE, PLEASE!!!</h3>
</body>
</html>