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

<?php 
require('connect.php'); 

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $active =1;

    $query = "INSERT INTO users (username, password, email, active) VALUES ('$username', '$password', '$email', '$active')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $messege = "Регистрация прошла успешно";
    }else{
        $messege = "Произошла ошибка";
    }
    echo "</pre>";
    print_r($result);
    echo "</pre>";
    echo "</pre>";
    print_r($connection);
    echo "</pre>";
    echo "</pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

    <div class="container">
        <form action="" method="POST">
            <h2>Regist</h2>

            <?php echo $messege; ?>

            <input name="username" type="text" placeholder="User name" require>
            <br>
            <input name="email" type="text" placeholder="Email" require>
            <br>
            <input name="password" type="text" placeholder="Password" require>
            <button type="submit">Отправить</button>
            <a href="login.php">login</a>
        </form>
    </div>
    
</body>
</html>