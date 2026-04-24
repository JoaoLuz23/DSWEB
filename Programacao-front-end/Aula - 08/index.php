
<?php

if(isset($_POST['modo'])){

    $modo = $_POST['modo'];

    exec("mode COM4 BAUD=9600 PARITY=n DATA=8 STOP=1 xon=off");

    $serial = fopen("COM4", "w");

    fwrite($serial, $modo."\n");

    fclose($serial);

    echo "Modo enviado: ".$modo;
}

?>