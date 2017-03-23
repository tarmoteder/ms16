<?php

require('/functions/function.php');

home();

$test = array('päev',1,'Tere',10.89,'Klass nr A210','1');

// massiivi liikmete väljatrükk
print_r($test);

// muutuja sisu vaatamine
var_dump($test);
// var_dump($var);

// massiivi sisu viisakas list
foreach ($test as $t){
    echo "$t <br>";
}

// massiivi eraldi liikmete kuvamine
$sum = $test[2]." ".$test[0]."ust<br>";

echo $sum;

$sum = $test[0]." ".$test[2]."ust<br>";

echo $sum;

// stringi tegemine massiiviks
$var = "Esimene, teine, kolmas, neljas";

echo $var."<br>";
print_r(explode(" ",$var));

// massiivi muutmine stringiks
$var_arr = array('Esimene', 'teine', 'kolmas', 'neljas');

echo implode(";",$var_arr)."<br>";

// massiivi lisamine

$var_arr_add = $var_arr;

array_push($var_arr_add,"viies","kuues");

print_r($var_arr_add);
echo "<br>";

// massiivist kustutamine

$var_arr_decrease = $var_arr;

array_pop($var_arr_decrease);
print_r($var_arr_decrease);

echo "<br>";
// sidusmassiivid (associated array)

$var_assoc = array('Inga' => 'esimene', 'Tuuli' => 'teine', 'Madis' => 'kolmas');

// massiivi võtmed

print_r(array_keys($var_assoc));
echo "<br>";
// massiivi väärtused

print_r(array_values($var_assoc));
echo "<br>";
// massiivi liikme väljatrükk võtme (id) järgi
    
echo $var_assoc['Inga'];
echo "<br>";

// mitmemõõteline massiiv

$esta = "eesti keel";
$mata = "matemaatika";
$kem = "keemia";


$hinded = array(
    "Peeter" => 
        array("$esta" => 4, "$mata" => 3, "$kem" => 5),
    "Mari" => 
        array("$esta" => 5, "$mata" => 4, "$kem" => 3),
    "Juhan" => 
        array("$esta" => 3, "$mata" => 5, "$kem" => 2),
    "Jüri" => 
        array("$esta" => 4, "$mata" => 1, "$kem" => 3)
               );
echo "Mari hinne $esta on: ";    
echo $hinded['Mari'][$esta]."<br>";

// mitmemõõteline massiiv väljatrükk
echo count($hinded)."<br>";
$hinded_id = array_keys($hinded);
for ($i=0; $i<count($hinded); $i++){
    echo  $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne){ echo $aine." : " .$hinne."<br>";}
    echo "<br>";         
}

$number[0]= 1;
$number[1]= 2;

define('A',"see on esimene liige");
define('B',"see on teine liige");

$char[A] = "a";
$char[B] = "b";

var_dump($number);
var_dump($char);

?>