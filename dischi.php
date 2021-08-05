<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- cartella/repo php-ajax-dischi
Stampare a schermo una decina di dischi musicali. Ecco un esempio di valori da poter inserire:
[
'title' => 'New Jersey',
'author' => 'Bon Jovi',
'year' => 1988,
'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
]
Utilizzare: Html, Sass, JS, VueJS, PHP
Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php
include "dischi_array.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
    <?php foreach ($dischi as $disco) { ?>
        <h2><?php echo $disco['title'] ?></h2>
        <img src="<?php echo $disco['poster'] ?>" alt="">
   <?php } ?>
</div>

</body>
</html>

