<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Statuslib
{
	/**
	*    
	*/
	public function getColors(){
		$data = array(
	      null 		=> 	'',
	      'Applied'	=>	'label-primary',
	      'Pending'	=>	'label-warning',
	      'Reject'	=>	'label-danger',
	      'Approval'=>	'label-info',
	      'Sending'	=>	'label-success',
	      'Expired'	=>	'label-default'
	      );
		return $data;
	}
	public function getOptionsSelect(){
		$options = array(
	        'Applied'	=>	'Applied', 
            'Pending'	=>	'Pending',
			'Reject'	=>	'Reject',
            'Approval'	=>	'Approval',
            'Sending'	=>	'Sending',
            'Expired'	=>	'Expired'
			);
		return $options;
	}
}
?>

