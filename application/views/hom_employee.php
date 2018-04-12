<div class="container">
	  <div class="page-header">
	          <h1>Data Pegawai <a href="<?php echo base_url() ?>employee/add_new" class="btn btn-lg btn-success float-right"> Add New</a></h1>
	  </div>
	  <hr>
</div>
<div class="container">
	<div class="card card-primary">
		<h4 class="card-header">Employee List</h4>
		<div class="card-body">
			<table class="table table-striped table-hover">
	          <thead>
	            <tr>
	              <th>No ID</th>
	              <th>Nama</th>
	              <th>E-Mail</th>
	              <th>Alamat</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          </tbody>
	         <?php if(count($employees)>0){ ?>
	          	<?php foreach($employees as $emp) { ?>
	            <tr>
	              <td><?php echo $emp->emp_id; ?></td>
	               <td><?php echo $emp->emp_fname.' '.$emp->emp_lname; ?></td>
	                <td><?php echo $emp->emp_email; ?></td>
	                 <td><?php echo $emp->emp_address; ?></td>
	              <td>
	                <a href="<?php echo base_url() ?>employee/edit/<?php echo $emp->emp_id;?>"class="btn btn-primary btn-xs"> Update</a>
	                <a href="<?php echo base_url() ?>employee/deldata/<?php echo $emp->emp_id; ?>" class="btn btn-danger btn-xs"onClick="return confirm('Anda yakin ingin menghapus?..')">Hapus</a>
	              </td>
	     		</tr>
	     		<?php } ?>
	     	<?php } ?>
	          </tbody>
	        </table>
	        <?php echo $pagination;?>
		</div>
	</div>
	<hr>
</div>