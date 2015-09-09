<?php

#Author Agus Wibowo
#aguswibowo.amd@gmail.com
#twitter @bowonieh
class Mservice extends CI_Model{
    
    function chkexist($table,$data){
        $this->db->where($data);
        $ambil = $this->db->get($table);
        return $ambil->num_rows();
    }
    
    function gettable($table){
        $ambil = $this->db->get($table);
         if($ambil->num_rows() > 0)
        {
        foreach($ambil->result() as $baris)
        {
    
            $hasil[] = $baris;
	
	}
	
            return $hasil;
	
        }
        
        
    }
    
    function ambilData($field,$table){
        if(empty($field)){
            $ambil = $this->db->get($table);
            if($ambil->num_rows() > 0)
                {
                    foreach($ambil->result() as $baris)
                {
                $hasil[] = $baris;
            }
	        return $hasil;
	    }
        }else{
            $this->db->select($field);
            $ambil = $this->db->get($table);
            if($ambil->num_rows() > 0)
                {
                    foreach($ambil->result() as $baris)
                {
                $hasil[] = $baris;
            }
	        return $hasil;
	    }
            
        }
    }
    
}
