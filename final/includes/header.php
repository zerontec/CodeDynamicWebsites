<?php
	$companyName = "Franklin's Fine Dining";
	include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo TITLE; ?></title>
	<link href="/assets/styles.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
	<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
</head>

<body id="final-example">
	
	<div class="wrapper">
	
		<div id="banner">
			<a href="/" title="Return to Home">
				<img src="img/banner.png" alt="Franklin's Fine Dining">
			</a>	
		</div><!-- banner -->
		
		<div id="nav">
			<?php include('includes/nav.php'); ?>
		</div><!-- nav -->
		
		<div class="content">