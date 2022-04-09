<?php 
    class  Siswa extends CI_Controller
    {

        public function tampil_data()
        {
            $this->load->model('M_siswa');
            $data['siswa'] = $this->M_siswa->tampil_data()->result();
            $this->load->view('v_tampil_siswa', $data);
        }

    }

?>


