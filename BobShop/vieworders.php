<?php $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']?>

<html>
<head>
<title>Bob's System</title>
</head>

<body>
	<h1>Costomers' Orders:</h1>

<?php
$filename = "$DOCUMENT_ROOT/PHP_REPO/orders.txt";
$fp = fopen($filename, 'rb');

$orders = fread($fp, filesize($filename));
fclose($fp);
echo $orders;
?>

</body>
</html>