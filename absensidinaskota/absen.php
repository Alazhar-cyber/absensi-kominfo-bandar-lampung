<?php
    include 'koneksi.php';
    $successMessage = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $tanggal = date('Y-m-d');
        $waktu = date('H:i:s');
        $status = 'Present';
        
        $query = "INSERT INTO tb_data (nip, name, date, time, status) VALUES ('$nip', '$nama', '$tanggal', '$waktu', '$status')";
        if (mysqli_query($conn, $query)) {
            $successMessage = "Absensi berhasil disimpan!";
        } else {
            $successMessage = "Gagal menyimpan absensi.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Dinas Kominfo Bandar Lampung</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: rgb(0, 0, 0);
        }
        .header {
            background-color: blue;
            color: white;
            padding: 15px 25px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 70px);
        }
        .form-container {
            text-align: center;
            background-color: white;
            padding: 50px;
            border-radius: 50px;
        }
        .form-container input {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            background-color: #1c1aa5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .success-message {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        ABSENSI DINAS KOMINFO BANDAR LAMPUNG
    </div>
    <div class="content">
        <div class="form-container">
            <h2>Form Absensi</h2>
            <form method="POST" action="">
                <input type="text" name="nip" placeholder="Masukkan NIP" required>
                <input type="text" name="nama" placeholder="Masukkan Nama" required>
                <button type="submit">Present</button>
            </form>
            <?php if ($successMessage) { echo "<p class='success-message'>$successMessage</p>"; } ?>
        </div>
    </div>
</body>
</html>
