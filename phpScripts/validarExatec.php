<?php

    include 'config.php';
    $idUsuario = $_POST['idexatec'];
    

    // $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    $query = "UPDATE usuario SET validado = 2 WHERE id = $idUsuario";
    

    if ($conn->query($query) === TRUE) {
        echo json_encode(1);
      } else {
        echo json_encode($conn->error);
      }

    

     // get all products in json format.

?>