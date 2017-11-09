<?php
mysql_connect("localhost","root","");
mysql_select_db("techtune");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" class="cssdeck">
	<link href="css/style.css" rel="stylesheet">
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php include('haeder_add.php') ?>
      <?php include('header.php') ?>
      <?php include('menu.php') ?>
	  <?php include('header_add2.php') ?>
 
      <!-- header_end ---> 
<div class="row" id="form">
<div class="col-lg-9"> 
      <span id="errormsg">
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
          <h4><i class="icon-ban-circle"></i>Error!</h4>
          <p>Sorry an error has occured please check your username and password are correct.</p>
        </div>
        </span>
        
        <section class="panel">
          <header class="panel-heading text-center">
            Sign in
          </header>
          <form action="#" class="panel-body" id="login_form" method="post">
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" placeholder="Email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" name="pwd" placeholder="Password" class="form-control" required>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="cookie_check"> Keep me logged in
              </label>
            </div>
            <a href="forgot_password.php" class="pull-right m-t-xs"><small>Forgot password?</small></a>
            <input type="submit" name="submit" class="btn btn-info" value="Sign in" />
          </form>
        </section>
	
	
</div>
</div>
         

	  <!-- footer sratt ---> 
	  <?php include('footer.php') ?>
	</div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	
  </body>
</html>

<?php
if(isset($_POST['submit']))

	@$email=$_POST['email'];
	@$password=$_POST['pwd'];
	
	$query=mysql_query("SELECT *FROM registation");
	while(@$row=mysql_fetch_assoc($query))
	{ ?>
     <?php
	 
     if($email==$row['email'] and $password==$row['pwd'])
	 {
		echo "<script> 
		$(document).ready(function() {
			$('.alert').hide();
			});
		</script>";	 
	 }else
	 {
		echo "<script> 
		$(document).ready(function() {
			$('.alert').show();
			});
		</script>";	 
	 }
	 ?>
	 <?php } ?>