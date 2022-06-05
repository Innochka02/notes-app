
<?php 
    require("script.php")
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Authorization and registration</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Modulo di autorizzazione -->

    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        <label>Last name</label>
        <input type="text" name="last_name" placeholder="Last name">
        <label>Email</label>
        <input type="text" name="email" placeholder="email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <label>Confirm password</label>
        <input type="password" name="confirm_password" placeholder="Confirm password">
        
        <button type="submit" name="submit" >Sign in</button>
        
        <p>
            Do you have an account? -->  <a href="form.php"> Sign in </a>
        </p>


        <p class="error"><?php echo @$error ?></p>
        <p class="success"><?php echo @$succcess ?></p>

    </form>

</body>
</html>