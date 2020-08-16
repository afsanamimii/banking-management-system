<!DOCTYPE html>
<html>
<head>
	<title>deposite form</title>
</head>
<body>

	<table>
		<form action="depositor(destination).php" method="POST">
			<tr>
				<td>Customer_ID:</td>
				<td><input type="text" name="Customer_ID"></td>
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
				<td>Deposite ammount:</td>
				<td><input type="text" name="deposite_ammount"></td>
			</tr>
			<tr>
				<td>Date of making deposite:</td>
				<td><select name="year">
					<option>year</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					
				</select>
				<select name="month">
                 	<option>month</option>
                 	<option>1</option>
                 	<option>2</option>
                 	<option>3</option>
                 	<option>4</option>
                 	<option>5</option>
                 	<option>6</option>
                 	<option>7</option>
                 	<option>8</option>
                 	<option>9</option>
                 	<option>10</option>
                 	<option>11</option>
                 	<option>12</option>
                 </select>
                 <select name="day">
                      <option>day</option>
                 	<option>1</option>
                 	<option>2</option>
                 	<option>3</option>
                 	<option>4</option>
                 	<option>5</option>
                 	<option>6</option>
                 	<option>7</option>
                 	<option>8</option>
                 	<option>9</option>
                 	<option>10</option>
                 	<option>11</option>
                 	<option>12</option>
                 	<option>13</option>
                 	<option>14</option>
                 	<option>15</option>
                 	<option>16</option>
                 	<option>17</option>
                 	<option>18</option>
                 	<option>19</option>
                 	<option>20</option>
                 	<option>21</option>
                 	<option>22</option>
                 	<option>23</option>
                 	<option>24</option>
                 	<option>25</option>
                 	<option>26</option>
                 	<option>27</option>
                 	<option>28</option>
                 	<option>29</option>
                 	<option>30</option>
                 	<option>31</option>

                 </select>

			</td>
			</tr>
			<tr>
				<td>Interest rate:</td>
				<td><input type="text" name="interest_rate"</td>
			</tr>
			<tr>
				<td>Duration(year):</td>
				<td><select name="duration">
					<option>duration</option>
					<option>2</option>
					<option>4</option>
					<option>6</option>
				</td>


			</tr>


			<tr>
				<td><input type="submit" value="submit" name="submit"</td>
				
			</tr>
			

		</form>
	</table>

</body>
</html>