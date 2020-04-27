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

$jakubZizala1 = 1;
$jakubZizala2 = 1;
if(true){
    echo"Zizalajakub";
}
echo "<br>";
if(true){
   echo"Kuba";
} else{
    echo "David";
}
echo "<br>";
if(false){
    echo"Novak";
} else{
    echo "Zizala";
}
echo "<br>";

if ($jakubZizala1 >= $jakubZizala2) {
    echo "Kuba<br>";
    if ($jakubZizala1 == $jakubZizala2) {
        echo "Zizala<br>";
    }
}
echo "<br>";

switch ($jakubZizala1) {
    case $jakubZizala1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    case 5:
        echo "5";
        break;
    case 6:
        echo "6";
        break;
}
echo "<br>";
$hraci = array(1 =>"Jordan", 2=>"James", 3=>"Harden", 4=>"Kareem", 5=>"Worthy", 6=>"Embiid", 7=>"Thybulle", 8=>"Bol", 9=>"Lillard", 10=>"Davis");
var_dump($hraci);
echo "<br>";
$nba = array(
    "prvni" => array(
        "druhy" => array(
            "treti" => array('Jmeno' => 'LeBron',
                'Prijmeni' => 'James',
                'Znacka bot' => 'Nike',
                'datum narozeni' => '30. prosince 1984',
                'příjem' => "37 milionu USD" ),
            array('Jmeno' => 'Kobe',
                'Prijmeni' => 'Bryant',
                'Znacka bot' => 'Nike',
                'datum narozeni' => '23. srpna 1978',
                'prijem' => "25 milionu USD" ),
            array('Jmeno' => 'Kyrie',
                'Prijmeni' => 'Irving',
                'Znacka bot' => 'Nike',
                'datum narozeni' => '23. brezna 1992',
                'prijem' => "20 milionu USD" ),
            array('Jmeno' => 'Damian',
                'Prijmeni' => 'Lillard',
                'Znacka bot' => 'Adidas',
                'datum narozeni' => '15. cervence 1990 ',
                'prijem' => "29 milionu USD" ),
            array('Jmeno' => 'Joel',
                'Prijmeni' => 'Embiid',
                'Znacka bot' => 'Under Armour',
                'datum narozeni' => '16. brezna 1994',
                'prijem' => "27 milionu USD" ),
            array('Jmeno' => 'Kobe',
                'Prijmeni' => 'Bryant',
                'Znacka bot' => 'Nike',
                'datum narozeni' => '23. srpna 1978',
                'prijem' => "25 milionu USD" ),
            array('Jmeno' => 'Giannis',
                'Prijmeni' => 'Antetokounmpo',
                'Znacka bot' => 'Nike',
                'datum narozeni' => '6. prosince 1994',
                'prijem' => "24 milionu USD" ),
            array('Jmeno' => 'Ben',
                'Prijmeni' => 'Simmons',
                'Znacka bot' => 'Nike',
                'datum narozeni' => '20. cervence 1996',
                'prijem' => "29 milionu USD" ),
            array('Jmeno' => 'James',
                'Prijmeni' => 'Harden',
                'Znacka bot' => 'Adidas',
                'datum narozeni' => '26. srpna 1989',
                'prijem' => "38 milionu USD" ),
            array('Jmeno' => 'Michael',
                'Prijmeni' => 'Jordan',
                'Znacka bot' => 'Jordan',
                'datum narozeni' => '17. unora 1963',
                'prijem' => "33 milionu USD" ),



        )
    )
);
var_dump($nba['prvni']);
echo "<br>";


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







