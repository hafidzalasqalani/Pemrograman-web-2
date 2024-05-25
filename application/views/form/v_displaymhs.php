<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
<div class="containter">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Telp</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mhs as $m) {
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?php echo $m->npm ?></td>
                    <td><?php echo $m->nama ?></td>
                    <td><?php echo $m->jurusan ?></td>
                    <td><?php echo $m->telp ?></td>
                    <td><?php echo $m->alamat ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- <div>
        <button onclick="location.href='<?php echo base_url(); ?>index.php/form/login_member/index'">Back to
            Login</button>
    </div> -->
</div>