<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SNACK1 -->
    <div>
        <?php 

        /* Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa ospite, punti fatti dalla squadra di  casa e punti fatti dalla squadra ospite.
        Stampiamo a schermo tutte le partite con questo schema
        OLIMPIA MILANO - CANTU' | 55-60
            */
        // $array_partite = [
        //     [
        //         'casa' => [
        //             'nome' =>'Cantù',
        //             'punteggio' => 90,
        //         ],
        //         'ospite' => [
        //             'nome' =>'Olimpia Milano',
        //             'punteggio' => 80,
        //         ],
        //     ],
        //     [
        //         'casa' => [
        //             'nome' =>'Brindisi',
        //             'punteggio' => 100,
        //         ],
        //         'ospite' => [
        //             'nome' =>'Genova',
        //             'punteggio' => 69,
        //         ],
        //     ],
        //     [
        //         'casa' => [
        //             'nome' =>'Taranto',
        //             'punteggio' => 23,
        //         ],
        //         'ospite' => [
        //             'nome' =>'Verona',
        //             'punteggio' => 74,
        //         ],
        //     ],
        //     [
        //         'casa' => [
        //             'nome' =>'Lucania',
        //             'punteggio' => 124,
        //         ],
        //         'ospite' => [
        //             'nome' =>'Sassari',
        //             'punteggio' => 124,
        //         ],
        //     ],
        // ];
        ?>
        <?php
        // $arr_match = array_chunk($array_partite, 4);
        // var_dump($arr_match);
        // print_r(array_chunk($array_partite, 2));
        // echo $arr_match[0]['casa'][0];
        // for ($_i=0; $_i < count($array_partite); $_i++) {
        //     $array_team = array_column($array_partite[$_i], 'nome');

        //     echo (implode('-', $array_team) . ' | ');
        //     // var_dump($array_team);


        //     $array_score = array_column($array_partite[$_i], 'punteggio');
        //     echo (implode('-', $array_score));
        //     var_dump($array_score);
        //     // echo ($result_match . array_merge($array_team, $array_score) );
        //     // $result_match  = array_merge($array_team, $array_score);
        //     // var_dump($result_match);
        //     // print_r ($result_match);
        //     // echo current($array_team);
        //     }     
        ?>
    </div>
    <!-- SNACK2   -->
    <div>
        <?php
        // /*
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non     conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail       contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare    “Accesso riuscito”, altrimenti “Accesso negato”
        // */
        // ?>
       
        // <form action="" method="get">
        //      <label for=""> Inserisci il nome</label>
        //      <input type="text" name="name">
        //     <label for="">Inserisci la email</label>
        //      <input type="text" name="mail">
        // <!-- </form>

        // <form action="" method="get"> -->
        // <label for="">Inserisci la tua età</label>
        //      <input type="text" name="age">
        //      <input type="submit">

        //     </form>
        // <?php 
        // if (isset($_GET['name'])) {
        //     $name = $_GET['name'];
        //  if( strlen($name) > 3) {
        //      echo 'Accesso riuscito';
        //  } else {
        //      echo 'Accesso negato';
        //  }
        // }
         
        //  // echo $name;
        //  if (isset($_GET['mail'])) {
        //     $mail = $_GET['mail'];
        //     if(!(stripos($mail, '@')!==false && stripos($mail, '.')!== false)) {
        //         echo 'L\'email deve contenere obbligatoriamente una @ e un punto';
        //     } else {
        //         echo 'ok';
        //     }
        // }


        // if (isset($_GET['age'])) {
        //     $age = $_GET['age'];
        //     if (!(is_numeric($age))) {
        //         echo 'Non è un numero';
        //     } else {
        //         echo 'ok';
        //     }
        // }


        //  // $cap = "97100";

        //  // if (strlen($cap) != 5) {
        //  //     echo "Il CAP deve avere lunghezza pari a 5";
        //  // }
        ?>
    </div>
    <!-- SNACK3 -->
    <div>
        <?php 
            // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà   contenere lo stesso numero più di una volta

        //     $arr_num = [];
        //     for ($j=0; $j < 5; $j++) {
        //         $control = true;
                
        //         // $arr_num[] = $number;
        //         while ($control) {
        //             $number = rand(0,6);
                 
        //             // $number = rand(0,6);
        //             if (!in_array($number, $arr_num)){
        //                 $arr_num[] = $number;
        //                 $control = false; 
                        
                       
        //             }
        //         }
           
        // }
        // var_dump($arr_num);
        ?>
    </div>
    <!-- Snack 5 -->
    <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente sunt, temporibus accusamus a deserunt magnam inventore, velit repellat. architecto pariatur numquam perspiciatis id? Laborum totam voluptates quibusdam excepturi saepe libero.
    </div>
</body>
</html>