<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends CI_Controller 
{
	public function main()
	{
		$date = date('M d Y');
		$time = date('h:i A');
		$datetime['datetime'] = array('date' => $date,
						  			  'time' => $time);

		$this->load->view('time_view', $datetime);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */