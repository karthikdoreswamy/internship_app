<?php
require_once __DIR__ . "/config.php";

if (!isset($conn) || $conn->connect_error) {
  http_response_code(500);
  echo "DB connection failed\n";
  exit;
}

http_response_code(200);
echo "OK\n";
