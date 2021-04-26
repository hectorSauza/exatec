<?php

    include 'config.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];
    $email_exatec = $_POST['email_exatec'];
    $gradoEgreso = $_POST['gradoEgreso'];
    $enteraste = $_POST['enteraste'];
    $invito = $_POST['invito'];
    $telefono = $_POST['telefono'];
    $empresa = $_POST['empresa'];
    $tipo_negocio = $_POST['tipo_negocio'];
    $facturacion = $_POST['facturacion'];
    $antiguedad = $_POST['antiguedad'];
    $alcance = $_POST['alcance'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $website = $_POST['website'];
    $telefono_comercial = $_POST['telefono_comercial'];
    $descripcion = $_POST['descripcion'];
    $logo = $_POST['logo'];
    $foto = $_POST['foto'];


    $dir_subida = '/Applications/MAMP/htdocs/exatec/imgUsuarios/';
    $fichero_subido = $dir_subida . basename($_FILES['logo']['name']);
    move_uploaded_file($_FILES['logo']['tmp_name'], $fichero_subido);

    $dir_subida2 = '/Applications/MAMP/htdocs/exatec/imgUsuarios/';
    $fichero_subido2 = $dir_subida2 . basename($_FILES['foto']['name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido2);  

    $foto = $_FILES['foto']['name'];
    $logo = $_FILES['logo']['name'];
   


    $sql = "INSERT INTO usuario (nombre, email, matricula, email_exatec, gradoEgreso, enteraste, invito, telefono, empresa, tipo_negocio,
    facturacion, antiguedad, alcance, pais, estado, ciudad, website, telefono_comercial, descripcion, logo, foto)
    VALUES ('".$nombre."', '".$email."', '".$matricula."', '".$email_exatec."', '".$gradoEgreso."', '".$enteraste."', '".$invito."', '".$telefono."', '".$empresa."', '".$tipo_negocio."',
    '".$facturacion."', '".$antiguedad."', '".$alcance."', '".$pais."', '".$estado."', '".$ciudad."', '".$website."', '".$telefono_comercial."', '".$descripcion."', '".$logo."', '".$foto."')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(1);
    } else {
    echo json_encode("Error: " . $sql . "<br>" . $conn->error);
    }

    $conn->close();
?>