<?php
  include 'koneksi.php';

  $query = "SELECT * FROM tb_data;";
  $sql = mysqli_query($conn, $query);
  $no = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!--font Awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>Absensi Dinas Kominfo Bandar Lampung</title>
    <style>
        .download-container {
            text-align: center;
            margin-top: 20px;
        }
        .download-button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Absensi Pegawai
    </a>
  </div>
</nav>
<!--judul-->
<div class="container">
    <h1 class="mt-4">DATA PEGAWAI</h1>
    <figure>
        <blockquote class="blockquote">
            <p>Data yang telah disimpan database</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            <cite title="Source Title">Dinas Kominfo</cite>
        </figcaption>
    </figure>
    <a href="kelola.php" type="button" class="btn btn-success mb-2">
        <i class="fa fa-plus"></i>
        Tambah Data
    </a>
    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($result = mysqli_fetch_assoc($sql)) { ?>
                <tr>
                    <td><?php echo ++$no;?>.</td>
                    <td><?php echo $result['nip'];?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['date'];?></td>
                    <td><?php echo $result['time'];?></td>
                    <th><?php echo $result['status'];?></th>
                    <td>
                        <a href="kelola.php?ubah=<?php echo $result['id'];?>" type="button" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="proses.php?hapus=<?php echo $result['id'];?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut???')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="download-container">
    <a href="download_data.php" class="download-button">Download</a>
</div>
</body>
</html>
