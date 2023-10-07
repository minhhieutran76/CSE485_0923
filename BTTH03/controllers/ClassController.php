<?php
    include "./services/ClassService.php";
    class ClassController{
        public function index(){
            // Goi du lieu tu ClassService
            $ClassService = new ClassService();
            $List = $ClassService->getAllClass();

            // Render du lieu lay duoc ra HomePage
            include "./views/indexClass.php";
        }

    }
?>