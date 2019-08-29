<!DOCTYPE html>
<html>
<head>
	<title id="top">Ana Ćosić</title>
	<meta charset="UTF-8">

<?php header('Access-Control-Allow-Origin: *'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
<!-- fa fa icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



</head>
<body>
<?php
  $this->load->helper('url');
  
?>
<form method="" action="<?php  echo base_url(); ?>Welcome">
       <button id="submit-buttons" type="submit" ​​​​​>ZADATAK 1</button>
</form>
<form method="" action="<?php  echo base_url(); ?>Welcome/Z2">
       <button id="submit-buttons" type="submit" ​​​​​>ZADATAK 2</button>
</form>

<form method="" action="<?php  echo base_url(); ?>Welcome/Z3">
       <button id="submit-buttons" type="submit" ​​​​​>ZADATAK 3 nalazi se u view zadatak3</button>
</form>

