<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        //array asociativo
        $arrayPer = array('Nombre' => 'Pepe','Apellido' => 'Pompin','Edad'=> '60');
        echo $arrayPer['Nombre']."<br>".$arrayPer['Apellido'].'<br>'.$arrayPer['Edad'];
         echo '<br/>';
         define('MINOMBRE','Carlos');
         echo 'Mi nombre es: '.MINOMBRE;
            echo '<br/>';
         echo gettype('Nombre');
         $se = $prompt("hola");
         $a =$prompt("ingresa el 1º numuro");
         $b=$prompt("ingresa el 2º numuro");

         operaciones($a,$b);
        function operaciones($n1,$n2)
        {

            echo "elija una operacion";
            $opcion =$prompt("ingresa s para suma , r para resta");
           // $opcion = array('s' =>'suma' ,'r' =>'resta' );
           switch ($opcion) {
               case 's':
                 echo 's'.$n1+$n2;
                   break;
               case 'r':
                 echo 'r'.$n1+$n2;
                   break;
               default:
                  echo 'opcion incorrecta';
                   break;
           }
        }
    ?>
</body>
</html>