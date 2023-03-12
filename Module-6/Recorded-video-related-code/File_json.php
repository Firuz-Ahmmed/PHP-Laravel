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
  $json_data=json_encode($students);
  $data=file_put_contents($filename,$json_data,LOCK_EX);
  print_r($data);
?>