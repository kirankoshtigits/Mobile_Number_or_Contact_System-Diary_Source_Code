<?php
include './db_con.php';

if(isset($_GET['contact_ID'])){

     header("location: add.php");
     return;
    
}else {
   
        $id = $_REQUEST['id'];
$getcontacts = mysqli_query($connection,"SELECT * FROM contact WHERE contact_ID=$id");

while ($contacts=mysqli_fetch_array($getcontacts)) {
      
        
         $name =$contacts['contact_name'];
    $surname = $contacts['surname'];
    $gender = $contacts['gender'];
    $email = $contacts['email_address'];
    $cell_number =$contacts['cell_number'];
    $home_phone = $contacts['home_phone'];
    $work_phone =$contacts['work_tel'];
    $physical_address = $contacts['physical_address'];


}

 
}
?>
<head>
        <title>contact</title>  
        <link rel="stylesheet" href="css/bootstrap.min.css">
             <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
       <link rel="stylesheet" href="css/bootstrapValidator.css">
        
        <link rel="stylesheet" href="css/bootstrapValidator.min.css">
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        
        <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
             
    </head>
    
     <div class="container bg-danger"><br><br>
            
         <div class="panel panel-default">
		    <div class="panel panel-warning">
			    <div class="panel-heading">Update Details</div>
					<div class="panel-body">
								
								<form id="contact_form " method="Post" action="add.php" class="form-horizontal bg-primary"><br><br>

									<div class="form-group">
										 <label  class="col-md-2 control-label" for="id">Number ID</label>
										<div class="col-md-4">
											<input type="text" class="form-control"  id="id" name="id" placeholder="enter your name" 
												   value="<?php echo $id; ?>"> 
										  
										</div>
									</div>
										 
									<div class="form-group">
										 <label class="col-md-2 control-label" for="_name">First Name</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="_name" name="_name" placeholder="enter your first name" 
												   required pattern="[A-Za-z]"  value="<?php echo $name; ?>"> 
										  
										</div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="surname">Last Surname</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="surname" name="surname" placeholder="enter your last surname" 
												   required pattern="^[A-Za-z]+" value="<?php echo $surname; ?>">
										</div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="gender">Gender</label>
										<div class="col-md-4">
											<select class="form-control" id="gender" name="gender" required pattern="^[A-Za-z]+" selected ="<?php echo $gender ?>">
												
												<option value="" >Select</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="email_address">Email Address</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="email_address" name="email_address" placeholder="enter your  E-Mail " 
												   required  value="<?php echo $email; ?>">
											
										</div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="cell_number">Mobile Number</label>
										<div class="col-md-4">
											<input type="tel" class="form-control" id="cell_number" name="cell_number" placeholder="enter your Mobile number " 
												   required  value="<?php echo $cell_number; ?>">
										</div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="home_phone">Home Number</label>
										<div class="col-md-4">
											<input type="tel" class="form-control" id="home_phone" name="home_phone" placeholder="enter your Home Number" 
												   required  value="<?php echo $home_phone; ?>">
											
										</div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="work_phone">Office Number</label>
										<div class="col-md-4">
											<input type="tel" class="form-control" id="work_phone" name="work_phone" placeholder="enter your Office number" 
												   required  value="<?php echo $work_phone; ?>">
									   
									 </div>
									</div>
									 <div class="form-group">
										 <label class="col-md-2 control-label" for="physical_address">Physical Address</label>
										<div class="col-md-4">
											<textarea type="text" class="form-control" id="physical_address" name="physical_address" 
													  required pattern="[A-Za-z]" ><?php echo $physical_address; ?></textarea>                                
										</div>
									</div>
									<div class="form-group">
										 
										<div class="col-md-6 col-md-offset-2">
											<button type="submit" name="edit" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
										
									</div>
							</form><br><br><br>
					 </div>
			    </div>
		     </div>    
         </div>
     </div>     