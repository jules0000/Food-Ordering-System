<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Kitchen_manager_model extends CI_Model {
	
    
	function __construct()
 {
		
		parent::__construct();
		$this->load->database();
	}
	
    /**
     *  
     * Fetch orders count
     *
     * @return int
     **/  
	function get_orders_count()
	{
		$user_id = $this->ion_auth->get_user_id();
		$query="select * from ".TBL_PREFIX.TBL_ORDERS." where km_id=".$user_id."";
		$orders = $this->db->query($query)->result();
	
		return count($orders);
	}
}
