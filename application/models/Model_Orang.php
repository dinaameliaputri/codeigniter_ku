<?php

class Model_Orang extends CI_Model {
    public function AmbilData() {
        $this->load->database();
        
       $hasil = $this ->db->query("SELECT * FROM orang");

       return $hasil->result();
    }
    
    public function ProsesTambahOrang($Nama, $Alamat){
        $this->load->database();
        
        $this ->db->query("INSERT INTO orang(Nama, Alamat) VALUES('$Nama','$Alamat')");
    }

}
?>