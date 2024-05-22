<!DOCTYPE html>
<html>

<head>

    <title></title>

</head>
<link rel="stylesheet" href='http://localhost/belajarci/assets/css/twit.css' />

<body>
    <div class="container">
        <?php if (isset($message)) : ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    <?php echo $message; ?>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
            </div>
        <?php endif; ?>
        <div class="brand-logo"></div>
        <div class="brand-title">LOGIN</div>
        <form method="post" action="<?php echo base_url(); ?>form/login/login">

            <label>Username : </label>
            <input type="text" name="username"> <br />
            <label>Password : </label>
            <input type="password" name="pwd"> <br />

            <button type="submit" name="tombol">Login </button>
        </form>
        <?php echo validation_errors(); ?>
    </div>
</body>

</html>