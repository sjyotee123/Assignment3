<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index() {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('companyname', 'Company Name', 'trim|required');
            $this->form_validation->set_rules('companywebsite', 'Company Website', 'trim|required');
            $this->form_validation->set_rules('companydescription', 'Company Description', 'trim|required');
            $this->form_validation->set_rules('dateofinception', 'Date of inception', 'trim|required');
            $this->form_validation->set_rules('cinnumber', 'Cin Number', 'trim|required');
            $this->form_validation->set_rules('uamnumber', 'Uam Number', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('founder', 'Founder', 'trim|required');
            $this->form_validation->set_rules('contactperson', 'Contact Person', 'trim|required');
            $this->form_validation->set_rules('contactnumber', 'Contact Number', 'trim|required');
            $this->form_validation->set_rules('sdg', 'SDG', 'trim|required');
            $this->form_validation->set_rules('projrep', 'Project Report', 'trim|required');
            $this->form_validation->set_rules('projimg', 'Project image', 'trim|required');
            $this->form_validation->set_rules('projvideo', 'Project Video', 'trim|required');
            $this->form_validation->set_rules('projectname', 'Project Name', 'trim|required');
            $this->form_validation->set_rules('projectdescription', 'Project Description', 'trim|required');
            $this->form_validation->set_rules('companyawards', 'Company Awards', 'trim|required');
            $this->form_validation->set_rules('membership', 'Memebership', 'trim|required');
           
            if ($this->form_validation->run() !== FALSE) {
                $result = $this->usermodel->insert_reg($this->input->post('companyname'), 
                    $this->input->post('companywebsite'), $this->input->post('companydescription'),
                     $this->input->post('dateofinception'), $this->input->post('cinnumber'), 
                     $this->input->post('uamnumber'), $this->input->post('address'), 
                     $this->input->post('founder'), 
                     $this->input->post('contactperson'), 
                     $this->input->post('contactnumber'), 
                     $this->input->post('sdg'), 
                     $this->input->post('projrep'), 
                     $this->input->post('projimg'), 
                     $this->input->post('projvideo'), 
                     $this->input->post('projectname'),
                      $this->input->post('projectdescription'), 
                      $this->input->post('companyawards'), 
                      $this->input->post('membership'));
                $data['success'] = $result;
                $this->load->view('user', $data);
            } else {
                $this->load->view('user');
            }
        } else {
            $this->load->view('user');
        }
    }

}