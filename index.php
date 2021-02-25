<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php badwords</title>
</head>
<body>

    <?php

    $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero dolores itaque, unde est dolor atque dignissimos, animi sunt officia distinctio quis culpa consequatur similique rem reprehenderit ex? Laboriosam, dolore omnis?';

    $text = str_replace('Laboriosam','****', $text);

    echo $text;
   
    ?>  

    <hr>

    <?php
     var_dump($_GET);
    ?>  

     <hr>

    Questa stringa è lunga <?php  echo strlen($text); ?>









</body>
</html>