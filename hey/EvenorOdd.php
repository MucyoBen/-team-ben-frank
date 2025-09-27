result: 

<?php


$in = $_POST["in"];

if($in % 2 == 0 && $in>0){
    print "is even number";
}else{
    print "is odd number";
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
    </style>

</head>
<body>
    <form action="" method="POST">
        <h2><i>Check EVEN or ODD number</i></h2>
        <input type="text" name="in" placeholder="Check Even or Odd ">
    </form>
</body>
</html>