<?php
    class Home extends Controller {
        function Main(){
           $std =  $this->deClareModel("StudentModel");
           $data  = $std->getAllSV();
           $this->show("home",[
                "page"=>"main",
                "another"=>"for example",
                "data"=>$data
           ]);
        }
    }


?>