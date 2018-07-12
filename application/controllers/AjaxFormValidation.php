<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class AjaxFormValidation extends CI_Controller {

   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
   }

   public function index()
   {
    $this->load->view('templates/header', $data);
    $this->load->view('pages/form');
    $this->load->view('templates/footer', $data);
   }

   public function validationForm()
   {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }else{
           echo json_encode(['success'=>'Formulario correctamente enviado']);
        }
    }
}