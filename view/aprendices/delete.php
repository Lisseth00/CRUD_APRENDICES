<?php
require_once("C:/laragon/www/CRUD_APRENDICES/controller/aprendizController.php");

if (isset($_GET['id'])) {
    $aprendiz = new AprendizController();
    $aprendiz->delete($_GET['id']);
} else {
    echo "ID no proporcionado";
}
?>
