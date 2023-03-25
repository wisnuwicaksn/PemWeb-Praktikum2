<?php
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $pekerjaan = $_POST["pekerjaan"];

    $tanggal_lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($tanggal_lahir)->y;

    if ($pekerjaan == "karyawan") {
        $gaji = 5000000;
    } else if ($pekerjaan == "dosen") {
        $gaji = 7000000;
    } else if ($pekerjaan == "programmer") {
        $gaji = 8000000;
    }

    echo "<h2>Hasil Input Data</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tgl_lahir . "<br>";
    echo "Umur: " . $umur . " Tahun<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Gaji: Rp " . $gaji . "<br>";
?>