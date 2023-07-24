<?php 


echo "<pre>";

if($_SERVER['REQUEST_METHOD']=="POST"){

    $number1= $_POST['number1'];
$number2= $_POST['number2'];


if($_POST['cal']=='+'){
    echo "the addition".' ' .$number1+$number2;
}
if($_POST['cal']=='-'){
    echo "the subtraction".' '. $number1-$number2;
}
if($_POST['cal']=='*'){
    echo "the gun". ' '.$number1*$number2;
}
if($_POST['cal']=='/'){
    echo "the vah". ' '.$number1/$number2;
}


}else {
    echo "tomar request thik nai";
}







?>