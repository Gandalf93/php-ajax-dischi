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

$dischi = [
    [
        'title' => 'Fear of the Dark',
        'author' => 'Iron Maiden',
        'year' => 1992,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/e/eb/Iron_Maiden_-_Fear_Of_The_Dark.jpg',
    ],
    [
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'year' => 1987,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/6148jblbNqL._AC_SL1500_.jpg',
    ],
    [
        'title' => 'Nightfall in Middle-Earth',
        'author' => 'Blind Guardian',
        'year' => 1998,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/99/NFoME.jpg',
    ],
    [
        'title' => 'By the Way',
        'author' => 'Red Hot Chili Peppers',
        'year' => 2002,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/23/Rhcp9.jpg/220px-Rhcp9.jpg',
    ],
    [
        'title' => 'A Night at the Opera',
        'author' => 'Queen',
        'year' => '1975',
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/Bohemian_Rhapsody_music_video_still.png/220px-Bohemian_Rhapsody_music_video_still.png',
    ],
    [
        'title' => 'Absolution',
        'author' => 'Muse',
        'year' => 2003,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/b/b4/Muse_-_Absolution_Cover_UK.jpg',
    ],
    [
        'title' => 'Green River',
        'author' => 'Creedence Clearwater Revival',
        'year' => 1969,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/04/Creedence_Clearwater_Revival_-_Green_River.jpg',
    ],
    [
        'title' => 'Permanent Vacation',
        'author' => 'Aerosmith',
        'year' => 1987,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/9b/Aerosmith_-_Permanent_Vacation.JPG',
    ],
    [
        'title' => 'Yellow Submarine',
        'author' => 'Beatles',
        'year' => 1969,
        'poster' => 'https://i2.wp.com/stonemusic.it/wp-content/uploads/2019/01/R-2091637-1267894244.jpeg1_.jpg?fit=600%2C600&ssl=1',
    ],
    [
        'title' => 'Born This Way',
        'author' => 'Lady Gaga',
        'year' => 2011,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/a/ad/Lady_Gaga_-_Born_This_Way_%28single%29.png',
    ],
];

?>