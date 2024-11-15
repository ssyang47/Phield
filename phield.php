<?php
class Phield {
    public function input_filter($input) {
        // Add your string processing code here

		$CI =& get_instance();

		$input = $CI->security->xss_clean($input);
		$input = $CI->db->escape_str($input);
		
		return $input; 
    }
}



