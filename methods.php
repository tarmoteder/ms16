<?php
var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";

?>

<!doctype html>
    <html> 
        <head>
        </head>
    
        <body>
            <h2>GET meetod</h2>
            <form action="" method="get">
            <ul>
                <li>
                <label for="nimi">Nimi</label>
                <input type="text" name="nimi">
                </li>
                <li>
                <label for="perenimi">Perenimi</label>
                <input type="text" name="peranimi">
                </li>
                <li>
                <input type="submit" name="submit" value="Sisesta">
                </li>
            </ul>
    <?php if (isset($_GET['nimi'])){
    foreach ($_GET as $key => $value){
        echo $key." on ".$value."<br>";
    }    
    } else {echo "Midagi ei ole veel sisestatud <br>";} ?>
            </form>
            <h2>POST meetod</h2>
            <form action="" method="post">
            <ul>
                <li>
                <label for="nimi">Nimi</label>
                <input type="text" name="nimi">
                </li>
                <li>
                <label for="perenimi">Perenimi</label>
                <input type="text" name="perenimi">
                </li>
                <li>
                <input type="submit" name="submit" value="Sisesta">
                </li>
            </ul>
<?php if (isset($_POST['nimi'])){
    foreach ($_POST as $key => $value){
        echo $key." on ".$value."<br>";
    }    
    } else {echo "Midagi ei ole veel sisestatud <br>";} ?>
            </form>
            
        </body>
    
    
    </html>
