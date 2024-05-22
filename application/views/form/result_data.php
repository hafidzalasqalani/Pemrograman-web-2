<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="http://localhost/hafidzalasqalani134/assets/css/form.css">
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Welcome : <?php echo $nama; ?></h1>
        <table class="table table-bordered">
            <tr>
                <td>NPM</td>
                <td><?php echo $npm; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?php echo $jurusan; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $jenkel; ?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><?php echo $uts; ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><?php echo $uas; ?></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><?php echo $tugas; ?></td>
            </tr>
            <tr>
                <td>Nilai Kehadiran</td>
                <td><?php echo $kehadiran; ?></td>
            </tr>
            <tr>
                <td>Total Nilai</td>
                <td><?php echo $total; ?></td>
            </tr>
        </table>
        <h1 style="text-align: center; color: blue;">Grade : <?php echo $grade; ?></h1>
        <button id="sign_in_button" type="button" class="btn btn-primary mr-2" onclick="window.location.href='<?php echo base_url(); ?>form/login/back'">Back</button>

    </div>

</body>

</html>