<?php

header('Content-Type: application/json');

// DB connection string
$connecting_string = new mysqli('localhost', 'root', '', 'moviesdb');


// Retrieving and validating fields
$title = $_POST['titleInsert'] ?? null;
$plot = $_POST['plotInsert'] ?? null;
$director = $_POST['directorInsert'] ?? null;
$actors = $_POST['actorsInsert'] ?? null;
$year = $_POST['yearInsert'] ?? null;

// Validation to make sure fields are not empty
if (!$title || !$plot || !$director || !$actors || !$year) {
    echo json_encode(["error" => "All fields are required."]);
    exit;
}


$query = "INSERT INTO movies (title, plot, director, actors, year) VALUES (?, ?, ?, ?, ?)";
$stmt = $connecting_string->prepare($query);

if ($stmt) {
    $stmt->bind_param("ssssi", $title, $plot, $director, $actors, $year);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Movie added successfully."]);
    } else {
        echo json_encode(["error" => "Database query failed: " . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "Database query failed: " . $connecting_string->error]);
}

$connecting_string->close();

?>
