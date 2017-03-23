<?php

// defineerime ühenduse muutujad
require 'functions/function.php';

home();
// loome ühenduse

   
$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server, $user, $pass);

function connect($conn){ 
// kontrollime ühenduse olemasolu
if (!$conn){
    
   die("Ühendust ei ole " . msqli_connect_error()); 
} 
    echo "Jess!! Kontakteerusin <br>";
    
}

    
// pärime andmebaasist andmeid (kõik korraga)

function my_query($conn){
$sql = "SELECT ID, Nimi, Perenimi, Isikukood, Aeg FROM ms16.inimesed";
$result = $conn->query($sql);
    
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "ID: ".$row["ID"].
              " Nimi:  ".$row["Nimi"].
              " Perenimi: ".$row["Perenimi"].
              " isikukood: ".$row["Isikukood"].
              " ja sisestusaeg: ".$row["Aeg"]."<br>";
    }
    
} else {echo "Sul on tühi baas, tee midagi!";}

}

function my_insert($conn){

    $sql = "INSERT INTO ms16.inimesed (Nimi, Perenimi, Isikukood) VALUES ('Peeter','Üksjalgvärav','37501014321')";
    $result = $conn->query($sql);
}

function my_delete($conn){
    $sql = "DELETE FROM ms16.inimesed WHERE Nimi = 'Peeter'";
    $result = $conn->query($sql);
}

function my_close($conn){
$conn->close();
    
}
// kõigi kirjete näitamise nupp
function show_button($conn){
    echo "<input type='submit' name='show' value='Näita kõiki'>";
    if(isset($_POST['show'])){
        my_query($conn);
    } else { echo "ei õnnestunud";}
}

// kirje lisamise nupp
function add_button($conn){
    echo "<input type='submit' name='add' value='Lisa kirje'>";
    if(isset($_POST['add'])){
        my_insert($conn);
    } else { echo "ei õnnestunud";}
}

// kirje kustutamise nupp
function delete_button($conn){
    echo "<input type='submit' name='delete' value='Kustuta kirje'>";
    if(isset($_POST['delete'])){
        my_delete($conn);
    } else { echo "ei õnnestunud";}
}

// my_query($conn);
// my_insert($conn);
// my_delete($conn);
// pärime andmebaasist andmeid (ühekaupa)


//lisame andmebaasi andmeid 


?>

<!doctype html>
<html>
<body>
    <form action='' method='post'>
    <ul>
        <li><?php show_button($conn); ?></li>
        <li><?php add_button($conn); ?></li>
        <li><?php delete_button($conn); ?></li>
    </ul>
    </form>
</body>

</html>