<?php
 $filename="c:/xampp/htdocs/oop php/PHP-Laravel/Module-6/Recorded-video-related-code/test.txt";
 if(is_readable($filename)){
 $fp=fopen("$filename","r");
 ;
 while($line=fgets($fp)){
    echo $line;
 }
 rewind($fp);//Move the cursor to first stage
 fseek($fp,9);//Move the cursor to 8 no characters
 fseek($fp,-1,SEEK_END);//move the cursor to the last 
 echo "\n";
 while($line=fgets($fp)){
    echo $line."-";
 }
 fclose($fp); 

 $data=file($filename);//read fileas an array
 print_r( $data);

 $data=file_get_contents($filename);//read the file at once
 echo $data;
}

?>