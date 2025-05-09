<?php

// Supabase connection
$host = "aws-0-us-east-2.pooler.supabase.com";
$port = "6543";
$dbname = "postgres"
$usernamee = "postgres.avuspyuebeemhsonblpp";
$password = "unicesmag$$";

// Connection string
$data_connection = "
host = $host
port = $port
dbbname = $dbname
user = $usernamee
password = $password
";

// Error connection
$conn = pg_connect($data_connection);
if (!$conn) {
    echo "Connection failed:" . pg_last_error($conn);
}

?>