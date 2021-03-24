<?php
include('includes/config.php');

// *******************
// Fetch all
// GET '/vehicles/'
//********************

// write query for all vehicles
$sql = 'SELECT * FROM vehicle ORDER BY model';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);

// *******************
// Cleanup
//********************

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sample SQL Output</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
	<div id="wrapper">
    <header>
			<h1>Sample SQL Output</h1>
    </header>
    <main>
      <pre><?php var_dump($vehicles); ?></pre>
    </main>
  </div>
</body>
</html>