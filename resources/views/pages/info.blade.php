<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>This is Info Page</h1>

<?php 
$site_name = Config::get('app.sitename');
$email_address = Config::get('mail.username');
?>

Site name: {{$site_name}} <br />
E-mail: {{$email_address}}
</body>
</html>