<?php include __DIR__.'/init.php'; ?>
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
//if we use username as request: we need to secure it with escape (/) with PDO driver- with prepared queries PDO will escape parameters; %s first
//parameter, first we need to specify that we prepare a query: $connection->prepare($statement); here it is $sqlQuery
//replace with a placeholder: ? (instead of . $displayAccountUsername; PDO statement is an object where we will be able to prepare a statement
//$sql='SELECT * FROM user WHERE username = "?" AND id=?'
//$statement = $connection->prepare($sqlQuery);
//$statement->bindParam(1, $displayAccountUsername); 1 refers to the first question mark from line 23
//$statement->bindParam(2, $displayAccountId); 2 refers to the second question mark form line 23 - this is the escape
//or $parameter = 'Hello world';
//$statement->bindParam(2, $displayAccountUsername, PDO::PARAM_STR);
//$statement->bindParam(2, $parameter, PDO::PARAM_INT);
//$statement->execute();
//we do not use query it is not secure: bindParam instead
//to be more verbose: namedplaceholder; $sql = 'SELECT * FROM user WHERE username = :username';
//then statement with connection
//then bindParam('username', etc......);
$displayAccountId = $_GET['id'] ?? null;
if (!$displayAccountId || !is_numeric($displayAccountId)){
    ?>
    <div>
    	<p>To be displayed, this page needs a valid numeric id as query</p>
    </div>
	<?php 
} else {
    try {
        //$connection = new PDO('mysql:host=localhost;dbname=register', 'root'); before installation of require
        $connection = Service\DBConnector::getConnection();
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