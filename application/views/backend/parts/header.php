<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $meta_title ?></title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  
  <script type="text/javascript" src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
  
  <link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
	<div class="navbar navbar-static-top navbar-inverse">
    	<div class="navbar-inner">
        	<a class="brand" href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a>
            
            <ul class="nav">
            	<li class="active"><a href="<?php echo site_url('backend/dashboard'); ?>">Home</a></li>
                <li><a href="<?php echo site_url(); ?>">Go to site</a></li>
            </ul>
        </div>
    </div>