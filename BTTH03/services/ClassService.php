<?php 
    include "./models/Class.php";
    class ClassService{
        public function getAllClass(){
            //Ket noi database
            try{
                $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");

                //Truy van du lieu
                $sql = "select * from Class";
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                //Xu ly ket qua tra ve
                $ListClass = [];
                while($row = $list_sql->fetch(PDO::FETCH_ASSOC)){
                    $Class = new Class_($row['id'], $row['tenLop']);
                    $ListClass[] = $Class;
                }
                return $ListClass;

            }catch(PDOException $e){
                //$conn = null
                //echo $e->getMessage();
                return $ListClass = [];
            }
        }

}