<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="number1" placeholder="Enter number 1" required value="<?php if(isset($_POST['number1'])){echo $_POST['number1'];}?>"> <br>
    <input type="text" name="number2" placeholder="Enter number 2" value="<?php echo $_POST['number2'] ?? null ?>"> <br>
   <button name="cal" type="submit" value="+">+</button>
   <button name="cal" type="submit" value="-">-</button>
   <button name="cal" type="submit" value="*">*</button>
   <button name="cal" type="submit" value="/">/</button>
    
    </form>

    <?php 

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
    
    
    ?>

  
</body>
</html>