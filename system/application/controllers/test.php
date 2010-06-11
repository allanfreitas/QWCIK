<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Test extends Controller {

	//php 5 constructor
	function __construct() {
		parent::Controller();
		$this->load->library('autoform');
	}
	
	function index() {

		$query = $this->db->get('users');
		$this->autoform->sql($query); 
		
		$user = array(
			'id' => 'user',
			'name' => 'user',
			'type' => 'text',
			'value' => $this->session->userdata('user_id')
				);
		$this->autoform->add($user);
		$this->autoform->remove(array('password','salt'));
		$this->autoform->set('email', array('label'=>array('content'=>'Le mail de votre radio')));
		$this->autoform->set('texte', array('rows'=>'10', 'cols'=>'50'));
		$attributes = array('method' => 'post', 'id' => 'formulaire', 'row' => 1000);
		
		$data['form'] = $this->autoform->generate('form/test',$attributes);
		
		$this->template->write_view('content', 'form', $data, TRUE);
		$this->template->render();
		
	}
	
	function test() {

		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email'); 
		if ($this->form_validation->run() == FALSE) 
		{ 
			$this->index();
			
		} else {
			 // do processing 
			 echo 'ok';
			 die;
		 } 
	}

}