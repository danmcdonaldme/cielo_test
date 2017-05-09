<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['user_name'] = '';
        $data['user_email'] = '';
        $data['user_dob'] = '';
        $data['favourite_color'] = '';
        $data['success'] = $this->session->flashdata('success');
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('includes/header');
        $this->load->view('welcome_message', $data);
        $this->load->view('includes/footer');
    }

    public function add_user() {

        $post = $this->input->post(NULL, TRUE);

        $this->load->library('form_validation');
//        form validation
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('user_dob', 'User DOB', 'trim|required');
        $this->form_validation->set_rules('favourite_color', 'Favourite color', 'trim|required');



        if ($this->form_validation->run() == FALSE) {

            $this->load->view('includes/header');
            $this->load->view('welcome_message', $post);
            $this->load->view('includes/footer');
        }


        $userModel = load_basic_model('users');
        $result = $userModel->insert($post);

        if ($result == TRUE) {
            $this->session->set_flashdata('success', 'Data insertion successful.');
        } else {
            $this->session->set_flashdata('error', 'Data insertion failed.');
        }

        redirect(base_url('Welcome'));
    }

}
