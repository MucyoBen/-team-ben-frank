result:
<?php


if(isset($_POST['firstNum']) ){
        
            //first num

    $num = $_POST['firstNum'] ;
$a = (float)$num;

          //second num

  $num2 =  $_POST['secondNum'] ;
  $b = (float)$num2;

  


 if(isset($_POST['add'])){
    
    print $a + $b;

    }
 
 elseif(isset($_POST['sb'])){
        echo $a - $b;
    }
    elseif(isset($_POST['mult'])){
        echo $a * 1500;
    }
    elseif(isset($_POST['div'])){
        echo $a / 1500;
    }
    elseif(isset($_POST['mod'])){
        echo $a % $b;
    }

}


    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        *{
   font-size:20px;
   
}
body{
    background-color: yellowgreen;
    text-align: center;
    justify-content: center;
    
}
form{
    margin-top:50px;
}
button{
    font-size:30px;
    padding: auto;
    width: 77px;
    height:40px;
    border-radius:17px;
    background-color:gold;
}
button:hover{
    background-color:green;
}
input{
    border-radius:10px;
    height:40px;
    width: 400px;
}
p{
    color:red;
}
    </style>
</head>
<body><h1>CALCULATE</h1>
    <form action="" method="POST">
        
    <input type="text" name="firstNum" class="in1" placeholder="write your first number"> <br> 
    <input type="text" name="secondNum" class="in1" placeholder="write your second number"><br>
    
        <button  name="add">+</button>
        <button  name="sb">-</button>
        <button  name="mult">x</button>
        <button  name="div">/</button>
        <button  name="mod">%</button> <br>
    
    
   
    <p name="p"></p>

    </form>
</body>
</html>