

<?php

echo "<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById(\'txt\').innerHTML =
    h + \":\" + m + \":\" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = \"0\" + i};  // add zero in front of numbers < 10
    return i;
}
</script>";

function aeg(){
date_default_timezone_set("Europe/Tallinn");
$time = date("H:i:s");
echo $time."<br>";
if ($time > "12:30"){
    echo "Aeg on lõunale minna";
} else {
    echo '<div id="txt">Kell on:';
    echo '<script>startTime();</script>';
    echo 'Peab veel kannatama</div>';
    
}
}
aeg();
?>

