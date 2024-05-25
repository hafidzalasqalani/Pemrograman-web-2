<html>

<head>
    <title>Membuat Heading dengan Helper HTML Codeigniter</title>
</head>

<body>
    <?php
    echo heading("Helper HTML - H1", 1);
    echo heading("Helper HTML - H2", 2);
    echo heading("Helper HTML - H3", 3);
    echo heading("Helper HTML - H4", 4);
    echo heading("Helper HTML - H5", 5);
    echo heading("Helper HTML - H6", 6);
    $gambar = array(

        // 'src' => 'http://localhost/belajarci/assets/img/icons8-login-100.png',
        'src' => 'assets/img/icons8-login-100.png',
        'alt' => 'Artesonraju - Wikipedia',
        'class' => 'post_images',
        'width' => '300',
        'height' => '300',
        'title' => 'Artesonraju Mountain'

    );
    echo img($gambar);
    ?>
</body>

</html>