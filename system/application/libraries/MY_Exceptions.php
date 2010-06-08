<?php
class MY_Exceptions extends CI_Exceptions{
    function MY_Exceptions(){
        parent::CI_Exceptions();
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
	function show_error($heading, $message, $template = 'error_general', $status_code = 500)
	{
		set_status_header($status_code);
		
		$message = '<p>'.implode('</p><p>', ( ! is_array($message)) ? array($message) : $message).'</p>';

		if (ob_get_level() > $this->ob_level + 1)
		{
			ob_end_flush();	
		}
		ob_start();
		
		/**
		 * 08/06/2010 ONLY CHANGE
		 */

		$LANG =& load_class('Language');
			
		if ($heading == $LANG->line('db_error_heading')) {
			echo '<div id="content"><h1>This error is normal if you\'ve just installed QWCIK</h1><p>Please check your configuration files and edit the database connection settings.</p><p>The reason is that the Database class is activated by default.</div><br />';
		}

		include(APPPATH.'errors/'.$template.EXT);
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}

