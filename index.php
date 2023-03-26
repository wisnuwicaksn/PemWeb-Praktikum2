<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h2>Input Data</h2>
        <form action="hitung_umur.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
            <label for="pekerjaan">Pekerjaan:</label>
            <select id="pekerjaan" name="pekerjaan">
                <option value="karyawan">Karyawan</option>
                <option value="dosen">Dosen</option>
                <option value="programmer">Programmer</option>
            </select><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>