<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DoctorSignUpForm_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function form_data()
        {
               $data=array(
                       'name'=> $_POST['name'],
                       'birthdate'=> $_POST['birthdate'],
                       'bmdc'=> $_POST['bmdc'],
                       'nid'=> $_POST['nid'],
                       //'Image'=> $_POST['Image'],
                       'email'=> $_POST['email'],
                       'password'=> $_POST['password'],
                       'speciality'=> $_POST['speciality'],
                      
                );
               return $this->db->insert('doctordetails', $data);

        }
        

}
?> 