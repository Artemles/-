<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../style.css">
    
    <title>PHPregist</title>

</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>login</h2>

            <input name="username" type="text" placeholder="User name" require>
            <br>
            <input name="password" type="text" placeholder="Password" require>
            <button type="submit">login</button>
            <a href="index.php">regist</a>
        </form>
    </div>
    
    <?php 
    session_start();
require('connect.php'); 

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $active =1;

    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
    }else {
        $msg = "Ошибка";
    }
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "hello".$_SESSION."";
    echo "<a href='logout.php'> logout </a>";
}

?>


</body>
</html>