<?php

//1. Declare function to make a connection to the database

function db_connect() {
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "password";
	$dbname = "artforimpact";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
        );
    }
    return $connection;
}

//2. Create array of data to be used to populate art database

$art_array = array( 
	array("title"=>"Mona Lisa", "artist"=>"Leonardo da Vinci", "year"=>1503),
	array("title"=>"The Starry Night", "artist"=>"Vincent van Gogh", "year"=>1889),
	array("title"=>"The School of Athens", "artist"=>"Raffaello Sanzio", "year"=>1509),
	array("title"=>"The Persistence of Memory", "artist"=>"Salvador Dali", "year"=>1931),
	array("title"=>"American Gothic", "artist"=>"Grant Wood", "year"=>1930)
);

//3. Connect to the database

$connection = db_connect();

//4. Loop through the data array

foreach($art_array as $piece) {
	
	//5. Build SQL statement
	
	$query  = "INSERT INTO artwork (";
	$query .= "title, artist, year";
	$query .= ") VALUES (";
	$query .= "'{$piece["title"]}', '{$piece["artist"]}', {$piece["year"]}";
	$query .= ")";
	
	$result = mysqli_query($connection, $query);
	
	//6. If query fails, display error
	
	if ($result) {
		echo "Successfully added {$piece["title"]}";
	} else {
		die("Database query failed. " . mysqli_error($connection));
	}
}

//7. Close database connection

mysqli_close($connection);

?>