<?php
    include 'koneksi.php';

    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=rekap_absensi_" . date('Y-m-d') . ".csv");

    $output = fopen("php://output", "w");
    fputcsv($output, array('NIP', 'Nama', 'Tanggal', 'Waktu', 'Status'));

    $query = "SELECT nip, name, date, time, status FROM tb_data WHERE date = CURDATE()";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }

    fclose($output);
    exit();
?>