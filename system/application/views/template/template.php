<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>KWCIK</title>

<!-- CSS FILES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>system/application/assets/css/960/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>system/application/assets/css/960/960.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>system/application/assets/css/960/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>system/application/assets/css/style.css" media="screen" />

<!-- JS FILES -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>
<body>
                

<div class="container_12">
	<div class="grid_12 ">
		<div id="header">
			<?php echo $header ?>
		</div>
	</div>
</div>

<div class="container_12">

	<div class="grid_8 ">
		<div id="content">
			<?php echo $content ?>
		</div>
	</div>

	<div class="grid_4 ">
		<div id="sidebar">
			<?php echo $sidebar ?>
		</div>
	</div>

</div>
            

<div class="container_12">
	<div class="grid_12 ">
		<div id="footer">
			<?php echo $footer ?>
		</div>
	</div>
</div>

            
</body>
</html>