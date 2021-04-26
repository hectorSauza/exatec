<?php

    include 'config.php';

    $query = "SELECT * from usuario WHERE validado = 1";
    $res = $conn->query($query);

    if (!$res) {
        printf("Errormessage: %s\n", $mysqli->error);
    }

    $emparray = array();
    while($row =mysqli_fetch_assoc($res))
    {
        $emparray[] = $row;
    }


    echo json_encode($emparray); // get all products in json format.

?>