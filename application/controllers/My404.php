<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends MY_Controller
{
	
	function __construct()
 {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->library(array('ion_auth','form_validation'));
	}
	
	/**
     * [index description]
     * @return [type] [description]
     */
	function index() 
 { 
    	$this->data['pagetitle'] 	= '404 Page Not Found';
    	$this->data['content'] 		= 'error_404';
    	$this->_render_page(getTemplate(), $this->data);
 } 
}