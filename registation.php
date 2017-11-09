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
	
     <form action="#"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
      
      <div class="form-group">
        <label class="control-label col-sm-2" >Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
        </div>
      </div>
      
        <div class="form-group">
        <label class="control-label col-sm-2">User Name:</label>
        <div class="col-sm-10">
          <input type="us_name" class="form-control" name="u_name" placeholder="Enter User Name">
        </div>
      </div>
    
      <div class="form-group">
        <label class="control-label col-sm-2">Phone No:</label>
        <div class="col-sm-10">
          <input type="phone" class="form-control" name="phone" placeholder="Enter Your Phone Number">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2"  for="pwd">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="pwd" placeholder="Enter password">
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">Sign Up</button>
        </div>
      </div>
    </form>	
	
	
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
@$name=$_POST['name'];
@$u_name=$_POST['u_name'];
@$phone=$_POST['phone'];
@$email=$_POST['email'];
@$password=$_POST['pwd'];

if(isset($_POST['submit']))
{
mysql_query("INSERT into registation(name,u_name,phone,email,pwd) values('$name','$u_name','$phone','$email','$password')");
}

?>