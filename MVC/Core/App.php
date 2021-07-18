<?php
    class App{
        private $Controller="Home";
        private $Action="Main";
        private $Param =[];
//[0] => Controller [1] => Action [2] => param[0] [3] => 123 [4] => SDA [5] => SDA [6] => SD 
        function __construct(){
           $data = $this->URLProgress();
           //Controller Progressing
           if(isset($data[0]) && file_exists("MVC/Controllers/".$data[0].".php")){
               $this->Controller = $data[0];
               unset($data[0]);
           }
           require_once('MVC/Controllers/'.$this->Controller.'.php');
           $this->Controller = new  $this->Controller;
           //Action Progressing
           if(isset($data[1]) && method_exists($this->Controller,$data[1])){
               $this->Action  = $data[1];
               unset($data[1]);
           }
           if(isset($data)){
              $this->Param = $data; 
           }
           call_user_func_array([$this->Controller,$this->Action],$this->Param);
           
        }
        
        function URLProgress(){
            if(isset($_GET['url'])){
                $data  = trim($_GET['url']);
                return explode("/",$data);
            }
        }
    }

?>