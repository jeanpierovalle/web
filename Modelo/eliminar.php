<?php
include("../includes/conexion.php");
$con = conectar();

$id = $_GET['id'];

// Obtener información de la imagen antes de eliminar
$sql_select = "SELECT imagen FROM productos WHERE id='$id'";
$query_select = mysqli_query($con, $sql_select);
$row = mysqli_fetch_array($query_select);

// Eliminar la imagen si existe y no es la por defecto
if ($row['imagen'] != "IMG/productos/default.jpg" && file_exists("../Public/" . $row['imagen'])) {
    unlink("../Public/" . $row['imagen']);
}

$sql = "DELETE FROM productos WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: tabla.php");
}
