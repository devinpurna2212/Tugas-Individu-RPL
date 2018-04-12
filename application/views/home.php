<!DOCTYPE html>
<html>
<head>
	<title>Simple Codeigniter CRUD System</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script src="asset/js/jquery-v3.2.1.js"></script>
	<script src="asset/js/popper.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<style type="text/css">
		body { padding-top: 80px; }
	</style>
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</head>
<body>
	<div class="container">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="nav-content">
		    <a class="navbar-brand" href="#">CRUD PEGAWAI</a>
		    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		    </ul> -->
		    <div class="collapse navbar-collapse justify-content-end" id="nav-content">  
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Log Out</a>
		      </li>
		    </ul>
		    </div>
		  </div>
		</nav>
	</div>
	<div class="container">
	    <div class="page-header">
	          <h1>Simple CRUD System <a href="#" class="btn btn-lg btn-success float-right"> Add New</a></h1>
	    </div>
	</div>

	<div class="container">
	<div class="panel panel-default">
		<div class="alert alert-primary" role="alert">
		  This is a primary alert—check it out!
		</div>
		<div class="alert alert-danger" role="alert">
		  This is a primary alert—check it out!
		</div>
		<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-check">
		    <label class="form-check-label">
		      <input type="checkbox" class="form-check-input">
		      Check me out
		    </label>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Example textarea</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlFile1">Example file input</label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<form>
		  <div class="row">
		    <div class="col-md-6 mb-3">
		      <label for="validationServer01">First name</label>
		      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
		    </div>
		    <div class="col-md-6 mb-3">
		      <label for="validationServer02">Last name</label>
		      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
		    </div>
		  </div>
		  <div class="row">
		    <div class="col-md-6 mb-3">
		      <label for="validationServer03">City</label>
		      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
		      <div class="invalid-feedback">
		        Please provide a valid city.
		      </div>
		    </div>
		    <div class="col-md-3 mb-3">
		      <label for="validationServer04">State</label>
		      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
		      <div class="invalid-feedback">
		        Please provide a valid state.
		      </div>
		    </div>
		    <div class="col-md-3 mb-3">
		      <label for="validationServer05">Zip</label>
		      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
		      <div class="invalid-feedback">
		        Please provide a valid zip.
		      </div>
		    </div>
		  </div>

		  <button class="btn btn-primary" type="submit">Submit form</button>
		</form>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		  Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="row">
		  <div class="col-4">
		    <div class="list-group" id="list-tab" role="tablist">
		      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
		      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
		      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
		      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
		    </div>
		  </div>
		  <div class="col-8">
		    <div class="tab-content" id="nav-tabContent">
		      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
		      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
		      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
		      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
		    </div>
		  </div>
		</div>
		<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
		  Tooltip on top
		</button>
	    <table class="table table-striped table-hover">
	          <thead>
	            <tr>
	              <th>Datum</th>
	              <th>Název</th>
	              <th>Akce</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>1.1.2014</td>
	              <td>První aktualita na světě</td>
	              <td>
	                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Upravit</button>
	                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Smazat</button>
	              </td>
	            </tr>
	               <tr>
	              <td>1.1.2014</td>
	              <td>Duis nec consectetur mi</td>
	              <td>
	                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Upravit</button>
	                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Smazat</button>
	              </td>
	            </tr>
	                        <tr>
	              <td>1.1.2014</td>
	              <td>Quisque id mi sit amet dui convallis</td>
	              <td>
	                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Upravit</button>
	                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Smazat</button>
	              </td>
	            </tr>
	                        <tr>
	              <td>1.1.2014</td>
	              <td>Praesent in nulla vitae mi cursus iaculis</td>
	              <td>
	                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Upravit</button>
	                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Smazat</button>
	              </td>
	            </tr>
	                        <tr>
	              <td>1.1.2014</td>
	              <td>Duis cursus, orci ut tristique faucibus</td>
	              <td>
	                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Upravit</button>
	                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Smazat</button>
	              </td>
	            </tr>
	                        <tr>
	              <td>1.1.2014</td>
	              <td>Morbi ut hendrerit leo</td>
	              <td>
	                <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Upravit</button>
	                <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Smazat</button>
	              </td>
	            </tr>
	          </tbody>
	        </table>
	    </div>
	</div>

	<div class="container">
	  <!-- FOOTER -->
	  <footer>
	    <p class="pull-right"><a href="#">HO PHEARUN</a></p>
	    <p>© 2017</p>
	  </footer>

	</div><!-- /.container -->
</body>
</html>