<?php
if(isset($_POST["nombre"]) && $_POST["nombre"] != ""){

    $mysqli = new mysqli("localhost", "root", "", "bdcst");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $nombre = $mysqli->real_escape_string($_POST["nombre"]);
    $numero_telefono = $mysqli->real_escape_string($_POST["celular"]);
    $correo_electronico = $mysqli->real_escape_string($_POST["correo"]);
    $observaciones = $mysqli->real_escape_string($_POST["mensaje"]);

    $sql = "INSERT INTO contactar (nombre, numero_telefono, correo_electronico, observaciones) 
            VALUES ('$nombre', '$numero_telefono', '$correo_electronico', '$observaciones')";

    if ($mysqli->query($sql) === TRUE) {
        $mysqli->close();
        header("Location: contactar.php?result=success");
        die();
    } else {
        $mysqli->close();
        echo "Error: " . $mysqli->error;
    }
}
?>


