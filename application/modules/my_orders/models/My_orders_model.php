<?php  

if (! defined('BASEPATH')) exit('No direct script access allowed');


class My_orders_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }
    
    /**
     * Record Count 
     *
     * @return array
     **/  
    public function record_count() 
    {
        $user_id = $this->ion_auth->get_user_id();
        $query = $this->db->get_where($this->db->dbprefix("orders"), array('user_id'=>$user_id));
        return $query->num_rows();
    }
    
     
    
    /**
     * Fetch Orders
     * @param  [int] $limit [description]
     * @param  [int] $start [description]
     * @return [array]        [description]
     */
    public function fetch_orders($limit, $start) 
    {
        
        $user_id = $this->ion_auth->get_user_id();
        
        $query = $this->db->get_where($this->db->dbprefix("orders"), array('user_id'=>$user_id), $limit, $start);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return array();
    }
   
    /**
     * Orders Statistics Count
     *
     * @return array
     **/  
    public function order_statistic_count()
    {
        $user_id = $this->ion_auth->get_user_id();
        $query = "select 
	   (select COUNT(*) from cr_orders where status = 'new' and user_id=".$user_id.")as new,
	   (select COUNT(*) from cr_orders where status = 'process' and user_id=".$user_id.")as process,
	   (select COUNT(*) from cr_orders where status = 'out_to_deliver' and user_id=".$user_id.")as out_to_deliver,
	   (select COUNT(*) from cr_orders where status = 'delivered' and user_id=".$user_id.")as delivered,
	   (select COUNT(*) from cr_orders where status = 'cancelled' and user_id=".$user_id.")as cancelled
	   from cr_orders where user_id=".$user_id."
	   group by user_id";
       
        $result = $this->db->query($query)->result();
        return $result;
    }
}