
<?php
// $fileName = 'ostad.txt';
// if (!file_exists($fileName)) {
//     $handle = fopen($fileName, 'w') or die('Cannot create file: '.$fileName);
//     fclose($handle);
// }
// $content = file_get_contents($fileName);
// //print_r($content);
// $content .= "\n" . date('Y-m-d H:i:s');
// $data=file_put_contents($fileName, $content);
// echo "\nFile updated";
$fileName = 'ostad.txt';
$file=fopen($fileName,'r+');
$content = file_get_contents($fileName);
print_r($content);
$content .= "\n" . date('Y-m-d H:i:s');
$data=file_put_contents($fileName, $content);
fclose($file);
echo "\nFile updated";
?>
