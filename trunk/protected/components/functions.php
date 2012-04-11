<?php
class functions{
    
    public function CutString($string,$leghth){
        // nếu độ dài chuỗi nhỏ hơn hay bằng vị trí cắt
        // thì không thay đổi chuỗi ban đầu
        if(strlen($string)<=$leghth)
        {
            return $string;
        }
        else{
            /* 
            so sánh vị trí cắt 
            với kí tự khoảng trắng đầu tiên trong chuỗi ban đầu tính từ vị trí cắt
            nếu vị trí khoảng trắng lớn hơn
            thì cắt chuỗi tại vị trí khoảng trắng đó
            */
            if(strpos($string," ",$leghth) > $leghth){
                $new_leghth=strpos($string," ",$leghth);
                $new_string = substr($string,0,$new_leghth);
                return $new_string;
            }
            // trường hợp còn lại không ảnh hưởng tới kết quả
            $new_string = substr($string,0,$leghth);
            return $new_string;
        }
    } 

}

?>