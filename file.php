<?php


require('/functions/function.php');
require('menu.php');

home();
menu();

$file_name = 'tekst.txt';

function file_write(){
    $file = fopen('tekst.txt',"a") or die("Ei saanud avada");
    $tekst = "Esimene tekst sisestuseks\n";
    fwrite($file, $tekst);
    $tekst = "Teine tekst sisestuseks\n";
    fwrite($file, $tekst);
    $tekst = "Kolmas tekst sisestuseks\n";
    fwrite($file, $tekst);    
    fclose($file);
    echo "Õnnestus!";
}

function file_read(){
    $file = fopen('tekst.txt',"r") or die("Ei saanud avada");
    echo fread($file, filesize("tekst.txt"));
    fclose($file);
    
} 


    



// file_write();

// file_read();

counter();
?>