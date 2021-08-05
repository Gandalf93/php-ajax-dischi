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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Dischi php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container ">   
        <h1 class="text-center">DISCHI</h1>
        <div class="d-flex flex-row flex-wrap">
            
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-2 m-3">
                    <div class="row mb-1 mt-5 riga_scritte">
                        <div class="col">
                            <h2><?php echo $disco['title'] ?></h2>
                            <h3><?php echo $disco['author'] ?></h3>
                            
                        </div>
                    </div>
                     <div class="row mb-3">
                     <img  class="immagine" src="<?php echo $disco['poster'] ?>" alt="">
                     <p><?php echo $disco['year'] ?></p>
                     </div>   
                    
                    
                </div>
        <?php } ?>
        </div>
    </div>

</body>
</html>

