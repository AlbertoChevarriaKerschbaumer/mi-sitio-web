<?php
include 'conexion.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

header("Location: index.php");
exit();
?>