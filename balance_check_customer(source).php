<!DOCTYPE html>
<html>
<head>
	<title>balance check</title>
</head>
<body>

	<table>
		<form action="balance_check_customer(destination).php" method="POST">
			<tr>
				<td>Customer_id:</td>
				<td><input type="text" name="customer_ID">
			</tr>
			<tr>
				<td>Branch name:</td>
				<td><select name="Branch">
					<option>branch</option>
					<option>Progoti Sarani</option>
              		<option>Rampura</option>
              		<option>Jatrabari</option>
              		<option>Khilgoan</option>
              		<option>Badda</option>
              		<option>Bonosree</option>
              		<option>Malibagh</option>
              		<option>Motijheel</option>

				</select>
			</td>

			</tr>
			
			<tr>
				<td><input type="submit" value="submit" name="submit"</td>
			</tr>
		</form>
	</table>

</body>
</html>