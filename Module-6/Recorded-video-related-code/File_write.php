<?php
 $filename="c:/xampp/htdocs/oop php/PHP-Laravel/Module-6/Recorded-video-related-code/file_write.txt";
 $fp=fopen("$filename","a");
 fwrite($fp,"Nazmul hossain shanto\n");
 fwrite($fp,"Nazmul hossain\n");
 fwrite($fp,"Nazmul\n");
 fclose($fp);
?>