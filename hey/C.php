 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>

*{
    margin: 0;
    padding: 0;
    justify-content:center;
    text-align:center;
    background-color:grey;
    
}
form{
    width: 400px;
    height: 200px;
    background-color: grey;
    padding-left:10px ;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius:17px;
}

    </style>
 </head>

 <body>

 <?php
 
  $REG_username = "benjamin";
  $REG_password = "1234";

             // Check login when form is submitted 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $REG_username && $password === $REG_password) {

             // Redirect to p.php if login is correct

        header("Location: calculator.php");
        exit();
    }
     else {
        echo "<p style='color: red;'> Incorrect username or password. </p>";
    }
 }
 ?>

                    <!-- Form submits to the same page -->

         <form method="POST">
             Username: <input type="text" name="username" required><br><br>
             Password: <input type="password" name="password" required><br><br>
         <input type="submit" value="Login">
 </form>

 </body>
 </html>
