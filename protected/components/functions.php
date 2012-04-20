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



	public function substrws( $text, $len=180 ) {
	
		if( (strlen($text) > $len) ) {
	
			$whitespaceposition = strpos($text," ",$len)-1;
	
			if( $whitespaceposition > 0 )
			$text = substr($text, 0, ($whitespaceposition+1));
	
			// close unclosed html tags
			if( preg_match_all("|<([a-zA-Z]+)>|",$text,$aBuffer) ) {
	
				if( !empty($aBuffer[1]) ) {
	
					preg_match_all("|</([a-zA-Z]+)>|",$text,$aBuffer2);
	
					if( count($aBuffer[1]) != count($aBuffer2[1]) ) {
	
						foreach( $aBuffer[1] as $index => $tag ) {
	
							if( empty($aBuffer2[1][$index]) || $aBuffer2[1][$index] != $tag)
							$text .= '</'.$tag.'>';
						}
					}
				}
			}
		}
	
		return $text;
	}
}
?>