<?php

/* Local connection
$host = "Localhost";
$port = "5432";
$dbname = "ecoconecta";
$username = "postgres";
$password = "unicesmag";
*/

// Supabase connection
$host = "aws-0-us-east-2.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";
$username = "postgres.waygmyvdeqjfdddwzxpb";
$password = "ecoconecta$$";

// Connection string
$data_connection = "
host = $host
port = $port
dbbname = $dbname
user = $username
password = $password
";

// Error connection
$conn = pg_connect($data_connection);
if (!$conn) {
    echo "Connection failed:" . pg_last_error($conn);
}

?>