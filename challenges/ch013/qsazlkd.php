<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>
<title>Alien Control Room</title>
</head>
<body>

<?php

include_once dirname(__FILE__).'/../../init.php';
session_start();
require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
$monitor->update(CHALLENGE_INIT, $_GET);
$_SESSION['init'] = true;

$connect=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

/*
$query="SELECT * FROM users WHERE  id=1";
$result= mysqli_query($con,$query);
print_r( $result);
echo eval("if(1==1){echo 'aa';}");
if (!$result) {
    die('Invalid query: ' . mysql_error());}
*/
   ?>

</body>
</html>
