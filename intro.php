<?php

echo 'Hola SICI4997!<br><br>http://sici4997.uprp.edu/~username/intro.php<br>';
# Comentario
// Comentario
/* Comentario multi l’nea
 * Hola
 * como
 * estas
 */
echo 'Hola<br>'; // Saludando
echo 'Como estas?<br>'; # Preguntando
$nota = 'A'; // Variable con un String
$promedio = 3.5; // Variable con un Decimal
$notas = ['A', 'B', 'C', 'D', 'F']; // Variable con un Array
$temp = []; // As’ se define un Array vac’o
$temp = array(); // Estas es otra forma
// Uniendo texto y variables e imprimiendo
echo 'Yo quiero en este clase sacar ';
echo $nota;
echo ' para de esa forma tener un promedio de ';
echo $promedio;
echo '<br>';
$quizz = 7;
$quizzTotal = 10;
$promedioQuizz = ($quizz / $quizzTotal) * 100; // Operadores aritmŽticos
echo 'Saque en el quizz un promedio de: ';
echo $promedioQuizz;
echo '%<br>';
echo 'DespuŽs del bono, saque en el quizz: ';
echo $promedioQuizz++; // 70%
echo '%<br>';
echo 'DespuŽs del bono, saque en el quizz: ';
echo ++$promedioQuizz; // 72%
echo '%<br>';
echo '5 + 6 = ';
echo (5 + 6);
echo '<br>';
$quince = 15;
$quince /= 3; // 5
echo $quince;
echo '<br>';
$intro = 'Mi nombre es ';
$intro .= 'Omar G. Soto Fortu–o';
echo $intro . '<br>' . 'DespuŽs<br>';
$outcome = ($promedioQuizz > 80); // Operador de comparaci—n
echo 'Saque mas de 80 en el quizz? ' . $outcome . '<br>';
$outcome2 = ($promedioQuizz <= 80); // Operador de comparaci—n
echo 'Saque menos de 80 en el quizz? ' . $outcome2 . '<br>';
/*
 * Combinaci—n de operaciones l—gicos y de comparaci—n
 */
$notaF = ($promedioQuizz < 60);
$notaD = ($promedioQuizz >= 60 && $promedioQuizz < 70);
$notaC = ($promedioQuizz >= 70 && $promedioQuizz < 80);
$notaB = ($promedioQuizz >= 80 && $promedioQuizz < 90);
$notaA = ($promedioQuizz >= 90);
// Se mostrar‡ un 1 en la expresi—n booleana que evalœe a TRUE. En este caso, deber’a ser la C
echo 'Notas:<br>';
echo 'Tiene A? ' . $notaA . '<br>';
echo 'Tiene B? ' . $notaB . '<br>';
echo 'Tiene C? ' . $notaC . '<br>'; // Aqu’ deber’a salir el 1
echo 'Tiene D? ' . $notaD . '<br>';
echo 'Tiene F? ' . $notaF . '<br>';

echo 'Richard<br>';
echo 'http://sici4997.uprp.edu/~richard.aviles/intro.php';
echo "Como estas?<br />";
$name = 'Richard';
$fName = 'Aviles';
echo 'Mi nombre es...' . $name . '<br>';
echo "Mi nombre es... $name $fName<br>";
echo "Mi nombre es... {$name} a<br>";
echo "Mi nombre es...\$name \$fName<br>";
echo "Linea 1\nLinea2\nLinea3\n";
$a = 'Prueba';
echo 'Is String' . is_string($a) . '<br>';
$b = 20;
echo 'Is string?' . is_string($b) . '<br>';
echo 'Is Numeric?' . is_numeric($b). '<br>';
echo "5" + 5 . '<br>';
echo 5 + "5" . '<br>';
$letra = '25';
echo (int) $letra *20 . '<br>';

define('MUNICIPAL_TAX', 0.005);
define('STATE_TAX', 0.11);

$price = 25;
$taxes = ($price * (MUNICIPAL_TAX + STATE_TAX));
$taxes = round($taxes, 2);
$Total= $price + $taxes;

echo "Item price:$price <br>";
echo "Taxes:$taxes<br>";
echo "Total:$Total<br>";

function showIVU($price, $desc = 'UNDEFINED') {
    $taxes = calculateIVU($price);
    $Total= $price + $taxes;
    
    echo "Name: <b>$desc</b><br>";
    echo "Item price: $price <br>";
    echo "Taxes: $taxes<br>";
    echo "Total: $Total<br><br>";
}
function calculateIVU($price) {
    $taxes = ($price * (MUNICIPAL_TAX + STATE_TAX));
    $taxes = round($taxes, 2);
    
    return $taxes;
//return round($taxes, 2);
}

showIVU(9.99);
showIVU(5, 'Toilet Paper');
showIVU(1.99, 'Hand Sanitizer');

$scope1= 'Hola';

function testScoping() {
    global $scope1;
    
    echo $scope1 . '<br>';
}
function isA($grade) {
    return ($grade >=90);
}
function showDate($time = null){
    if ($time == null) {
        $time = time();
    }
    echo date('g:i:s a', $time);
}
showDate();
echo '<br>';
//sleep(2);
showDate(time()+1);
echo '<br>';
testScoping();

echo 'isA 95? ' . isA(95) . '<br>';
echo 'isA 100? ' . isA(100) . '<br>';
echo 'isA 80? ' . isA(80) . '<br>';


echo strrev('Richard') . '<br>';
echo str_repeat("\xF0\x9F\x98\x8A", 10) . '<br>';
echo strtoupper('richard'). '<br>';
echo strtolower('RICHARD'). '<br>';
echo str_replace ('a', 'i', 'Me llamo Richard') .'<br>';
echo ucfirst('richard') . '<br>';

$name = 'RICHARD';
$fname = 'Aviles';

echo ucfirst(strtolower($name)) . ' ' . ucfirst(strtolower($fname)) .'<br>';
?>




