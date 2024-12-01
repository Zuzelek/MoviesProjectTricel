<?php
   header('Content-Type: application/json');

   //Connecting to DB
   $connecting_string = new mysqli('localhost', 'root', '', 'moviesdb');

   //CHecking for errors
   if($connecting_string->connect_error){
    die(json_encode(['error' => 'Database connection failed']));
   }


   //Query to fetch movies
   $sql = "SELECT * FROM movies";
   $result = $connecting_string->query($sql);

   //Retrieving movies and encoding them as JSON
   $movies = [];
   if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $movies[] = $row;
    }
   }
    
   echo json_encode($movies);

   $connecting_string->close();


?>
