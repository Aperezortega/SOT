<?php
require_once('../includes/functions.php');
$action = $_GET['action'];

switch ($action) {
    case 'getHoursGrid':
        $date = $_POST['date'];
        $type = $_POST['type'];
        $hoursGrid = getHoursGrid($date, $type);
        echo json_encode($hoursGrid);
        break;
    case 'about':
        require_once('view/about.php');
        break;
    case 'contact':
        require_once('view/contact.php');
        break;
    default:
        require_once('view/home.php');
        break;
}
?>