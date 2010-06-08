<?php
class MY_CI_DB_driver extends CI_DB_driver{
    function MY_CI_DB_driver(){
        parent::CI_DB_driver();
    }
    
    /**
	 * General Error Page
	 *
	 * This function takes an error message as input
	 * (either as a string or an array) and displays
	 * it using the specified template.
	 *
	 * @access	private
	 * @param	string	the heading
	 * @param	string	the message
	 * @param	string	the template name
	 * @return	string
	 */
//	function show_error($heading, $message, $template = 'error_general', $status_code = 500)
//	{
//		set_status_header($status_code);
//		
//		$message = '<p>'.implode('</p><p>', ( ! is_array($message)) ? array($message) : $message).'</p>';
//
//		if (ob_get_level() > $this->ob_level + 1)
//		{
//			ob_end_flush();	
//		}
//		ob_start();
//		
//		/**
//		 * 08/06/2010 ONLY CHANGE
//		 */
//
//		$LANG =& load_class('Language');
//		$LANG->load('db');
//
//		echo $LANG->line('db_error_heading');
//
//		echo '<div id="content"><h1>This error is normal if you\'ve just installed QWCIK</h1><p>Please check your configuration files.</div><br />';
//		
//		include(APPPATH.'errors/'.$template.EXT);
//		$buffer = ob_get_contents();
//		ob_end_clean();
//		return $buffer;
//	}

	function display_error($error = '', $swap = '', $native = FALSE)
	{
		$LANG =& load_class('Language');
		$LANG->load('db');
		
		echo 'AAA';
		die;

		$heading = $LANG->line('db_error_heading');

		if ($native == TRUE)
		{
			$message = $error;
		}
		else
		{
			$message = ( ! is_array($error)) ? array(str_replace('%s', $swap, $LANG->line($error))) : $error;
		}
		
		$error =& load_class('Exceptions');
		echo $error->show_error($heading, $message, 'error_db');
		exit;
	}
}

