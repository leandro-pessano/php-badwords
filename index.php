<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
    $badWord = $_GET["parola"];
    $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit';
    $paragrafo2 = str_replace($badWord, '***', $paragrafo);
  ?>

  <p><?php echo 'Uncensored paragraph: ' . $paragrafo ?>; </p>
  <p><?php echo 'Lunghezza: ' . strlen($paragrafo) ?>;</p>
  <p><?php echo 'Censored paragraph: ' . $paragrafo2 ?>; </p>

</body>
</html>
