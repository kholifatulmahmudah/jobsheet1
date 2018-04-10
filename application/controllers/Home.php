<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
           //$data['nama'] = "Kholifatul Mahmudah";
           $data = array(
                        'nama' => "Kholifatul Mahmudah",
                        'alamat' => "Politeknik Negeri Malang",
                        'email' => "kholifatul.viiie14@gmail.com"
           );

           $data['tugas'] = array('Ngoding', 'Makan', 'Tidur');
            $this->load->view('home', $data);
        }
    }
    /* End of file Home.php */
?>