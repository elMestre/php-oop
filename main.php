<?php

include 'model.php';
include 'controller.php';
include 'view.php';

error_log("\n\nEL USURARIO LLEGA A LA PÁGINA\n");

$uuid = uniqid();
$model = new Model($uuid);
$controller = new Controller($model, $uuid);
$view = new View($controller, $model, $uuid);


if (isset($_GET['click']) && !empty($_GET['click'])) {
    $controller->clicked($_GET['click']);
}

echo $view->output();

























/*


$wait = 3;
error_log("Hacemos cositas en el main (".$wait." segundos...)");
for ($i = 0; $i <=$wait; $i++)
{
    sleep(1);
}
error_log("\nFIN DEL MAIN");

while(TRUE)
{
    sleep(1);
    error_log("Keep alive");
}
*/
