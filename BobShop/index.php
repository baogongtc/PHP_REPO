
<!DOCTYPE form PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>orderform</title>
</head>
<form action="processorder.php" method="post">
	<table border="0" align="center">
		<tr bgcolor="#cccccc">
			<td width="150px">Item</td>
			<td width="15px">Quantity</td>
		</tr>
		<tr>
			<td>Tires</td>
			<td align="center"><input type="text" name="tireqty" size="3"
				maxlength="3" /></td>
		</tr>
		<tr>
			<td>Oil</td>
			<td align="center"><input type="text" name="oilqty" size="3"
				maxlength="3" /></td>
		</tr>
		<tr>
			<td>Spark Plugs</td>
			<td align="center"><input type="text" name="sparkqty" size="3"
				maxlength="3" /></td>


		<tr height="10px" />

		<tr>
			<td>Source:</td>
			<td><select name="find">
					<option value="a">FROM LOCAL MALL</option>
					<option value="b">FROM WEB</option>
					<option value="c">FROM FRIENDS</option>
			</select></td>

		</tr>
		<tr height="10px" />
		<tr>
			<td colspan="2" align="center"><input type="submit"
				value="Submit Order" /></td>
		</tr>
	</table>
</form>
</html>