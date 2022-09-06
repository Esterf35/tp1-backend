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
 /*Punto 1*/
 echo "Hola mundo";

 /*Punto 2*/

 $mensaje = "Hola mundo";
 echo $mensaje;

 /*Punto 3*/
 //variables enteras

 $caramelos = 20 ;
 $chupetines = 10 ;

 echo "caramelos mas chupetines =" ;
 echo $caramelos + $chupetines ;

 echo "caramelos menos chupetines=" ;
 echo $caramelos - $chupetines ;

 echo "caramelos por chupetines=" ;
 echo $caramelos * $chupetines ;

 echo "caramelos dividido chupetines=" ;
 echo $caramelos / $chupetines ;

 echo "caramelos porcentaje chupetines=" ;
 echo $caramelos % $chupetines ;

/*Punto 4*/

function centigradosAFahrenheit($centigrados)
        {
            return $centigrados * 9 / 5 + 32;
        }
        $centigrados = 20;
        $fahrenheit = centigradosAFahrenheit($centigrados);
        echo "$centigrados grados centígrados es igual a $fahrenheit grados fahrenheit";
    

/*Punto 5*/ 

//perimetro rectangulo 

$base = "18";
$altura ="12";

$perimetro = (2 * $base) + ( 2 * $altura);
echo " El perimetro del rectangulo es : $perimetro" ;

// Área rectangulo 

$base = "18";
$altura ="12";
$area = ($base * $altura) ;
echo "El area del rectangulo es : $area";

//perimetro circulo

$radio = "30";
$py = "3.14";
$diametro = "2";


$p = ($radio * $py) * $diametro;

echo "El perímetro del círculo es: $p";

//area circulo

$radio = "30";
        $py = "3.14";

        
        $a = (($radio * $radio) * $py);

        echo "El área del círculo es: $a ";



?>

</body>
</html>