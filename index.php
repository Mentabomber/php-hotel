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
// if (foreach($hotels as $hotel){

// }) {
//     # code...
// }
// $_GET('search');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>php-hotel</title>
</head>
<body>
<form action="">

<label for="search">Filtra per possibilità parcheggio:</label>
<input type="checkbox" name="parcheggio-si">
<br>
<input type="text" name="voto">
<br>
<input type="submit" value="SEARCH">
<table class="table">
  
<thead class="table-light">
    <tr>
    <?php 
    
    // metto tutti i nomi delle chiavi dentro l'array $keysName
    $keysName = array_keys($hotels[0]);

    // var_dump($keysName);
    //stampo tutte gli elementi dentro l'array $keysName
    foreach ($keysName as $i) {
                                        
                        echo '<th scope="col">' . ($i) . '</th>';

                    }; 
                    ?>
    </tr>
</thead>
<tbody>

    <?php 
    var_dump($_GET);
    
    if ($_GET == [] || $_GET["parcheggio-si"] == ""  && $_GET["voto"] == ""){
        foreach ($hotels as $hotel) {

            echo '<tr>' . 
                    '<th>' . 
    
                                ($hotel['name']) . 
            
                    '</th>' . 
                    '<td>' .    ($hotel['description']) . '</td>' .
                    '<td>' .    ($hotel['parking']) . '</td>' .
                    '<td>' .    ($hotel['vote']) . '</td>' .
                    '<td>' .    ($hotel['distance_to_center']) .
            
                '</tr>';  

        }; 
    }
    elseif ($_GET["parcheggio-si"] == "" && $_GET["voto"] !== "") {
        foreach ($hotels as $hotel) {
            if ($hotel['vote'] >= $_GET["voto"]) {
                echo '<tr>' . 
                '<th>' . 

                            ($hotel['name']) . 
        
                '</th>' . 
                '<td>' .    ($hotel['description']) . '</td>' .
                '<td>' .    ($hotel['parking']) . '</td>' .
                '<td>' .    ($hotel['vote']) . '</td>' .
                '<td>' .    ($hotel['distance_to_center']) .
        
            '</tr>';  
            }
        }; 
    }
    elseif ($_GET["parcheggio-si"] !== "" && $_GET["voto"] == "") {
        foreach ($hotels as $hotel) {
            if ($hotel['parking']) {
                echo '<tr>' . 
                '<th>' . 

                            ($hotel['name']) . 
        
                '</th>' . 
                '<td>' .    ($hotel['description']) . '</td>' .
                '<td>' .    ($hotel['parking']) . '</td>' .
                '<td>' .    ($hotel['vote']) . '</td>' .
                '<td>' .    ($hotel['distance_to_center']) .
        
            '</tr>';  
            }
        }; 
    }
    else{
        
        foreach ($hotels as $hotel) {
            if ($hotel['parking'] && $hotel['vote'] >= $_GET["voto"]) {
                echo '<tr>' . 
                '<th>' . 

                            ($hotel['name']) . 
        
                '</th>' . 
                '<td>' .    ($hotel['description']) . '</td>' .
                '<td>' .    ($hotel['parking']) . '</td>' .
                '<td>' .    ($hotel['vote']) . '</td>' .
                '<td>' .    ($hotel['distance_to_center']) .
        
            '</tr>';  
            }
        }; 
    };


    // if ($_GET == [] || $_GET["voto"] == "") {
    //     foreach ($hotels as $hotel) {
           
    //             echo '<tr>' . 
    //             '<th>' . 

    //                         ($hotel['name']) . 
        
    //             '</th>' . 
    //             '<td>' .    ($hotel['description']) . '</td>' .
    //             '<td>' .    ($hotel['parking']) . '</td>' .
    //             '<td>' .    ($hotel['vote']) . '</td>' .
    //             '<td>' .    ($hotel['distance_to_center']) .
        
    //         '</tr>';  
            

    //     }; 
    // }
    // else {
    //     foreach ($hotels as $hotel) {
    //         if ($hotel['vote'] >= $_GET["voto"] ) {
    //             echo '<tr>' . 
    //             '<th>' . 

    //                         ($hotel['name']) . 
        
    //             '</th>' . 
    //             '<td>' .    ($hotel['description']) . '</td>' .
    //             '<td>' .    ($hotel['parking']) . '</td>' .
    //             '<td>' .    ($hotel['vote']) . '</td>' .
    //             '<td>' .    ($hotel['distance_to_center']) .
        
    //         '</tr>';  
    //         }

    //     }; 
    // }

                    ?>
   
</tbody>
</table>
</form>




</body>
</html>


