<?php
$date = $_POST['selectedDate'];
$time = $_POST['selectedTime'];
$port = $_POST['selectedPort'];

// Ruta al archivo JSON
$filePath = './model/bookings.json';

// Leer el contenido del archivo JSON
$jsonString = file_get_contents($filePath);
if ($jsonString === false) {
    die("Error al leer el archivo");
}

// Convertir el JSON a un objeto PHP
$data = json_decode($jsonString, true);
if ($data === null) {
    die("Error al decodificar el JSON");
}

// Añadir una nueva reserva con las variables $date, $time, y $port
$newBooking = ["date" => $date, "time" => $time, "place" => $port];

// Añadir la nueva reserva al array de reservas
$data[] = $newBooking;

// Convertir de vuelta a JSON
$newJsonString = json_encode($data, JSON_PRETTY_PRINT);
if ($newJsonString === false) {
    die("Error al codificar a JSON");
}

// Escribir el JSON modificado de vuelta al archivo
if (file_put_contents($filePath, $newJsonString) === false) {
    die("Error al escribir en el archivo");
}

header('Content-Type: application/json');
echo json_encode(["message" => "Reserva añadida correctamente."]);
?>