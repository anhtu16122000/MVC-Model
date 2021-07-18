<?php
    class Ajax extends Controller{
        protected $std ;
        function __construct(){
            $this->std=  $this->deClareModel('StudentModel');
        }
        function checkUser(){
            $ten = $_POST['ten'];
           echo $this->std->isDuplicate($ten);
        }
    }

?>