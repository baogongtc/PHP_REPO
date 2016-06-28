<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
#File is not a good way to save orders due to the mult-threads and the orders CRUD.
<html>
<?php
define('TIREQTY', 10.00);
define('OILQTY', 8.20);
define('SPARKQTY', 12.80);
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$find = $_POST['find'];
$totalqty = $tireqty * TIREQTY + $oilqty * OILQTY + $sparkqty * SPARKQTY;
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<head>
<title>Bob's auto parts--Order Results</title>
</head>
<body>
	<h1>Bob's auto parts</h1>
	<h2>Order Results</h2>
<?php
date_default_timezone_set('Asia/Shanghai');
echo "<p>Order processed at " . date('Y-m-d H:i', time()) . "</p>";
echo '<p> Your Order was follows:</p>';
$outputString = NULL;
if (! empty($tireqty)) {
    $outputString = "$tireqty Tires </br>";
}

if (! empty($oilqty)) {
    $outputString = ($outputString . $oilqty . " Oil </br>");
}

if (! empty($sparkqty)) {
    $outputString = ($outputString . $sparkqty . " Spark Plugs </br>");
}

$outputString = ($outputString . "</br> Total Price is: $" . number_format($totalqty, 2) . "</br>");

switch ($find) {
    case 'a':
        $outputString = ($outputString . 'Costomer from local mall .' . "</br>");

        break;

    case 'b':
        $outputString = ($outputString . 'Costomer from web .' . "</br>");

        break;

    case 'c':
        $outputString = ($outputString . 'Costomer from friends .' . "</br>");

        break;
}
echo $outputString = $outputString ."\n";
@ $fp = fopen("$DOCUMENT_ROOT/PHP_REPO/orders.txt", "ab");

if (! $fp) {
    echo "wrong!";
    exit();
}
flock($fp, LOCK_EX);
fwrite($fp, $outputString);
flock($fp, LOCK_UN);
fclose($fp);
?>



</body>
</html>