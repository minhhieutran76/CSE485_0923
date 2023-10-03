<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
        $sql = "delete from SinhVien where id = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        echo "Thành công";
    }
?>