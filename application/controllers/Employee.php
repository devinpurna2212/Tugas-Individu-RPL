<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model','emp_model', TRUE);
	}

	public function index()
	{
		$this->load->library('pagination');
		$this->load->view('template/header');
		//$data['employees']=$this->emp_model->get_all_employee_query();
		$config['base_url'] = base_url('employee/index/');        
		$config['total_rows'] = $this->emp_model->get_count_employee_query();      
		$config['per_page'] = 2;        
		$config['uri_segment'] = 3;        
		$config['full_tag_open'] = '<ul class="pagination">';        
		$config['full_tag_close'] = '</ul>';  
		$config['attributes'] = array('class' => 'page-link');   
		$config['first_link'] = 'First';        
		$config['last_link'] = 'Last';   
		$config['first_tag_open'] = '<li>';        
		$config['first_tag_close'] = '</li>';        
		$config['prev_link'] = '&laquo';        
		$config['prev_tag_open'] = '<li class="prev">';        
		$config['prev_tag_close'] = '</li>';        
		$config['next_link'] = '&raquo';        
		$config['next_tag_open'] = '<li>';        
		$config['next_tag_close'] = '</li>';        
		$config['last_tag_open'] = '<li>';        
		$config['last_tag_close'] = '</li>';        
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';        
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';        
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);        
		$data['pagination'] = $this->pagination->create_links();     
		$data['employees'] = $this->emp_model->get_employee_pagination_query($config["per_page"], $page);  
		$this->load->view('hom_employee',$data);
		$this->load->view('template/footer');
	}
	public function add_new()
	{
		$this->load->view('template/header');
		$this->load->view('add_new_employee');
		$this->load->view('template/footer');
	}
	public function save()
	{
		if($this->input->post('btn_save')){
			$input_data=$this->input->post('input_val');
			$input_data['emp_pass']=md5($this->input->post('emp_pass'));
			$is_inserted=$this->emp_model->new_employee_query($input_data);
			if($is_inserted)
				$this->session->set_flashdata('success','New employee has been inserted successfully');
			else
				$this->session->set_flashdata('error','You could not insert new employee.....!');
		}else {
			echo "No request.......!";
		}
		redirect(base_url('employee/add_new'));
	}
	public function edit($id = false)
	{
		$this->load->view('template/header');
		if(is_numeric($id))
			$emp_id=$id;
		else
			redirect(base_url('employee/'));
		$data['employee']=$this->emp_model->get_employee_by_Id_query($emp_id);
		$this->load->view('edit_employee',$data);
		$this->load->view('template/footer');
	}
	public function update()
	{
		if($this->input->post('btn_save'))
		{
		$employee_id=$this->input->post('employee_id');
		$input_data=$this->input->post('input_val');
		$pass=$this->input->post('emp_pass');
		if($pass!='')
			$input_data['emp_pass']=md5($pass);
		$is_updated=$this->emp_model->update_employee_query($employee_id, $input_data);
		if($is_updated)
				$this->session->set_flashdata('success','Employee Updated successfully');
			else
				$this->session->set_flashdata('error','You could not Update employee.....!');
	}else{
			$this->session->set_flashdata('error','No Request.....!');
	}
	redirect(base_url().'employee/edit/'.$employee_id);
	}
	public function deldata($id){ //fungsi delete
    $this->load->model('Employee_model'); //load model
    $this->Employee_model->del($id); //ngacir ke fungsi delTransaksi
    redirect('employee'); //redirect
 
}
}
