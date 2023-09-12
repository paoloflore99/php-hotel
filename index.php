<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


//cosi si tampa tutto l'arrey
var_dump($hotels);

//cosi stampio l'arrey a chiave 3 
var_dump($hotels[3]);


//cosi stampo la chiave name nella chiave 2 di $hotels
var_dump($hotels[2]['name']);


$invio = "invio";


//foreach
$chiavi = [
    'PAOLO',
    'MARIO',
    'FRANCESCA',

];

//foreach 
foreach ($chiavi as $chiave) {
    echo $chiave[0] . " " . $chiave[1] . " " . $chiave[2];                  //perche prende solo le prime 3 lettere dell'arrey ? . fatto a caso 
    //echo $chiave;
    var_dump($chiave);
};
?>
<!-- [0 'name'] -->

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>php-hotel</title>
    </head>

<body>


    <!-- <div class="container">
        <div class="row">
            <form action="ricevitore.php" method="get">
                <input type="text">
                <button class="btn btn-primary"><?php echo $invio ?></button>
            </form>
        </div>
    </div> -->


    <div class="container">
        <div class="row">
            <ul class="list-group list-group-horizontal">
                <?php  foreach($hotels as $hotel) { ?>
                <li class="list-group-item"><?php echo $hotel['name']?></li>
                <?php } ?>
            </ul>
            <ul class="list-group list-group-horizontal-sm">
            <?php  foreach($hotels as $hotel) { ?>
                <li class="list-group-item"><?php echo $hotel['description']?></li>
                <?php } ?>

            </ul>
            <ul class="list-group list-group-horizontal-md">
            <?php  foreach($hotels as $hotel) { ?>
                <li class="list-group-item"><?php echo $hotel['parking']?></li>
                <?php } ?>

            </ul>
            <ul class="list-group list-group-horizontal-lg">
            <?php  foreach($hotels as $hotel) { ?>
                <li class="list-group-item"><?php echo $hotel['vote']?></li>
                <?php } ?>

            </ul>
            <ul class="list-group list-group-horizontal-xl">
            <?php  foreach($hotels as $hotel) { ?>
                <li class="list-group-item"><?php echo $hotel['distance_to_center']?></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</body>

</html>