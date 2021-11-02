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

    public function prosesHapusOrang($id) {
        $this->load->database();

        $this->db->query("DELETE FROM orang WHERE id = $id");
    }

    public function prosesUbahOrang($id, $Nama, $Alamat ) {
        $this->load->database();
        $this->db->query("UPDATE orang SET nama ='$Nama', alamat = '$Alamat' WHERE id = $id");
    }
}
?>