<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h3>Mahasiswa</h3>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?php echo $mhs -> id ?></td>
                <td><?php echo $mhs -> nim ?> </td>
                <td><?php echo $mhs -> nama ?></td>
                <td><?php echo $mhs -> gender ?></td>
                <td><?php echo $mhs -> ipk ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>">Detail</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>