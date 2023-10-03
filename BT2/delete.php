<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=cse", "root", "Nevergon#3lose");
        $sql = "delete from users where id = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        header('location:index.php');
    }
?>