<?php 
include 'db.php';
include 'action.php';
session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		session_destroy();
		header('location: login.php?error=Login to access chat.');
		}

 ?>
 <?php
    
  // include('../session.php');
  // $user=$_SESSION['login_user']; 
   
    
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Chat System in PHP</title>
	<!-- <script type="text/javascript" src="jquery-3.1.1.min.js"></script> -->
	    <link rel="stylesheet" type="text/css" href="css/ScrollBar.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
<!---	<link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../script/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>   --->
	
	<style type="text/css">
		hr{
			height: 2px;
		}
		.btn{
			height: 24px;
			line-height: 12px;
		}

		
	</style>
	</head>
	
<body >

<?php// include ('../menu/menu3.php'); ?>


<br>
<br>
<br>

<div class="container">

	<div class="row">
		<h3  align="center"><font color="#E32F75">Chat System in PHP</font></h3>
				<hr color="#E32F75">
		<div class="col-sm-3">
			<div class="panel panel-success">
				<div class="panel-heading" align="center">Online Members</div>
				<div class="panel-body">
					<div id="Userlog"> 
						<!-- <a href="logout.php" style="float: right;" class="btn btn-danger btn-sm">Logout</a> --></div>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-success">
				<div class="panel-heading" align="center">Chat Room</div>
				<div class="panel-body" style="max-height: 410px; overflow-y: scroll;" class="scrollbar" id="style-2">
					<div id="show"></div>

				</div>
				<div class="panel-footer" id="footer">
					<div class="row">
						<form >
						<input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name'] ?>"  class="form-control" >
						<div class="col-sm-10"><input type="text" name="msg" id="msg"  class="form-control" ></div>
						<div class="col-sm-2" style="padding-left: 35px">
							<input type="reset" name="send" id="send" value="Send" class="btn btn-primary " >
						</form>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

</body>
</html>

<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#Userlog').load('UserLog.php')
			}, 1000);
		});




	</script>