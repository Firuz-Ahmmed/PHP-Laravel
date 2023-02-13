<?php
function isEvenOrOdd($number){
    if(($number%2)==0){
        return true;
    }
    else{
        return false;
    }

}
$givenNumber=11;
if(isEvenOrOdd($givenNumber))
{
    echo "Your Given Number is :{$givenNumber}  which is a Even Number.";
}
else{
    echo "Your Given Number is :{$givenNumber}  which is a Odd Number.";
}

?>