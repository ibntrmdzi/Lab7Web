<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Form Input</h1>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama"><br><br>

        <label>Tanggal Lahir: </label>
        <input type="date" name="tgl_lahir"><br><br>

        <label>Pekerjaan: </label>
        <select name="pekerjaan">
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Polisi">Polisi</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
        // Pastikan form sudah dikirim
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil input dari form
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            // Hitung umur
            $tanggal_lahir = new DateTime($tgl_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tanggal_lahir)->y;

            // Tentukan gaji berdasarkan pekerjaan
            $gaji = 0;
            switch ($pekerjaan) {
                case 'Programmer':
                    $gaji = 8000000;
                    break;
                case 'Desainer':
                    $gaji = 7000000;
                    break;
                case 'Guru':
                    $gaji = 5000000;
                    break;
                case 'Dokter':
                    $gaji = 10000000;
                    break;
                case 'Polisi':
                    $gaji = 9000000;
                    break;
                default:
                    $gaji = 0;
            }

            // Tampilkan hasil
            echo "<h2>Hasil Input:</h2>";
            echo "Nama: <strong>$nama</strong><br>";
            echo "Tanggal Lahir: <strong>$tgl_lahir</strong><br>";
            echo "Umur: <strong>$umur tahun</strong><br>";
            echo "Pekerjaan: <strong>$pekerjaan</strong><br>";
            echo "Gaji: <strong>Rp " . number_format($gaji, 0, ',', '.') . "</strong><br><hr>";
        }
    ?>
</body>
</html>
