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
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hotels</title>
</head>
<body>
    <div class="container pt-4 ">
        <form  class="mb-4" action="http://localhost/php-hotel/" method="GET">
            <label class="me-1"for="parking">Seleziona hotel con parcheggio</label>
            <select class="me-4" name="parking">
                <option selected value="">nessun filtro</option>
                <option value="false">nessun parcheggio</option>
                <option value="true">con parcheggio</option>
            </select>
            <label class="me-1"for="voto">Filtra hotel per voto</label>
            <select  class="me-4" name="voto">
                <option selected value="">nessun filtro</option>
                <option value="1">1 stella</option>
                <option value="2">2 stelle</option>
                <option value="3">3 stelle</option>
                <option value="4">4 stelle</option>
                <option value="5">5 stelle</option>
            </select>
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form>
        <table class="table table-dark table-striped text-center">
            <thead>
                <tr>
                    <th>Nome hotel</th>
                    <th>Descrizion hotel</th>
                    <th>Disponibilità parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(array_filter($hotels)  as $hotel){?>
                    <tr>
                        <?php foreach($hotel as $key=>$data){
                            if($key=='name'){
                                echo "<th scope=\"row\">$data</th>";
                            }elseif($key=='parking'){
                                if($data){
                                    echo "<td><i class=\"fa-solid fa-check\"></i></td>";
                                }else{
                                    echo "<td><i class=\"fa-solid fa-xmark\"></i></td>";
                                }
                            }elseif($key=='vote'){
                        ?>
                        <td>
                            <?php 
                                for($i=0;$i<5;$i++){
                                    if($i<$data){
                                        echo "<i class=\"fa-solid fa-star\"></i>";
                                    }else{
                                        echo "<i class=\"fa-regular fa-star\"></i>";
                                    }
                                }
                            ?>
                        </td>
                        <?php }

                            else{
                                echo "<td>$data</td>";
                            }
                        }
                        ?>    
                    </tr>
                    
                <?php }?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>