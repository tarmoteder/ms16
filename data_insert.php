<?php 

include 'mysql.php';
include 'menu.php';

?>

<!doctype html>
<html>
<body>
    <h2>POST meetod</h2>
    <form action='' method='post'>
    <ul>
        <!-- kõigi kirjete näitamine -->
        <li><?php show_button($conn); ?></li>
    </ul>
    </form>
    <form action='' method='post'>
        <ul>
        <!-- lisamine -->
        <li><?php add_button($conn); ?></li>
        <li>
        <label for="Nimi">Nimi</label>
        <input type="text" name="Nimi" required>
        <label for="Perenimi">Perenimi</label>
        <input type="text" name="Perenimi">
        <label for="Isikukood">Isikukood</label>
        <input type="text" name="Isikukood" required>
        </li>
        <!-- kustutamine -->
        <li><?php delete_button($conn); ?></li>
        <li>
        <label for="PARAM">Veerg</label>
        <input type="text" name="PARAM" required>           
        <label for="ID">Sisesta väärtus</label>
        <input type="text" name="ID" required>        
        </li>
    </ul>
    </form>
    <h2>GET meetod</h2>
    <form action='' method='get'>
    <ul>
       <li>
        <!-- kirje otsimine -->
        <label for="PARAM">Veerg</label>
        <input type="text" name="PARAM" required>           
       </li>
       <li>
        <label for="ID">Väärtus</label>
        <input type="text" name="ID" required>           
       </li>
       <li><?php search_by_button($conn); ?></li> 
    </ul>
    </form>
</body>

</html>