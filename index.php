<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> 

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> 
		Avery Vehicle Registration Tool 
	</title>


	<style>
		.error {color: #FF0000;}
	</style>

	<!-- Include CSS for different screen sizes -->
	<link rel="stylesheet" type="text/css" href="defaultstyle.css">
</head>

<body>

<!-- Define web form. 
The array $_POST is populated after the HTTP POST method.
The PHP script insertToDb.php will be executed after the user clicks "Submit"-->
<div class="container">
	<form action="insertToDb.php" method="post">

		<label>Vehicle Make:</label>
		<input type="text" step="1" name="make" required><p>

		<label>Vehicle Model:</label>
		<input type="text" step="1" name="model" required><p>
		<!-- Dropdown menu for expense month, remembering previously selected month -->
		<label>Start Date</label>
		<input type="Date" step="1" name="startdate" required><p>

		<!-- Text input for year, remembering previously selected year -->
		<label>End Date</label>
		<input type="Date" step="1" name="enddate" required><p>
 
		<label>Name of Employeee:</label>
		<input type="text" step="0.01" name="employee" required><p>

		<button type="submit">Submit</button>
	</form>
</div>

</body>
</html>
