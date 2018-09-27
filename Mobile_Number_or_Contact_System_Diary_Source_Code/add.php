<?php
include_once'db_con.php';

if (isset($_POST['add']))
	{

    if (isset($_POST['email_address']) && !empty($_POST['email_address']))
		{

        if (filter_var($_POST['email_address'], FILTER_VALIDATE_EMAIL)) 
		{
          
           
        } else 
		{
            
            echo 'invalid email';
            header("location: index.php");
            return;
        }
    } 
	else 
	{
        echo 'please enter and email';
    }
    $name = $_POST['_name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $email = $_POST['email_address'];
    $cell_number = $_POST['cell_number'];
    $home_phone = $_POST['home_phone'];
    $work_phone = $_POST['work_phone'];
    $physical_address = $_POST['physical_address'];


    $sql = "INSERT INTO contact ( contact_name, surname, cell_number, work_tel, email_address, gender, Home_phone,physical_address) VALUES ('$name', '$surname', '$cell_number', '$work_phone', '$email', '$gender', '$home_phone', '$physical_address')";

    $results = mysqli_query($connection, $sql);
    if ($results)
	{
        echo "<div class='row  text-center col-sm-offset-1'>
                  <strong class='container bg-danger'>".$name." number successfully saved</strong
                </div>";
        
       
    } 
	else 
	{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
}


if (isset($_POST['edit'])) 
{

    if (isset($_POST['email_address']) && !empty($_POST['email_address']))
	{

        if (filter_var($_POST['email_address'], FILTER_VALIDATE_EMAIL))
		{
            
          
        } 
		else 
		{
            echo 'invalid email';
            header("location: index.php");
             return;
        }
    } 
	else 
	{
        echo 'please enter and email';
    }
    $id = $_POST['id'];
    $name = $_POST['_name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $email = $_POST['email_address'];
    $cell_number = $_POST['cell_number'];
    $home_phone = $_POST['home_phone'];
    $work_phone = $_POST['work_phone'];
    $physical_address = $_POST['physical_address'];

    $query = "UPDATE contact SET contact_name='$name',surname='$surname',cell_number='$cell_number', work_tel='$work_phone',email_address='$email',Home_phone='$home_phone',physical_address='$physical_address' WHERE contact_ID=$id";

    if ($connection->query($query)) {
        echo "<div class='row  text-center col-sm-offset-1'>
                  <strong class='container bg-danger'>successfully updated  ".$name."</strong
                </div>";
        
          
    } else {
        echo "an error occured" . $con->error;
    }
}
?>
<!doctype>
<html>
    <head>
        <title>View Contacts</title>
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
        <div class="container" >
		 <a href="index.php"  class="btn btn-primary col-lg-2"><span class="glyphicon glyphicon-plus"></span>Add New Number</a><br><br><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Mobile Number List</div>
			  <div class="panel-body">
				<form method="POST" action=""  onsubmit="return confirm()">
                    <div class="row ">
                        <table id="contact_table" class="table table-bordered  bg-primary table-hover ">
                            <thead>

                            <th>Name</th>
                            <th>surname</th>
                            <th>Gender</th>
                            <th>Email </th>
                            <th>Cell Number</th>
                            <th>work Tel</th>
                            <th>Home Tel</th>
                            <th>Address</th>
                            <th>Action</th>
                            </thead>
                            <tbody>

                                <?php
                                include './db_con.php';
                                $sql = "SELECT * FROM contact";
                                $query = $connection->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    $id = $row['contact_ID'];
                                    echo
                                    "<tr>
                                    <td>" . $row['contact_name'] . "</td>
                                    <td>" . $row['surname'] . "</td>
                                    <td>" . $row['gender'] . "</td>
                                    <td>" . $row['email_address'] . "</td>
                                    <td>" . $row['cell_number'] . "</td>
                                    <td>" . $row['work_tel'] . "</td>
                                    <td>" . $row['home_phone'] . "</td>
                                    <td>" . $row['physical_address'] . "</td>
                                    <td>
                                        <a href='edit_del.php?id=".$row['contact_ID']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
					<a href='delete.php?id=".$row['contact_ID']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									
                                        </td>
                                        
                                     </tr>";
                                    include('./pop_del.php');
                                }
                                ?> 
                            </tbody>
                        </table>
                    </div>
            </form>
		  </div>
		</div>
	  </div>
    </body>
</html>
<script src="js/script.js" ></script>


