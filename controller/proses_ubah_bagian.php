<?php 
    include '../config/koneksi.php';
    if (isset($_POST['ubah_bagian'])) {
        $kode_bagian = $_POST['kode_bagian'];
        $nama_bagian = $_POST['nama_bagian'];

        $query = mysqli_query($koneksi, "UPDATE bagian SET kode_bagian = '$kode_bagian', nama_bagian = '$nama_bagian' WHERE kode_bagian = '$kode_bagian'");

        if ($query){
            // kalau berhasil
            echo "<script>
                    alert('Ubah data berhasil!');
                    document.location = '../view/data_bagian.php';
                    </script>";
        } else {
            // kalau gagal
            echo "<script>
                    alert('Ubah data berhasil!');
                    document.location = '../view/data_pegawai.php';
                    </script>";
        }
    }
?>