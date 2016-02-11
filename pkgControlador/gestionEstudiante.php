<?php

include '../pkgControlador/clsEstudiante.php';

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
} else {
    $codigo = "";
}

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $nombre = "";
}

if (isset($_POST['apellido'])) {
    $apellido = $_POST['apellido'];
} else {
    $apellido = "";
}

if (isset($_POST['cedula'])) {
    $cedula = $_POST['cedula'];
} else {
    $cedula = "";
}

if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
} else {
    $edad = "";
}

if (isset($_POST['semestre'])) {
    $semestre = $_POST['semestre'];
} else {
    $semestre = "";
}

$conex = new Estudiante($codigo, $nombre, $apellido, $cedula, $edad, $semestre);
$conex->conectar();

if ($_POST['type'] == 'save') {
    $conex->guardar();
}

if ($_POST['type'] == 'search') {
    $conex->buscar();
}

if ($_POST['type'] == 'delete') {
    $conex->eliminar();
}

if ($_POST['type'] == 'update') {
    $conex->modificar();
}

if ($_POST['type'] == 'list') {
    $conex->listar();
}



    

