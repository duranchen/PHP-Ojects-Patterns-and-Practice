<?php
$input = $_POST['input_name'];
if (isset($input)) {
    var_dump($input);
}

?>


<html>
<head></head>
<body>
	<form action="" method="post">
		<input type="text" name="input_name" >
		<button type="submit">Click Me!</button>

	</form>

</body>
</html>
