<?php

$servername = "localhost";
$username = "root";
$password = "ultra";

// Prisijungiam prie serverio
$conn = mysqli_connect($servername, $username, $password, 'nauja_baze');

// Patikrinam prisijungimą
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//exit;

/*
// Sukuriam duomenų bazę
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
   echo "Database created successfully";
} else {
   echo "Error creating database: " . mysqli_error($conn);
}

*/

$sql = "DROP TABLE pets";
if (mysqli_query($conn, $sql)) {
    echo "Table Pets deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}


$sql = "CREATE TABLE Pets (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    savininko_vardas VARCHAR(30) NOT NULL UNIQUE,
    augintinio_vardas VARCHAR(30) NOT NULL,
    rusis VARCHAR(20),
    reg_date TIMESTAMP
    )";
   
    if (mysqli_query($conn, $sql)) {
        echo "Table Pets created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "INSERT INTO Pets (savininko_vardas, augintinio_vardas, rusis)
VALUES ('Marius', 'Mazyte', 'kate');";
$sql .= "INSERT INTO Pets (savininko_vardas, augintinio_vardas, rusis)
VALUES ('Ausra', 'Reksass', 'suo');";
$sql .= "INSERT INTO Pets (savininko_vardas, augintinio_vardas, rusis)
VALUES ('Julius', 'Laila', 'briedis')";

if (mysqli_multi_query($conn, $sql)) {
   echo "New records created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
