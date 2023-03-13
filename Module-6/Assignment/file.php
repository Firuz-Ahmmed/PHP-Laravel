<?php
session_start();
$name = $_POST['name'];
setcookie('user_name', $name, time() + (86400 * 30), '/');
$_SESSION['user_name'] = $name;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_picture'])) {
   //    $_SESSION['error'] = "All fields are required";
   //    echo "hello";

   $name = $_POST["name"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   if (isset($_FILES["profile-picture"]) && $_FILES["profile-picture"]["error"] == 0) {
      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $filename = $_FILES["profile-picture"]["name"];
      //echo "$filename";
      $filetype = $_FILES["profile-picture"]["type"];
      $filesize = $_FILES["profile-picture"]["size"];

      // $new_filename = date('YmdHis') . '.' . $filetype;
      $new_filename = date('YmdHis') . '.' . pathinfo($_FILES["profile-picture"]["name"], PATHINFO_EXTENSION);
      //echo $new_filename;
      $target_dir = "/uploads"; ///"uploads";
      if (!file_exists($target_dir)) {
         mkdir($target_dir, 0777, true);
      }
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
      if (in_array($filetype, $allowed)) {
         if (file_exists("uploads/" . $new_filename)) {
            echo $new_filename . " is already exists.";
         } else {
            move_uploaded_file($_FILES["profile-picture"]["tmp_name"], "uploads/" . $new_filename);
            //echo "Your file was uploaded successfully.";
         }
      } else {
         echo "Error: There was a problem uploading your file. Please try again.";
      }
   } else {
      echo "Error: " . $_FILES["profile-picture"]["error"];
   }


   //csv file save
   $file = fopen('uploads/users.csv', 'a+');
   $data = array($name, $email, $new_filename);
   fputcsv($file, $data);
   fclose($file);
   move_uploaded_file($_FILES['profile-picture']['tmp_name'], 'uploads/users.csv' . $new_filename);
   //echo "Your CSV file was updated successfully.";
   header('Location: csv.php');
   exit;
}
