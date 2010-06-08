<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
	}
	
	function index()
	{
		$data = array('name' => 'QWCIK', 'surname' => 'Framework');
		
		/*
		 * PARSING TEMPLATE REMINDER 
		 * $this->template->write_view($region, $view_file, $view_data, $overwrite = FALSE)
		 * $this->template->render();
		 */
		 
		$this->template->write_view('sidebar', 'welcome_message', $data, TRUE);
		$this->template->render();
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */