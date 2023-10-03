<?php 
 include "./Models/Lop.php";
class LopService{
   
    private $ListLop;
    private $count;

    public function __construct(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Nevergon#3lose");
        $sql = "select * from Lop";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListLop = [];
        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
           
            $Lop = new Lop($row['id'],$row['tenLop']);
            $this->ListLop[] = $Lop;

        }



    }

    public function getAllLop(){
        return $this->ListLop;
    }


    public function getCount() {
        $this->count = count($this->ListLop);
        return $this->count;
    }
    

}