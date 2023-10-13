<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
// $y = 10;


    const FRUITS = ['apple', 'orange', 'banana'];

    $newFruits = array_map(fn($fruit) => "$fruit<br/>", FRUITS);
    echo implode('', $newFruits);
 
    // echo count(FRUITS);
    // var_dump((in_array('apple', FRUITS)));
    
    // print_r(FRUITS);
    

    // function printer() {
    //     global $y;
    //     echo $y;
    // }

    // printer();

    // function sum($a, $b) {
    //     return $a + $b;
    // }

    // $multiply = fn($x, $y) => $x * $y;

    // $result = sum(1, 2);
    // echo $multiply(10, 2);

    // echo "<h1>El resultado es $result</h1>";


















    // comentario

    // echo "<h1>Welcome</h1>";
    // print('hola')

    # Variables
    $name = "Juan";
    $age = 23;
    $price = 12.5;

    // echo '<h1>Hola '.$name.', tu edad es: '.$age.' y te cuesta '.$price.'</h1>';
    // echo $_GET['name']

    // comprobarNombre('name');

    // if(isset($_GET['name'])) {
    //     echo '<h1>Hola '.$_GET['name'].'</h1>';
    // } else {
    //     echo '<h1>Hola desconocido</h1>';
    // }

    // Condicionales
    // if($age > 18) {
    //     echo '<h1>Eres mayor de edad</h1>';
    // } else{
    //     echo '<h1>Eres menor de edad</h1>';
    // }

    // function comprobarNombre($param)
    // {

    //     if (isset($_GET[$param])) {
    //         echo "<h1>El $param es $_GET[$param] </h1>";
    //     } else {
    //         echo '<h1>Hola desconocido</h1>';
    //     }
    // }

    // $personas = ['Pepe', 'Juan', 'Maria', 'Ana', 'Luis'];

    ?>

    <!-- <h1>Lista de personas</h1>
    <ul>
        <?php
        foreach ($personas as $name) {
            echo '<li>' . $name . '</li>';
        }
        ?>
    </ul> -->

    <!-- <h1>Lista de todos</h1>
    <form method="get">
        <label for="cantidad">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" />
    </form> -->

    <?php
    // $cantidad = $_GET['cantidad'];

    ?>

    <?php

    // if (isset($_GET['cantidad'])) {
    //     $cantidad = $_GET['cantidad'];
    //     $url = "https://jsonplaceholder.typicode.com/todos/$cantidad";

    //     $json = file_get_contents($url);
    //     $data = json_decode($json, true);

        // for ($i = 0; $i < $cantidad; $i++) {
        //     echo "<h1>Hola</h1>";
        // }

        // $x = 1;
        // do {
        //     echo "<h1>Hola</h1>";
        //     $x++;
        // } while ($x <= 10);

        // foreach ($data as $todo) {
        // echo "<h1>".$todo['title']."</h1>";
        // }

        /*  switch ($_GET['cantidad']) {
                case 10:
                    echo "<h1>".$data['title']."</h1>";
                    break;
                case 1: 
                    echo "<h1>".$data['id']."</h1>";
                    break;
                default:
                    
                    break;
            } */


        // $id = $data['id']; 
        // $userId = $data['userId'];
        // $title = $data['title'];
        // $completed = $data['completed'] ? 'yes' : 'no';

    // }

    ?>
    <!-- <h1>User Data</h1>
        <ul>
            <li>Id: <?php echo $id ?></li>
            <li>UserId: <?php echo $userId ?></li>
            <li>Title: <?php echo $title ?></li>
            <li>Completed: <?php echo $completed ?></li>
        </ul> -->
</body>

</html>