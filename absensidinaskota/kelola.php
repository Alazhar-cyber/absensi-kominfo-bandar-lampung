<!DOCTYPE html>
<?php
include 'koneksi.php';
  $id ='';
  $NIP = '';
  $Nama = '';
  $Tanggal = '';
  $Jam = '';
  $Status = '';

if(isset($_GET['ubah'])){
  $id = $_GET['ubah'];

  $query = "SELECT * FROM tb_data WHERE id = '$id';";
  $sql = mysqli_query($conn, $query);

  $result = mysqli_fetch_assoc($sql);

  $NIP = $result['nip'];
  $Nama = $result['name'];
  $Tanggal = $result['date'];
  $Jam = $result['time'];
  $Status = $result['status'];

  //var_dump($result);
  //die();
}
      ?>



<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

<!--font Awesome-->
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

	<title>Absesnsi Dinas Kominfo Bandar Lampung</title>
</head>
<body>
<nav class="navbar navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Absensi Pegawai
    </a>
  </div>
</nav>
<div class="container">
<form method="POST" action="proses.php"> 
  <input type="hidden" value="<?php echo $id; ?>" name="id">
    <div class="mb-3 row">
    <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input required type="text" name="NIP"class="form-control" id="nip" placeholder="-" value="<?php echo $NIP; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input required type="text" name="Nama"class="form-control" id="name" placeholder="-" value="<?php echo $Nama; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Tanggal"  class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input required type="text" name="Tanggal"class="form-control" id="date" placeholder="-" value="<?php echo $Tanggal; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Jam"  class="col-sm-2 col-form-label">Jam</label>
    <div class="col-sm-10">
      <input required type="text" name="Jam"class="form-control" id="time" placeholder="-" value="<?php echo $Jam; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
    <select value="<?php echo $Status; ?>"id="Status" name="Status" class="form-select">
  <option selected>-</option>
  <option value="present">present</option>
  <option value="absent">absent</option>
</select>
</div>
</div>

   <div class="mb-3 row mt-5">
    <div class="col">
      <?php
if(isset($_GET['ubah'])){
      ?>
      <button type="submit" name="aksi" value="edit" class="btn btn-success">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
     Simpan Perubahan
    </button>
    <?php
} else {
    ?>
    <button type="submit" name="aksi" value="add"class="btn btn-success">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
     Tambahkan
    </button>
     <?php
} 
    ?>
    <a href="index.php" type="button"class="btn btn-danger">
     <i class="fa fa-arrow-left" aria-hidden="true"></i>
      Batal
    </a>
    </div>
     </div>
</form>
    
  
</div>
</body>
</html>