<?php
$filename="c:/xampp/htdocs/oop php/PHP-Laravel/Module-6/Recorded-video-related-code/file_write.txt";
$students = array(
    "John" => array(
      "age" => 20,
      "major" => "Computer Science",
      "GPA" => 3.8
    ),
    "Jane" => array(
      "age" => 22,
      "major" => "Business",
      "GPA" => 3.5
    ),
    "Bob" => array(
      "age" => 19,
      "major" => "Engineering",
      "GPA" => 3.9
    )
  );
$book = array(
    "title" => "To Kill a Mockingbird",
    "author" => "Harper Lee",
    "year" => 1960,
    "publisher" => "J. B. Lippincott & Co.",
    "genre" => "Southern Gothic"
  );
  
  //array_push($students,$book);
 // $data=serialize($students);
  //file_put_contents($filename,$data,LOCK_EX);
  
  $dataFromFile=file_get_contents($filename);
  $data=unserialize($dataFromFile);
   print_r($data);
?>