<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
//Stampare a schermo il paragrafo e la sua lunghezza.
//Una parola da censurare viene passata dall'utente tramite parametro GET.
//Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

$name = 'PHP Language';
$nameCensored = $name . ' '. 'Censored';
$paragraph = 'PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code (which may be any type of data, such as generated HTML or binary image data) would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context, such as standalone graphical applications and robotic drone control. PHP code can also be directly executed from the command line.';

$censoredWord = $_GET['word']; 
$censoredParagraph = str_replace($censoredWord, '***', $paragraph);

?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>
  <div class="container">
    <h1> <?php echo $name; ?> </h1>
    <p class="paragraph">
      <?php echo $paragraph; ?>
    </p>
    <span>This Paragraph is <?php echo strlen($paragraph); ?> characters long! </span>
  </div>
  <div class="container">
    <h1> <?php echo $nameCensored; ?> </h1>
    <p class="paragraph">
      <?php echo $censoredParagraph;  ?>
    </p>
    <span>This Paragraph is <?php echo strlen($censoredParagraph); ?> characters long! </span>
  </div>
</body>
</html>