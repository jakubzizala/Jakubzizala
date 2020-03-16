<?PHP

$a = 2;
$b = 2;

//aritmeticke operatory

echo "<br> Sčítání";
var_dump($a + $b);
echo "<br>";

echo "<br> Odčítání";
var_dump($a - $b);
echo "<br>";

echo "<br> Dělení";
var_dump($a / $b);
echo "<br>";

echo "<br> Násobení";
var_dump($a * $b);
echo "<br>";

//prirovnavaci operatory

echo "<br>";
var_dump($a++);

echo "<br>";
var_dump($a--);

echo "<br>";
var_dump($a += $b);

echo "<br>";
var_dump($a -= $b);

echo "<br>";
var_dump($a *= $b);

echo "<br>";
var_dump($a /= $b);

//provnavaci operatory

echo "<br> Rovná se";
echo "<br>";
var_dump($a == $b);

echo "<br> Má jinou hodnotu";
echo "<br>";
var_dump($a != $b);

echo "<br> A je větší než B";
echo "<br>";
var_dump($a > $b);

echo "<br> B je větší než A";
echo "<br>";
var_dump($a < $b);

echo"<br>";


/**
 * @todo Validuje zakazana slova 
 * @param array $param1 slova
 * @param string $param2 Retezec pro kontrolu
 * @return boolean
 */


function isvalid(array$param1, string$param2) {

    foreach ($param1 as $value) {
       
        if (strpos($param2, $value)) {
            return true;
        }
    }
    
    return false;
}

$slova = array("hovno","židi");
$veta = "někteří lidi jsou židi";

var_dump(isvalid($slova, $veta));

?>







