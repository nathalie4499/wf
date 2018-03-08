<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $password1 = $_POST['password1'] ?? null;
    $password2 = $_POST['password2'] ?? null;
    
    $nameSuccess = (is_string($name) && strlen($name) > 3);
    $phoneSuccess = (is_numeric($phone) && strlen($phone) > 8);
    $password1Success = ($password1 === $password2 && strlen($password1) > 7);
    $password2Success = ($password2 === $password1);
    
    if($nameSuccess && $phoneSuccess && $password1Success) {
        $connection = new PDO('mysql:host=localhost;dbname=register', 'root');
        echo 'data success';
        return;
    } else {
        echo 'something is missing in your form';
    }
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Please register</title>
</head>
<body>

	<form method="POST">
		<label for="name" >Please give your name:</label>
		<input type="text" name="name" value="<?php echo htmlentities($name ?? ""); ?>" />
		<br/>
		<br/>
		<label for="phone">Please give your phone number:</label>		
		<input type="tel" name="phone" value="<?php echo htmlentities($phone ?? ""); ?>" />
		<br/>
		<br/>
		<label for="password1" >Your password:</label> 
		<input type="password" name="password1" value="" />
		<br/>
		<br/>
		<label for="password2" >Retype your password:</label> 
		<input type="password" name="password2" value="" />
		<br/>
		<br/>
			<?php if (!($password2Success ?? true)) {?>
		<div>
		<p> You have an error in your password validation</p>
		</div>
		<?php } ?>	
		<button type="submit">Send</button>
	
	</form>


</body>


</html>