<?php
$conn = new mysqli("127.0.0.1", "root", "Jeliel10", "aqtivamx_exatec");

/* comprueba la conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>