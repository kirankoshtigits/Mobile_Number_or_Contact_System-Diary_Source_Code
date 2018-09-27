
<html>
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
    <body>
        <div class="container"><br><br><br>
            
                <div class="panel panel-primary">
                <div class="panel-heading">Mobile Number Form</div>
                <div class="panel-body">
                    
                    <form id="contact_form" method="Post" onsubmit="return Validate()" action="add.php" class="form-horizontal">
                        
                        <div class="form-group" id="username_div">
                             <label class="col-md-2 control-label" for="_name">First Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="_name" name="_name" placeholder="enter your name" > 
                                 <div id="name_error"></div>
                            </div>
                        </div>
                         <div class="form-group" id="surname_div">
                             <label class="col-md-2 control-label" for="surname">Last Surname</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="enter your surname" >
                                 <div id="surname_error"></div>
                            </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="gender">Gender</label>
                            <div class="col-md-4">
                                <select class="form-control" id="gender" name="gender" >
                                    
                                    <option value="" >Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group" id="email_div">
                             <label class="col-md-2 control-label" for="email_address">Email Address</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="email_address" name="email_address" placeholder="enter your email address" >
                                 <div id="email_error"></div>
                            </div>
                        </div>
                         <div class="form-group" id="cell_div">
                             <label class="col-md-2 control-label" for="cell_number">Mobile Number</label>
                            <div class="col-md-4">
                                <input type="tel" class="form-control" id="cell_number" name="cell_number" placeholder="enter your cell number " >
                             <div id="cell_error"></div>
                            </div>
                        </div>
                         <div class="form-group" id="work_div">
                             <label class="col-md-2 control-label" for="home_phone">Home Number</label>
                            <div class="col-md-4">
                                <input type="tel" class="form-control" id="home_phone" name="home_phone" placeholder="enter your home phone" >
                                <div id="home_error"></div>
                            </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="work_phone">Office Number</label>
                            <div class="col-md-4">
                                <input type="tel" class="form-control" id="work_phone" name="work_phone" placeholder="enter your work phone number" >
                           <div id="cell_error"></div>
                         </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="physical_address">Address</label>
                            <div class="col-md-4">
                                <textarea type="text" class="form-control" id="physical_address" name="physical_address" ></textarea>                                
                            <div id="address_error"></div>
                            </div>
                        </div>
                  <div class="form-group">
                             
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                            
                        </div>
                  
                    
                    
                </div>  
                    </form>
            </div>
        </div>      
    
        </body>   
</html>

    
<script src="js/script.js" ></script>