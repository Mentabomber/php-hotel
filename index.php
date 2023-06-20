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

// echo "<pre>";
// var_dump($hotels);
// echo "<pre>";


// echo'   <form action="">

//             <label for=""></label>
//             <input type="text">
//             <input type="text">

//         </form>

//             <table class="table">
//                 <thead class="table-light">
//                     <tr>';
//                     foreach ($hotels as $hotel) {
//                         echo '<th scope="col">' . array_keys($hotel) . '</th>';
//                     }; 
// echo '              </tr>
//                 </thead>
//                 <tbody>
//                     <tr>
//                         <th scope="row">1</th>
//                         <td>Mark</td>
//                         <td>Otto</td>
//                         <td>@mdo</td>
//                     </tr>
//                     <tr>
//                         <th scope="row">2</th>
//                         <td>Jacob</td>
//                         <td>Thornton</td>
//                         <td>@fat</td>
//                     </tr>
//                     <tr>
//                         <th scope="row">3</th>
//                         <td colspan="2">Larry the Bird</td>
//                         <td></td>
//                     </tr>
//                 </tbody>
//             </table>
//         ';
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

<label for=""></label>
<input type="text">
<input type="text">

</form>

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
    

    foreach ($hotels as $hotel) {
                        var_dump($hotel['name']);
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
                    ?>
   
</tbody>
</table>


</body>
</html>


