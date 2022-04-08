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
        // $arr_match = array_chunk($array_partite, 4);
        // var_dump($arr_match);
        // print_r(array_chunk($array_partite, 2));
        // echo $arr_match[0]['casa'][0];
        // for ($_i=0; $_i < count($array_partite); $_i++) {
            // $array_team = array_column($array_partite[$_i], 'nome');
            
            // echo (implode('-', $array_team));
            // var_dump($array_team);


            // $array_score = array_column($array_partite[$_i], 'punteggio');
            // echo (implode('-', $array_score));
            // var_dump($array_score);
            // echo ($result_match . array_merge($array_team, $array_score) );
            // $result_match  = array_merge($array_team, $array_score);
            // var_dump($result_match);
            // print_r ($result_match);

            // echo current($array_team);
        // }     
   ?>
   <?php
   /*SNACK2 */
   /*
   Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
   */?>
   <form action="" method="get">
        <label for=""> Inserisci il nome</label>
        <input type="text" name="name">
   </form>
   <?php
   
    $name = $_GET['name'];
    if( strlen($name) > 3) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
    // echo $name;
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    
    
    $cap = "97100";
    
    if (strlen($cap) != 5) {
        echo "Il CAP deve avere lunghezza pari a 5";
    }
   ?>


</body>
</html>