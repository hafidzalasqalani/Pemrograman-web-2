<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div class="container-sm border">
        <form method="post" action="<?php echo base_url(); ?>form/login/save">
            <label>Username : </label>
            <input type="text" name="username"> <br />
            <label>Password : </label>
            <input type="text" name="password"> <br />
            <input type="submit" name="tombol" value="Login" />
        </form>
    </div>
</body>

</html>