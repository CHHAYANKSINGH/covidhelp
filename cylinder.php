<?php include "layouts/header2.php"; ?>
<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$condition=$_POST['condition'];
	$need =$_POST['need'];
	$address=$_POST['address'];
	
	$sql="INSERT INTO `request_form`(`name`, `email`, `number`, `condition`, `need`, `address`) VALUES ('".$name."','".$email."','".$number."','".$condition."','".$need."','".$address."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		header('Location: home.php');
		echo "<script> alert('Request submitted successfully!'); </script>";
	}
	else
	{
		echo "<script> alert('Something went wrong'); </script>";
	}
	
	}
?>
<style>
body{
  background: url(images/C1.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

  }
  h2{
color:white;
  }
  label{
color:white;
  }
  .container {
    margin-top: 1%;
    margin-bottom: 1%;
    width: 60%;
    background-color: #26262b9e;
    padding-top:2%;
    padding-bottom:2%;
  }
  .btn-primary {
    background-color: #673AB7;
  }
  </style>
<body>
<div class="container">

  <center><h2>Oxygen-cylinder request form</h2></center></br>
  <marquee direction="left" style="color: yellow;"><span class="glyphicon glyphicon-exclamation-sign"> Fill the request form according to your need and our volunteers will try to help you as soon as possible</span></marquee>

  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Number:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="Enter 10 digit number" name="number" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="condition">Patients Condition:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="condition" placeholder="Enter condition" name="condition" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="need">Need:</label>
	  
      <div class="col-sm-5">
        <select id="need" class="form-control" name="need" required>
            <option value="Donate empty oxygen-cylinder">Donate empty oxygen-cylinder</option>
            <option value="Refill empty oxygen-cylinder">Refill empty oxygen-cylinder</option>
            <option value="Need oxygen-cylinder">Oxygen-cylinder</option>
        </select>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Address:</label>
	  
      <div class="col-sm-5">
        <textarea class="form-control" id="address" placeholder="Enter Address" name="address" required></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Register request</button>
      </div>
    </div>
  </form>
</div>
</body>
<?php include "layouts/footer.php"?>
</html>
