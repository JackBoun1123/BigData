<?php
    class CNMoi{
        private function connect(){
            $conn = new mysqli("localhost", "Hop", "12345","cnmoi");
            if ($conn ->connect_errno){
                echo "Ket noi that bai!";
                exit();
            }
            else return $conn;
        }
        public function xuatSinhVien($sql){
            $arr = array();
            $link = $this->connect();
            $result = $link->query($sql);
            if ($result->num_rows){
                while ($row = $result->fetch_assoc())
                {
                    $id = $row['id'];
                    $maSv = $row['maSv'];
                    $hoDem = $row['hoDem'];
                    $ten = $row['ten'];
                    $lop = $row['lop'];
                    $arr[] = array('id'=>$id, 'maSV'=>$maSV, 'hoDem'=>$hoDem, 'ten'=>$ten, 'lop'=>$lop);
                }
                header("content-Type:application/json; charset=UTF-8");
                return json_encode($arr);
            }
        }

}
?>