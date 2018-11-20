<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DoctorSignUpForm extends CI_Controller {


    public function __construct()
    {
        parent:: __construct();
        $this->load->model('');
    }

	public function index()
	{
		$this->load->view('DoctorSignUpForm_view');
    }
    
    public function save()
    {
        $this->load->model('DoctorSignUpForm_model');

        if($this->DoctorSignUpForm_model->form_data())
        {
            $this->load->view('success');
        }
        else
        {
            $this->load->view('fail');
        }
        
    }
}
