<?php

$REG_username = "benjamin";
$REG_password = "891478338";

// Check login when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $REG_username && $password === $REG_password) {
        // Redirect to p.php if login is correct
        header("Location: calculator.php");
        exit();
    } else {
        echo "<p style='color: red;'>Incorrect username or password.</p>";
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
   font-size:30px;
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
    width: 50px;
    height:40px;
    border-radius:17px;
    background-color:gold;
}
button:hover{
    background-color:green;
}
.in1 .in2{
   
    height:40px;
    width: 400px;
}
.btn{
 border-radius:10px;
}
.btn:hover{
    background-color:grey;
}


    </style>
</head>
<body>

       <form method="post">

       <input class="in1" type="text" name="username" placeholder="Enter your name..." required>
       <input class="in2" type="password" name="password"  placeholder="Enter your password..." required>

       <br><br>

       <input type="submit" value="SUBMIT" name="btn" width="50px" class="btn">

       </form>
    
</body>
</html>