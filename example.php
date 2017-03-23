$world = "Maailm";
$greeting = "Tere";

$age = 5;
$name = "Nipitiri";
$diff = 5;
$result = $age + $diff;
$workdays = array("esmaspäev","teisipäev","kolmapäev","neljapäev","reede");

$people = array(
    "esimene" => "Peeter",
    "teine" => "Toivo",
    "kolmas" => "Ants");

echo "<b>$greeting </b> <i>$world</i><br>";
echo "$name on $age aastat vana.<br>";
echo "$name on $diff aastat pärast  $result aastat vana.<br>";

for($i=0; $i < count($workdays); $i++){
echo $workdays[$i]."<br>";
    }
    
foreach($people as $que => $name){
    echo "<b>".$que."</b> kohal on ".$name."</br>";
}