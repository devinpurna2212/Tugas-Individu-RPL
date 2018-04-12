<div class="container">
	    <div class="page-header">
	          <h1>Simple CRUD System <a href="<?php echo base_url() ?>employee" class="btn btn-lg btn-success float-right"> View Employee</a></h1>
	    </div>
	    <hr>
	    <?php if($this->session->has_userdata('success')){?>
	    	<div class="alert alert-primary" role="alert">
	    	<?php echo $this->session->flashdata('success'); ?>
	    	</div>
	    <?php } ?>
		   <?php if($this->session->has_userdata('error')){?>
	    	<div class="alert alert-danger" role="alert">
	    	<?php echo $this->session->flashdata('error'); ?>
	    	</div>
	    <?php } ?>
	</div>

	<div class="container">
		<div class="card card-default">
		<h4 class="card-header">Edit Employee</h4>
			<div class="card-body">
				<?php if(count($employee)>0) { ?>
			<form action="<?php echo base_url('employee/update') ?>" method="post">
			  <div class="form-group">
			    <label for="firstName">First Name</label>
			    <input type="text" class="form-control" name="input_val[emp_fname]" value="<?php echo $employee->emp_fname;?>" id="firstName" placeholder="Enter your first name">
			    <input type="hidden" name="employee_id" value="<?php echo $employee->emp_id;?>">
			  </div>
			  <div class="form-group">
			    <label for="lastName">Last Name</label>
			    <input type="text" class="form-control" name="input_val[emp_lname]" value="<?php echo $employee->emp_lname;?>" id="lastName" placeholder="Enter your last name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="input_val[emp_email]" value="<?php echo $employee->emp_email;?>" id="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="emp_pass" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="address">Address</label>
			    <textarea class="form-control" name="input_val[emp_address]" id="address" rows="3"><?php echo $employee->emp_address;?></textarea>
			  </div>
			  <input type="submit" class="btn btn-primary" name="btn_save" value="Save">
			</form>
			<?php }else{ ?>
					<h4 class="text-danger">No data.....!</h4>
			<?php } ?>
		</div>
		</div>
		<hr>
	</div>