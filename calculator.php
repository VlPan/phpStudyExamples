<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<form method= 'GET'>
<input type="number" name="num_1" required>
<input type="number" name="num_2" required>
<select name='operator' required>
	<option>Add</option>
	<option>Minus</option>
	<option>Multiply</option>
	<option>Divide</option>
	<option>pow</option>
</select>
<input type="submit" value="submit" name = 'submit'>

</form>
<?php 

if(isset($_GET['submit'])){

$num_1 = $_GET['num_1'];
$num_2 = $_GET['num_2'];
$operator = $_GET['operator'];
	switch ($operator) {
		case 'Add':
			echo $num_1 + $num_2;
			break;

		case 'Minus':
			echo $num_1 - $num_2;
			break;

		case 'Multiply':
			echo $num_1 * $num_2;
			break;

		case 'Divide':
			echo $num_1 / $num_2;
			break;
		case 'pow':
			echo $num_1 ** $num_2;
			break;
	}

}


?>

</body>
</html>


