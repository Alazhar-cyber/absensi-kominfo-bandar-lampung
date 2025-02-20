<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
if($_POST['aksi'] =="add"){
	$NIP = $_POST['NIP'];
	$Nama = $_POST['Nama'];
	$Tanggal = $_POST['Tanggal'];
	$Jam = $_POST['Jam'];
	$Status = $_POST['Status'];

	$query = "INSERT INTO tb_data VALUES(null, '$NIP', '$Nama', '$Tanggal', '$Jam', '$Status')";
	$sql = mysqli_query($conn, $query);

	if($sql){
		header("location: data.php");
		//echo "data berhasil ditambahkan <a href='index.php'>[home]</a>";
	}else {
		echo $query;
	}



//echo $NIP." | ".$Nama." | ".$Tanggal." | ".$Jam." | ".$Status;

//	echo "<br>Tambah data <a href='index.php'>[Home]</a>";
} else if($_POST['aksi'] =="edit"){
	echo "Edit data  <a href='data.php'>[Home]</a>";
	//var_dump($_POST);

	$id =$_POST['id'];
	$NIP = $_POST['NIP'];
	$Nama = $_POST['Nama'];
	$Tanggal = $_POST['Tanggal'];
	$Jam = $_POST['Jam'];
	$Status = $_POST['Status'];

	$query = "UPDATE tb_data SET nip='$NIP', name='$Nama', date='$Tanggal', time='$Jam', status='$Status' WHERE id='$id';";
	$sql = mysqli_query($conn, $query);
	header("location: data.php");
}
}
if(isset($_GET['hapus'])){
	$id = $_GET['hapus'];
	$query = "DELETE FROM tb_data WHERE id ='$id';";
	$sql = mysqli_query($conn, $query);

if($sql){
		header("location: data.php");
		//echo "data berhasil ditambahkan <a href='index.php'>[home]</a>";
	}else {
		echo $query;
	}


//echo "Hapus data <a href='index.php'>[Home]</a>";	
}
?>