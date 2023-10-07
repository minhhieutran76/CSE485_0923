<?php
    if(isset($_GET['id'])){
        $Id = $_GET['id'];
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
        $sql = "delete from Class where id = $Id;";
    
        $list_sql = $conn->prepare($sql);
        $list_sql->execute();

        header('location:/index.php?c=Class');
    }
?>
