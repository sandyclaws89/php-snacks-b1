<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*SNACK1 */
        /* Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        Stampiamo a schermo tutte le partite con questo schema
        OLIMPIA MILANO - CANTU' | 55-60
            */
        $array_partite = [
            [
                'casa' => [
                    'nome' =>'Cantù',
                    'punteggio' => 90,
                ],
                'ospite' => [
                    'nome' =>'Olimpia Milano',
                    'punteggio' => 80,
                ],
            ],
            [
                'casa' => [
                    'nome' =>'Brindisi',
                    'punteggio' => 100,
                ],
                'ospite' => [
                    'nome' =>'Genova',
                    'punteggio' => 69,
                ],
            ],
            [
                'casa' => [
                    'nome' =>'Taranto',
                    'punteggio' => 23,
                ],
                'ospite' => [
                    'nome' =>'Verona',
                    'punteggio' => 74,
                ],
            ],
            [
                'casa' => [
                    'nome' =>'Lucania',
                    'punteggio' => 124,
                ],
                'ospite' => [
                    'nome' =>'Sassari',
                    'punteggio' => 124,
                ],
            ],
        ];
        ?>
        <?php
        $arr_match = array_chunk($array_partite, 2);
        // print_r(array_chunk($array_partite, 2));
        echo $arr_match[0]['casa'][0];
        for ($_i=0; $_i < count($array_partite); $_i++) {
           
            $array_team = array_column($array_partite[$_i], 'nome');
            // print_r($array_team); 
            // echo ($array_team[$_i]);
            // echo $match[$_i];
            // $score = array_column($array_partite[$_i], 'punteggio');
            // print_r($score);
            
           
        //    $home_team
        //    echo $home_team;
            // echo join("-",$array_partite[$_i]);
        }
        // echo $array_team[0];
        // echo $array_team[1];
   ?>
</body>
</html>