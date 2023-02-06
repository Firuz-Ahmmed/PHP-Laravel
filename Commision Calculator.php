<?php
/*Firuz Ahmmed
 Phone:01713533063  
HR consultancy commision calculator for their admission agents*/
//start calculation
$tuition_fee=10000;//Declare the variable and the assign the values
$commision=($tuition_fee>=20000) ? ($tuition_fee*(25/100)):(($tuition_fee<20000 && $tuition_fee>=10000) ? ($tuition_fee*(20/100)):(($tuition_fee<10000 && $tuition_fee>=7000) ? ($tuition_fee*(15/100)): "Data Is Invalid"));//calculation of the commision
echo "'HF consultancy',Commision of given tuition fees is : {$commision}";//print the commision
//end calculation
?>




