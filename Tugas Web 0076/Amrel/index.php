<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Background PHP</title>
    <style>
        body {
            background-color: #f0f0f0; /* Ubah warna latar belakang */
            background-image: url('image.jpg'); /* Ganti dengan path gambar */
            background-size: 150%; /* Menutup seluruh area */
            background-position: center; /* Memusatkan gambar */
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
require_once 'config/database.php';
require_once 'app/controllers/usercontroller.php';

// Connect to the database
$dbconnection = getdbconnection();

// Get the action parameter from the URL
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Create an instance of usercontroller
$controller = new usercontroller($dbconnection);

// Switch between different actions
switch ($action) {
    case 'detail':
        $controller->show($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>
