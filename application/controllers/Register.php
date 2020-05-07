<?php

      class Register extends CI_Controller
      {
            public function index(){

                  $this->form_validation->set_rules('nama','Nama','required',[
                        'required' => 'Nama Wajib diisi!'
                  ]);
                  $this->form_validation->set_rules('username','Username','required',[
                        'required' => 'Username Wajib diisi!'
                  ]);
                  $this->form_validation->set_rules('password','Password','required|matches[password_2]',[
                        'required' => 'Password Wajib diisi!',
                        'matches' => 'Password tidak cocok!'
                  ]);
                  $this->form_validation->set_rules('password_2','Password','required|matches[password]');

                  if ($this->form_validation->run() == false) {
                        $this->load->view('templates/header');
                        $this->load->view('register');
                        $this->load->view('templates/footer');
      
                  }else {
                        $data = array(
                              'id' => '',
                              'nama' => $this->input->post('nama'),
                              'username' => $this->input->post('username'),
                              'password' => $this->input->post('password'),
                              'role_id' => 2
                        );
                  
                  $this->db->insert('tb_user', $data);
                  redirect('Auth/login');

                  }
            }
      }
      

?>