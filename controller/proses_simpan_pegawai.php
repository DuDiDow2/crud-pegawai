<?php
    include '../config/koneksi.php';
    // cek apakah tombol daftar sudah diklik atau belum?
    if  (isset($_POST['simpan'])) {
        // ambil data dari formulir
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $golongan = $_POST['golongan'];
        $kode_bagian = $_POST['kode_bagian'];
        // buat query
        $sql = "INSERT INTO  pegawai(id_pegawai,nama_pegawai,alamat,no_telp,golongan, kode_bagian) VALUES ('$id_pegawai','$nama_pegawai', '$alamat', '$no_telp', '$golongan', '$kode_bagian')";
        $query = mysqli_query($koneksi, $sql);

        // apakah query simpan berhasil
        if ($query){
            // kalau berhasil
            echo "<script>
                    alert('Simpan data berhasil!');
                    document.location = '../view/data_pegawai.php';
                    </script>";
        } else {
            // kalau gagal
            echo "<script>
                    alert('Simpan data berhasil!');
                    document.location = '../view/data_pegawai.php';
                    </script>";
        }
    }   else {
        die("Akses Dilarang...");
    }
?>