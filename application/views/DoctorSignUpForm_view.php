<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 style="color:red; padding-bottom: 20px;text-align: center;">Doctor Details</h1>
    <style type="text/css">
        .form-group{
        	margin-left: 550px;
        }
        .btn{
        	margin-left: 100px;
        }
    	.form-row{
    		width: 300px;
    		padding: 20px;

    	}
    </style>
    <form method="post" enctype="multipart/form-data" action="<?php echo site_url('DoctorSignUpForm/save');?>">
		  <div class="form-row">

                <div class="form-group col-md-12">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            
                <div class="form-group col-md-12">
                <label>Birth Date</label>
                <input type="date" name="birthdate" class="form-control" placeholder="BirthDate">
                </div>
            
                <div class="form-group col-md-12">
                <label>BMDC Code</label>
                <input type="number" name="bmdc" class="form-control" placeholder="BMDC">
                </div>

                <div class="form-group col-md-12">
                <label>NID</label>
                <input type="number" name="nid" class="form-control" placeholder="NID">
                </div>

                <!-- <div class="form-group col-md-12">
                <label>Image</label>
                <input type="Image" name="Image" class="form-control" placeholder="Image">
                </div> -->

                <div class="form-group col-md-12">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group col-md-12">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="password">
                </div>

                <div class="form-group col-md-12">
                <label>Speciality</label>
                <input type="text" name="speciality" class="form-control" placeholder="Speciality">
                </div>

          </div>
          
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
    </form>
  
</body>
</html>