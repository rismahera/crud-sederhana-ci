<?php

    class M_siswa extends CI_model{
        function tampil_data()
        {
            return $this->db->get('tbl_siswa');
        }
    }
?>