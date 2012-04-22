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



	public function time_comment($times){
	   $time = getdate(strtotime($times));
       
    }
    public function time_hours($times){
        $time = getdate(strtotime($times));
    	if ($time["hours"] < 10)
			$hour = "0".$time["hours"]; 
        else $hour = $time["hours"];
        return $hour ;
        
    }
    
    public function time_minutes($times){
        $time = getdate(strtotime($times));
    	if ($time["minutes"] < 10)
			$minute = "0".$time["minutes"]; 
        else $minute = $time["minutes"];
        return $minute ;
        
    }
    
    public function time_seconds($times){
        $time = getdate(strtotime($times));
        if ($time["seconds"] < 10)
			$seconds = "0".$time["seconds"];
       else $seconds = $time["seconds"];
       return $seconds;
    }
    
    public function time_hms($time){
        return $this->time_hours($time).":".$this->time_minutes($time).":".$this->time_seconds($time);
    }
    
    public function time_date($times){
        $time = getdate(strtotime($times));
    	if ($time["mday"] < 10)
			$date = "0".$time["mday"]; 
        else $date = $time["mday"];
        return $date ;
    }
    
    public function time_month($times){
        $time = getdate(strtotime($times));
    	if ($time["mon"] < 10)
			$month = "0".$time["mon"]; 
        else $month = $time["mon"];
        return $month ;
    }
    
    public function time_year($times){
        $time = getdate(strtotime($times));
    	if ($time["year"] < 10)
			$year = "0".$time["year"]; 
        else $year = $time["year"];
        return $year ;
    }
    
    public function time_dmy($time){
        return "Ngày ".$this->time_date($time)." tháng ".$this->time_month($time)." năm ".$this->time_year($time);
    }
    
         
/*    
    function countdown($times) {
        $time = getdate(strtotime($times));
        // subtract desired date from current date and give an answer in terms of days
        $remain = ceil((mktime(0,0,0,$this->time_month($times),$this->time_date($times),$this->time_year($times)) – time()) / 86400);
        // show the number of days left
        if ($remain > 0) {
        print '<p><strong>$remain</strong> more sleeps until </p>';
        }
        // if the event has arrived, say so!
        else {
        print '<p>$event has arrived!</p>';
        }
        }
        
        // call the function
       // countdown(”Christmas Day”, 12, 25, 2009);*/
}
?>