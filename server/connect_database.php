<?php

declare(strict_types=1);

$config = parse_ini_file(__DIR__ . '/../.env', false, INI_SCANNER_RAW);

$conn = new mysqli(
  $config['DB_HOST'] ?? '',
  $config['DB_USER'] ?? '',
  $config['DB_PASS'] ?? '',
  $config['DB_NAME'] ?? ''
);

if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
