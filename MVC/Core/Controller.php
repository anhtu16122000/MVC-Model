<?php
    class Controller{
        function deClareModel($modelName){
            require_once('MVC/Models/'.$modelName.'.php');
            return new StudentModel;
        }
        function show($context,$data=[]){
            require_once("MVC/Views/".$context.".php");
        }
    }


?>