<?php



$w = "frw";

if(isset($_POST["in"])){
   $in=$_POST["in"];
   $a = (float)$in;
   
   if(isset($_POST["usa"])){
    $usa=$_POST["usa"];
     print   $a * 1500;
   }elseif(isset($_POST["rw"])){
    $rw = $_POST["rw"];
     print $a / 1500;
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
   padding: 10px,10px,10px;   
}
body{
    background-color: yellowgreen;
    text-align: center;
    justify-content: center;
    
}
form{
    margin-top:50px;
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
<body>

      <form action="" method="POST">
        <input type="text" placeholder="enter your money..." name="in"><br>
        From: <details>
            <summary>choose country</summary>
          
            <button name="usa">drs to frw</button>
            <button name="">china</button>
            <button name="">burundi</button>
            <button name="">tanzania</button>
            <button name="rw">rwanda to usa</button>

        </details>
    
      </form>
    
</body>
</html>