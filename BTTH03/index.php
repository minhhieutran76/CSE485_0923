<?php
    include "./controllers/ClassController.php";
    include "./controllers/StudentController.php";

    $controller = isset($_GET['c'])?$_GET['c']:'Student';
    $function = isset($_GET['f'])?$_GET['f']:'index';
    $past = $controller . "Controller";
    $pp = new $past();
    $pp->$function();
?>