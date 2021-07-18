<?php
    class StudentModel extends DB{
        function testFunc(){
            echo " Test function - class Student model";
        }
        function getAllSV(){
           $sql = "SELECT * FROM sinhvien";
           $query =  mysqli_query($this->conn,$sql);
           $data =[];
           while($rows = mysqli_fetch_assoc($query)){
               $data[] = $rows;
           }
           return $data;
        }
        function isDuplicate($ten){
            $sql = "SELECT sinhvien_id FROM sinhvien WHERE sinhvien_ten='$ten'";
            $query = mysqli_query($this->conn,$sql);
            $flag = false;
            if(mysqli_num_rows($query)>0){
                $flag = true;
            }
            return json_encode($flag);
        }
    }


?>