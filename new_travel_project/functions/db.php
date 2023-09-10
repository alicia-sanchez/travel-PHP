<?php

function getDbConnection(): PDO {
    $dbSettings = parse_ini_file(__DIR__ . '/../db.ini');
  
    [
      'DB_HOST' => $host,
      'DB_PORT' => $port,
      'DB_NAME' => $dbname,
      'DB_CHARSET' => $charset,
      'DB_USER' => $user,
      'DB_PASSWORD' => $password
    ] = $dbSettings;
  
    $connexion = new PDO(
      "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset",
      $user,
      $password,
      [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );

    return $connexion;


  }