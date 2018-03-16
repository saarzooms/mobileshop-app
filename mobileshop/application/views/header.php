<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/newcssbook.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url();?>css/animations.css" rel="stylesheet">
	<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> -->
			<style>
			.class1
			{
				color:white;
				}
			</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
-->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>"><b style="color:blue;">Mobile Shop</b></a>
	 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
		<ul class="nav navbar-nav navbar-left">
		
			
		
			
			<li><a id="staff" href="<?php echo base_url();?>category"><i class="glyphicon glyphicon-plus"></i>  Categary</a></li>
			<li><a id="institution" href="<?php echo base_url();?>brand"><i class="glyphicon glyphicon-plus"></i>  Brand</a></li>
			<li><a id="department" href="<?php echo base_url();?>supplier"><i class="glyphicon glyphicon-plus"></i>  Suplier</a></li>
			<li><a id="department" href="<?php echo base_url();?>user"><i class="glyphicon glyphicon-plus"></i>  User</a></li>
			<li><a id="department" href="<?php echo base_url();?>purchase"><i class="glyphicon glyphicon-plus"></i>  Purchase Entry</a></li>
		
		
		</ul>			
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url();?>changepassword">Change Password</a></li>
			<li><a href="logout.php?logout" >Logout</a></li>
			
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</body>
</html>