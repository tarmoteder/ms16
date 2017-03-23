<html>
<?php

require('mysql.php');

?>

<button type="submit" action="<?php my_insert($conn); ?>" value="Sisesta">Sisesta</button>

    
<button type="submit" action="<?php my_delete($conn); ?>" value="Kustuta">Kustuta</button>

</html>