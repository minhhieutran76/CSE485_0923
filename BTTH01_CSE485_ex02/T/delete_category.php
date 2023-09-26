<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Nevergon#3lose");
        $sql = "delete from theloai where ma_tloai = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        header('location:category.php');
    }
?>