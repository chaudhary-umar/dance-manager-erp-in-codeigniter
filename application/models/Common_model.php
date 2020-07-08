<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common_model extends CI_Model{

	// Insert record in database table
    public function insert_record($data, $table_name)
    {
        $this->db->insert($table_name, $data);
        //echo $this->db->last_query();
        return $this->db->insert_id();
    }

    public function get_users($table)
    {
        $query =$this->db->get($table);
        return $query->result();
    }

    public function update_record($data, $table_name, $col_name, $id)
    { 
       
        $this->db->where($col_name, $id);
        $this->db->update($table_name, $data);
        //echo $this->db->last_query();
        return true;
    }
    public function get_data($table_name, $order_by = '', $col_for_order = '')
    {
    	//$query = $this->db->select('*')->from($table_name)->get();
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->from($table_name);
         $query=$this->db->get();
		$result = $query->result();
		return($result);
    }


    public function get_data_login_user($table_name, $id, $userId)
    {
        $query = $this->db->select('*')->from($table_name)->where('ID', $id)->where('CreatedBy', $userId)->get();
        $result = $query->row();  
        return($result);
    }

    public function get_data_tbl($table_name, $col_name, $id)
	
    {		
        $query = $this->db->select('*')->from($table_name)->where($col_name, $id)->get();
     
	    if($query){
            return $query->row();
        }
    }

    public function get_data_tbl_all($table_name, $col_name, $id)
    {
        $query = $this->db->select('*')->from($table_name)->where($col_name, $id)->get();
        $result = $query->result();
        return($result);
    }

    public function get_data_exist($table, $data)
    {
        $q = $this->db->where('email', $data)->get($table);
        if ($q->num_rows() > 0) {
            return $q->row();
        } else {
            return false;
        }

    }

    public function get_row_on_two_condition($table, $col_1, $val_1, $col_2, $val_2, $row_res ='')
    {
        $Where = array($col_1 => $val_1, $col_2 => $val_2);
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($Where);
        $query = $this->db->get();
        //echo $this->db->last_query();
        if($row_res !=''){
            return $query->row();
        }else{
            return $query->result();
        }
        
        
    }

    public function delete_record($table, $col_id, $value)
    {
        $this->db->where($col_id, $value);
        $this->db->delete($table);
        return true;
    }

    public function getOneValeFromTable($table, $colName, $id, $colRequired)
    {
        $query = $this->db->select($colRequired)->from($table)->where($colName, $id)->get();
        $result = $query->row();
        if(isset($result->$colRequired)){
            return($result->$colRequired);

        }else{
            return false;
        }
        
    }
    public function getDes($id)
    { 
       //echo "select * from res_jobs_desc where j_des_id in('".str_replace(",","','",$id)."')";
       $query= $this->db->query("select * from res_jobs_desc where j_des_id in('".str_replace(",","','",$id)."')");
        return $query->result();
    }

    public function getactivity()
    {
        $this->db->select("b.serial_number as serialno,d.mt_fname as fname,d.mt_lname as lname,c.role_name as rolename,a.activity as activity,
		a.date as activitydate, b.id as id");  
        $this->db->from('activity_log a');
        $this->db->join('users d', 'a.user_id = d.id','inner');
        $this->db->join('queries b', 'a.query_id = b.id','inner');
        $this->db->join('roles c', 'd.role_id =c.id', 'inner');
		
       // $this->db->where('c.id',$id);
      //  $this->db->where('a.id', $id); 
        $query = $this->db->get();
        return $query->result();
    }
   


    public function getExp($id)
    {
        $this->db->select("*");  
        $this->db->from('queries a');
        $this->db->join('queries_access b', 'a.id = b.q_id','inner');
        $this->db->where('b.user2_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }
    public function getExp2($id)
    {
        $this->db->select("*");  
        $this->db->from('queries a');
        $this->db->join('queries_access b', 'a.id = b.q_id','inner');
        $this->db->where('b.user3_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }

    public function getExp3($id)
    {
        $this->db->select("*");  
        $this->db->from('queries a');
        $this->db->join('queries_access b', 'a.id = b.q_id','inner');
        $this->db->where('b.user4_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }
    
      function resume_in_30days1()   
     { 
        $from =  strtotime('-30 days');
       $to =  strtotime('now');
       $query = $this->db->query("select * from  tm_queries where current_dat between '$from' and '$to'");
               //echo $this->db->last_query();exit();

         return $arr = $query->result(); 
    }

    function resume_in_30days2()   
     { 
        $from =  strtotime('-30 days');
       $to =  strtotime('now');
       $query = $this->db->query("select * from  tm_queries where current_dat between '$from' and '$to'");
               //echo $this->db->last_query();exit();

         return $arr = $query->result(); 
    }

     function resume_in_30days3()   
     { 
        $from =  strtotime('-30 days');
       $to =  strtotime('now');
       $query = $this->db->query("select * from  tm_queries where start_date between '$from' and '$to'");
               //echo $this->db->last_query();exit();

         return $arr = $query->result(); 
    }
    function resume_in_30days4()   
     { 
        $from =  strtotime('-30 days');
       $to =  strtotime('now');
       $query = $this->db->query("select * from  tm_queries where period between '$from' and '$to'");
    
         return $arr = $query->result(); 
    }

    function countnew($u_id)
    {
        $this->db->select("*");
        $this->db->from('queries_access');
        $this->db->where("user2_id != '0'");
        $this->db->where("user1_id != '0'"); 
       $query = $this->db->get();
       
        return $query->result_array();
    }
    function countnewtwo($u_id)
    {
        $this->db->select("*");
        $this->db->from('queries_access');
        $this->db->where("user3_id != '0'");
        $this->db->where("user2_id != '0'");
        
       $query = $this->db->get();
       
        return $query->result_array();
    }
    function countnewthree($u_id)
    {
        $this->db->select("*");
        $this->db->from('queries_access');
        $this->db->where("user4_id != '0'");
        $this->db->where("user3_id != '0'");
        
       $query = $this->db->get();
       
        return $query->result_array();
    }

    function count($u_id)
    {
        $this->db->select("*");
        $this->db->from('queries_access');
        $this->db->where('user2_id',$u_id);
        $this->db->where("user1_id != '0'"); 
       $query = $this->db->get();
       
        return $query->result_array();
    }
    function count1($u_id)
    {
        $this->db->select("*");
        $this->db->from('queries_access');
        $this->db->where('user3_id',$u_id);
        $this->db->where('user2_id != ',0,FALSE); 
       $query = $this->db->get();
       
        return $query->result_array();
    }



    function count2($u_id)
    {
        $this->db->select("*");
        $this->db->from('queries_access');
        $this->db->where('user4_id',$u_id);
        $this->db->where('user3_id != ',0,FALSE); 
       $query = $this->db->get();
       
        return $query->result_array();
    }

    public function role($id)
    {
        $this->db->select("*");  
        $this->db->from('user a');
        $this->db->join('roles b', 'a.id = b.id','inner');
        $this->db->where('b.role_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }


    // public function searchquery($Q_id)
    // {
    //     $this->db->select("*");  
    //     $this->db->from('queries a');
    //     $this->db->join('queries_access b', 'a.id = b.q_id','inner');
    //     $this->db->where('b.q_id', $SerailNo); 
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function get_actions_of_join($buyerPlanID, $actinID)
    // {
    //     // Print this query and check and operation
    //     $Where = array('buyersplanactions.BuyersplanID'=>$buyerPlanID, 'actionsmeta.ActionID'=>$actinID);
    //     $this->db->select("*");    
    //     $this->db->from('buyersplanactions');
    //     $this->db->join('actionsmeta', 'buyersplanactions.ActionsMetaID = actionsmeta.ID');
    //     $this->db->where($Where);
    //     // $this->db->order_by('`a`.`id`', 'DESC');
        
    //     $query = $this->db->get();
    //     $result = $query->result();

    //     return($result);
    // }

}