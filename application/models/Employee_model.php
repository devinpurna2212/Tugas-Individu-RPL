<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function new_employee_query($data)
	{
		$this->db->insert('employee',$data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_count_employee_query()
	{
		$this->db->select("COUNT(*) as num_row");
		$this->db->from('employee');
		$query=$this->db->get();
		$result=$query->result();
		return $result[0]->num_row;
	}
	public function get_employee_pagination_query($limit,$start)
	{
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->limit($limit,$start);
		$query=$this->db->get();
		return $result=$query->result();
	}
	public function get_all_employee_query()
	{
		$this->db->select('*');
		$this->db->from('employee');
		$query=$this->db->get();
		return $result=$query->result();
	}
	public function get_employee_by_Id_query($id)
	{
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->where('emp_id', $id);
		$query=$this->db->get();
		//echo $this->db->last_query();
		return $query->row();
	}
	public function update_employee_query($id,$data)
	{
		$this->db->where('emp_id',$id);
		return $this->db->update('employee',$data);
	}
	public function del($id){ 
    $this->db->where('emp_id',$id); 
    return $this->db->delete('employee');
}
}