<?php
    $word = $_GET['word'];
    $paragraph = $_GET['paragraph'];
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-badwords</title>
</head>
<body>
  
    <div>
        <h2>i tuoi dati sono :
            <?php echo $paragraph;
                  
            ?>
        </h2>
        <h2>La lunghezza del testo è :
            <?php
                 echo strlen($paragraph) 
            ?>
        </h2>
    </div>
    <div>
        <h2>i tuoi dati censurati sono :
            <?php 
                echo str_replace($word,'***',$paragraph)
            ?>
        </h2>
        <h2>La lunghezza del testo è :
            <?php
                
                 echo strlen(str_replace($word,'***',$paragraph));
            ?>
        </h2>
    </div>
</body>
</html>