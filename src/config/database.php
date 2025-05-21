<?php

// Supabase connection
$host = 'aws-0-us-east-2.pooler.supabase.com';
$port = '6543';
$dbname = 'postgres';
$username = 'postgres.waygmyvdeqjfdddwzxpb';
$password = 'ecoconecta@@';

// Database connection
$data_connection = "
    host = $host
    port = $port
    dbname = $dbname
    user = $username
    password = $password
";

$conn = pg_connect($data_connection);
if(!$conn) {
    echo "Connection failed: ". pg_last_error($conn);
}

?>