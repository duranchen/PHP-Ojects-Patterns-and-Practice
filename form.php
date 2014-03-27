<?php
if (isset($_POST['input_name'])) {
    
    $input = $_POST['input_name'];
    if (isset($input)) {
        var_dump($input);
    }  
}
?>


<html>
<head></head>
<body>
	<form action="" method="post">
		<input type="text" name="input_name" id="input_id">
		<button type="submit">Click Me!</button>

	</form>

</body>
</html>
