<?php
	if(!isset($_SESSION))
		session_start();
    if($_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest'){

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
        <title>Falco</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="style" href="/styles/style.css" />
	<script type="text/javascript" src="/libs/javascript_libs/jquery.js"></script>
    <script type="text/javascript" src="/libs/javascript_libs/cssfx.min.js"></script>
</head>
<body>
<?php
    }
?>
