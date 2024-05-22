<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <link rel="stylesheet" href="http://localhost/hafidzalasqalani134/assets/css/form.css">
</head>

<body>

    <div class="container mt-5">
        <div id="login">
            <form id="login_form" method="post">
                <h1 class="mb-4">Kartu Hasil Studi</h1>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control" name="npm">
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenkel" value="Pria">
                        <label class="form-check-label" for="male">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenkel" value="Wanita">
                        <label class="form-check-label" for="female">Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="uts">Nilai UTS</label>
                    <input type="number" class="form-control" name="uts">
                </div>
                <div class="form-group">
                    <label for="number">Nilai UAS</label>
                    <input type="text" class="form-control" name="uas">
                </div>
                <div class="form-group">
                    <label for="number">Nilai Tugas</label>
                    <input type="text" class="form-control" name="tugas">
                </div>
                <div class="form-group">
                    <label for="number">Nilai Kehadiran</label>
                    <input type="text" class="form-control" name="kehadiran">
                </div>
                <br>
                <!-- Tambahkan sisa field_container di sini -->
                <div class="form-group">
                    <button id="sign_in_button" type="submit" class="btn btn-primary mr-2" formaction="<?php echo base_url(); ?>form/login/submit">Submit</button>
                    <button id="sign_in_button" type="reset" class="btn btn-secondary" formaction="<?php echo base_url(); ?>form/login/reset">Reset</button>
                </div>
                <!-- Tampilkan pesan kesalahan validasi di sini -->
                <?php echo validation_errors(); ?>
            </form>
        </div>
    </div>

</body>

</html>