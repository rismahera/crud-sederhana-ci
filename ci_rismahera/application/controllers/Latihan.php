<?php
    class Latihan extends CI_Controller{
     
        function biodata($nama,$alamat,$nohp,$email,$sekolah){
            $data = [
                'nm'    => $nama,
                'alt'   => $alamat,
                'nohp'  => $nohp,
                'eml'   => $email,
                'skl'   => $sekolah,
                ];
        $this->load->view("v_biodata", $data);
        }

        function tambah_data(){
            $this->load->view("tambah_data");
        }
        
        function simpan(){
            $data['nm']         = $this->input->post('namaa');
            $data['alt']        = $this->input->post('alamatt');
            $data['nohp']       = $this->input->post('nohpp');
            $data['eml']        = $this->input->post('emaill');
            $data['skl']        = $this->input->post('sekolahh');
            $data['jk']         = $this->input->post('jeniskelamin');
            $data['tempat']     = $this->input->post('tempat');
            $data['tanggal']    = $this->input->post('tanggal');
            $data['status']     = $this->input->post('status');
            $data['hobi']       = $this->input->post('hobi');
            $data['file']        = $this->input->post('file');
        
           
            $this->load->view("v_biodata", $data);
        }

        public function tampil_data()
        {
            $this->load->model('M_profile');
            $data['profile'] = $this->M_profile->tampil_data()->result();
            $this->load->view('v_tampil_data_profile', $data);
        }

            
        public function tambah_data_profile()
        {

            $this->load->view('tambah_data_profile');

        }

        public function action_tambah_data()
        {

            $add = [

                        'nama_depan'                     => $this->input->post('nama_depan'),
                        'nama_belakang'                  => $this->input->post('nama_belakang'),
                        'tempat_lahir'                   => $this->input->post('tampat_lahir'),
                        'tanggal_lahir'                  => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin'                  => $this->input->post('jenis_kelamin'),
                        'alamat'                         => $this->input->post('alamat'),
                        'jenjang_pendidikan'             => $this->input->post('jenjang_pendidikan'),
            ];

            $this->db->insert('profile', $add);
            redirect('../Latihan/tampil_data');

        }

        public function update_data($id)
        {
            $this->load->model('M_profile');
            $data['profile'] = $this->M_profile->get_data_by_id($id)->row_array();
            $this->load->view('update_data_profile_v', $data);
        }
        
       public function action_update_data()
       {
            $id = $this->input->post('id');
            $update = [
                'nama_depan'            => $this->input->post('nama_depan'),
                'nama_belakang'         => $this->input->post('nama_belakang'),
                'tempat_lahir'          => $this->input->post('tempat_lahir'),
                'tanggal_lahir'         => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'         => $this->input->post('jenis_kelamin'),
                'alamat'                => $this->input->post('alamat'),
                'jenjang_pendidikan'    => $this->input->post('jenjang_pendidikan'),

            ];

            $update = $this->db->update('profile', $update, ['id' => $id]);
            redirect('../Latihan/tampil_data');
       }
      
       public function hapus_data($id)
       {
            $ud = $id;
            $this->db->delete('profile', ['id' => $id]);
            redirect('../Latihan/tampil_data');
       }
}


?>