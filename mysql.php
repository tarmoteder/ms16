<?php

// defineerime ühenduse muutujad



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
$sql = "SELECT id, name, id_code FROM ms16.isik";
$result = $conn->query($sql);
    
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "id: ".$row["id"]." Nimi: ".$row["name"]." ja isikukood".$row["id_code"]."<br>";
    }
    
} else {echo "Sul on tühi baas, tee midagi!";}

}

function my_insert($conn){

    $sql = "INSERT INTO ms16.isik (name,id_code) VALUES ('Peeter','37501014321')";
    $result = $conn->query($sql);
}

function my_delete($conn){
    $sql = "DELETE FROM ms16.isik WHERE name = 'Tarmo'";
    $result = $conn->query($sql);
}

function my_close($conn){
$conn->close();
    
}
// pärime andmebaasist andmeid (ühekaupa)


//lisame andmebaasi andmeid 


?>