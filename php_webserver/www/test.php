<?php
$servername = 'MYSQL';
$username ='user';# getenv("MYSQL_ENV_DB_USER");
$password ='user';# getenv('MYSQL_ENV_DB_PASSWORD');
$dbname ='world';# getenv('MYSQL_ENV_DB_DBNAME');

$host= gethostname();

echo "<h1>Docker containers IP address: ". gethostbyname($host) ."</h1>";
echo "<h2>Docker container ID: ". $host."</h2>";

//connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//execute the SQL query and return records
$sql = "SELECT * FROM city WHERE CountryCode='AUT'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Name"]. "  :   " . $row["Population"]. "<br>";
    }
} else {
    echo "0 results";
}

//close the connection
$conn->close();
?>
