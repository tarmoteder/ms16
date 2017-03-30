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
        <li><?php show_button($conn); ?></li>
        <li><?php add_button($conn); ?></li>
        <li>
        <label for="Nimi">Nimi</label>
        <input type="text" name="Nimi">
        <label for="Perenimi">Perenimi</label>
        <input type="text" name="Perenimi">
        <label for="Isikukood">Isikukood</label>
        <input type="text" name="Isikukood">
        </li>
        <li><?php delete_button($conn); ?></li>
        <li>
        <label for="ID">Sisesta ID</label>
        <input type="text" name="ID">        
        </li>
    </ul>
    </form>
    <h2>GET meetod</h2>
    <form action='' method='get'>
    <ul>
       <li>
       <label for="ID">ID</label>
        <input type="text" name="ID">           
       </li>
       <li><?php search_by_button($conn); ?></li> 
    </ul>
    </form>
</body>

</html>