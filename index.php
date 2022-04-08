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
            ]
        ];
        ?>
        <?php
        $arr_match = [];
        for ($_i=0; $_i < count($array_partite); $_i++) {
           
            $array_team = array_column($array_partite[$_i], 'nome');
            // print_r($array_team); 
            echo ($array_team);
            // echo $match[$_i];
            // $score = array_column($array_partite[$_i], 'punteggio');
            // print_r($score);
            
           
        //    $home_team
        //    echo $home_team;
            // echo join("-",$array_partite[$_i]);
        }
        // echo $match;
   ?>
</body>
</html>