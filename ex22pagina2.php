<?php
    $quantity = $_POST['quantitat'];

    for ($i = 1; $i < $quantity; $i++) {
        echo "<a href='ex22pagina3.php?number=".$i."'>Comanda ".$i."</a><br>";
    }
?>