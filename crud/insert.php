<?php
	include'config.php';
?>

<?php
      if (isset($_POST['submit'])) {
      	        $uname=$_POST['uname'];
      	        $pass=$_POST['pass'];
                $dob=$_POST['date'];


                //echo " $uname";
            $sql="INSERT into studenttb (name,pass,date)
                  value('$uname','$pass','$dob')";

          $query=mysqli_query($connect,$sql);

          if ($query) {
          	echo "yes";
          }
             else {
             	echo "error".mysqli_connect_error();
             }
      }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<h2>Form control: input</h2>
  		<p>The form below contains two input elements; one of type text and one of type password:</p>
  		<form method="POST">
  			<div class="form-group" >
  				
  				<label for="uname">
  					User Name
  				</label>
  				<input type="text" name="uname" placeholder="Enter your name" class="form-control">
  			</div>
  			<div class="form-group">
  				
  				<label for="pass">
  					Password
  				</label>
  				<input type="password" name="pass" placeholder="Enter your password" class="form-control">
  			</div>
  			<div class="form-group">
  				
  				<label for="date">
  					date of birth
  				</label>
  				<input type="date" name="date" placeholder="Enter your date of birth" class="form-control">
  			</div>
  			<div class="form-group">
  				<button class="btn btn-default" value="submit" name="submit">
  					Submit
  				</button>
  			</div>
  		</form>		
	</div>

</body>
</html>