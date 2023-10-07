<?php
    include "./controllers/ClassController.php";
    include "./controllers/StudentController.php";

    $controller = isset($_GET['c'])?$_GET['c']:'Student';
    $past = $controller . "Controller";
    $pp = new $past();
    $pp->index();
?>