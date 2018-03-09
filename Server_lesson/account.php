<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My title here</title>
	</head>
	<body>
<?php 
//first: get the id
// second : if not given or not numeric =>error
//if valid connection to db
//if fail db driver error
//create the sql query
//if yes execute the query and get result(object)
//fetchall results on this object
//check if we have line on this result
//no =>error
//yes for each line display the username and the password
$displayAccountId = $_GET['id'] ?? null;

if (!$displayAccountId || !is_numeric($displayAccountId)){
    ?>
    <div>
    	<p>To be displayed, this page needs a valid numeric id as query</p>
    </div>
	<?php 
} else {
    try {
        $connection = new PDO('mysql:host=localhost;dbname=register', 'root');
    } catch (PDOException $exception) {
        http_response_code(500);
        echo 'A problem occured, contact support';
        exit(1);
       }
       $sqlQuery = "SELECT username, password FROM user WHERE id =" . $displayAccountId;
       $results = $connection->query($sqlQuery); //we have an object (PDO object)
       
       //case of fetchAll
       $allresults = $results->fetchAll(); 
       
       if(empty($allresults)) {
           ?>
    <div>
    	<p>There is no result from your query</p>
    </div>
    <?php
    return; //to exit the current function
 }
   foreach($results as $resultQuery) {
      $username = $resultQuery['username'];
      $password = $resultQuery['password'];
         ?>
    <div>
    	<p>Username: <?php echo $username;?></p>
    	<p>Password: <?php echo $password;?></p>
    </div>
	<?php
     }
}
	?>
	</body>
</html>