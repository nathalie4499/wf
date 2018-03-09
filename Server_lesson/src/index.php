<?php 
$currentTimeSlot = (new DateTime())->format('H');

if ($currentTimeSlot < 12) {
    $toDisplay = 'Good morning';
} else if ($currentTimeSlot < 18) {
    $toDisplay = 'Good afternoon';
} else if ($currentTimeSlot < 22) {
    $toDisplay = 'Good evening' ;
} else {
    $toDisplay = 'Please sleep';
}
$range = range(0, 10);
////////////////////////
//if (isset($_GET['firstname'])) {
//    $firstname = $_GET['firstname'];
//} else {
//    $firstname = 'John';
//}
//if (isset($_GET['lastname'])) {
//    $lastname = $_GET['lastname'];
//} else {
//    $lastname = 'Doe';
//}

//or

$firstname = $_GET['firstname'] ?? 'John';
$firstname = htmlentities($firstname);

$lastname = $_GET['lastname'] ?? 'Doe';
$lastname = htmlentities($lastname);

// or 
//$lastname = htmlentities($_GET['lastname'] ?? 'Doe');

///////////////////////

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>My title here</title>	
	</head>
	<body>

		Hello $name, <?php echo $toDisplay; ?> <br/>
		Hello <?php  echo $firstname . ' ' . $lastname;?><br/>
	<ul>
		<?php foreach ($range as $element) { ?>
		<li><?php echo $element; ?></li>
		<?php  } ?>
	</ul>
	<ul>
		<?php foreach ($range as $element) {
		echo '<li>' . $element . '</li>';
		} ?>
	</ul>
	

		
		
	</body>
</html>