<?php

include('./setting.php');

$_email = $_POST['email'];
$_pwd = $_POST['pwd'];

if(empty($_email) || empty($_pwd)){
    echo "The field not debit clean";
    exit;
}else{
    $query_insert = "INSERT INTO users (email, pwd) VALUES ('$_email', '$_pwd')";
    $SaveUsers = mysqli_query($connection, $query_insert);
    $_email = $_POST['email'] = "";
    $_pwd = $_POST['pwd'] = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome test auth</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/signup.css">
</head>
<body>
    <div class="container py-5">
        <div class="box-welcome">
            <label class="title-welcome">Welcome to test technique</label>
            <div class="body-welcome">
                <p>We welcome you to the <strong>Technical test</strong>, now you can
                    interact with our <strong>Website</strong> as: <strong>"Register, Update and Delete data!...</strong>
                </p>
                <br>
                <p>Now you can register your employees and do what you want with
                    the information.
                </p>
                <br>
                <a href="../page/Home.php" class="btn link-welcome" >Go to work</a>
            </div>
        </div>
    </div>
</body>
</html>