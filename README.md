# Lab7Web

Nama: Muhamad Rizki Wahyu Saputra

NIM: 312410534

Kelas: TI.24.A5

Mata Kuliah: Pemograman Web 1

## Langkah-langkah Praktikum 7: PHP Dasar

1. Instal aplikasi XAMPP kemudian jalankan/start Apache dan MySQL.
<img width="1003" height="640" alt="Cuplikan layar 2025-11-12 102629" src="https://github.com/user-attachments/assets/c72de333-948b-46a9-aa37-1622e705cdc0" />

2. Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)
<img width="1037" height="482" alt="Cuplikan layar 2025-11-12 232409" src="https://github.com/user-attachments/assets/8b15e274-f022-420b-a1e7-ef01951ab388" />

3. Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/
<img width="829" height="461" alt="Cuplikan layar 2025-11-12 102753" src="https://github.com/user-attachments/assets/f776df7e-4e15-4bac-8109-02886ce7a8a4" />

4. Buka aplikasi Visual Studio dan buat file baru di folder lab7_php_dasar dengan nama php-dasar. Kemudian masukan kode tersebut.
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>
<body>
  <h1>Belajar PHP Dasar</h1>
  <?php
    echo "Hello World";
  ?>
</body>
</html>
```

5. Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php
<img width="835" height="418" alt="Cuplikan layar 2025-11-12 102850" src="https://github.com/user-attachments/assets/b0f89c31-e02b-4e00-be18-bb547e5f6682" />

6. Menambahkan variable pada program.
```php
<?php
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```
<img width="824" height="439" alt="Cuplikan layar 2025-11-12 102942" src="https://github.com/user-attachments/assets/5a907add-0ad8-46ff-9bde-e3cdd0d624cb" />


7. Menambahkan Predefine Variable $_GET
```php
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```
Untuk mengaksesnya gunakan URL:
http://localhost/lab7_php_dasar/latihan2.php?nama=Rizki
<img width="836" height="351" alt="Cuplikan layar 2025-11-12 103846" src="https://github.com/user-attachments/assets/099be5ac-42b8-4b2c-adcf-4050d31bac91" />


8. Membuat Form Input.
```php
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
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>
</html>
```
9. Ketik nama yang di inginkan seperti Rizki.
<img width="521" height="324" alt="Cuplikan layar 2025-11-13 101745" src="https://github.com/user-attachments/assets/128fb022-1b6d-42ad-b9f4-51e0d6c86995" />


10. Menambahkan Variabel Operator.
```php
<h2>Operator</h2>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>

```
<img width="235" height="85" alt="image" src="https://github.com/user-attachments/assets/2af2802b-c63d-4434-a47b-5d3db72c7cac" />


11. Menambahkan Variabel Kondisi IF.
```php
<h2>Kondisi IF</h2>
    <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
        echo "Minggu";
        } elseif ($nama_hari == "Monday") {
        echo "Senin";
        } else {
        echo "Selasa";
        }
    ?>
```
<img width="188" height="71" alt="image" src="https://github.com/user-attachments/assets/8af7ae73-26dd-459f-bb66-e192771c1394" />

12. Menambahkan Variabel Kondisi Switch.
```php
<h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    ?>
```
<img width="318" height="131" alt="Cuplikan layar 2025-11-13 111507" src="https://github.com/user-attachments/assets/c022897e-8c14-49cc-92dc-322733e2ad4b" />

13. Menambahkan Variabel Perulangan for.
```php
<h2>Perulangan For</h2>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
```
<img width="347" height="703" alt="Cuplikan layar 2025-11-13 111521" src="https://github.com/user-attachments/assets/0e4e9241-d3ce-48e7-b831-e3f8521e43c0" />

14. Menambahkan Variabel Perulangan while.
```php
<h2>Perulangan While</h2>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>
```
<img width="344" height="400" alt="Cuplikan layar 2025-11-13 111533" src="https://github.com/user-attachments/assets/dd9d572d-d70a-4028-9b65-0b44166a4fed" />


15. Menambahkan Variabel Perulangan dowhile.
```php
<h2>Perulangan Dowhile</h2>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>
```
<img width="400" height="392" alt="Cuplikan layar 2025-11-13 111542" src="https://github.com/user-attachments/assets/18948688-570a-49c5-9aa6-729a47fd7cdf" />

## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.
