<?php 

class HomeCotroller{

    public function indexLop(){
        include "./Services/LopService.php";

        $List = new LopService();

        $List->getAllLop();

        include "./Views/indexHome.php";
    }

    public function indexSinhVien(){
        include "./Services/SinhVienService.php";

        $List = new SinhVienService();

       $Listt=  $List->getAllSinhVien();
       $countt =  $List->getCount();

        include "./Views/indexHome.php";
    }
}