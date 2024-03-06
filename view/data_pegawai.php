<?php include '../config/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Data Pegawai</title>
    <link rel="stylesheet" href="../aset/css/main.css">
    <link rel="stylesheet" href="../aset/css/navbar.css">
    <link rel="stylesheet" href="../aset/css/footer.css">
    <link rel="stylesheet" href="../aset/css/data_pegawai.css">
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <!--CSS DATA TABLES-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css"
    />
    <!-- Bootstrap css end -->
</head>
<body>
<?php include '../partials/navbar.php'?>
  <section class="main-content">
    <div class="container py-5">
    <?php if (isset($_GET['status'])) : ?>
                                        <p>
                                            <?php
                                            if ($_GET['status'] == 'berhasil-tambah') {
                                                echo  '<div class="alert alert-success" role="alert">Tambah data bagian berhasil!</div>';
                                            } else if ($_GET['status'] == 'gagal-tambah') {
                                                echo '<div class="alert alert-danger" role="alert">Penambahan data bagian gagal!</div>';
                                            } else if ($_GET['status'] == 'berhasil-edit') {
                                                echo '<div class="alert alert-success" role="alert">Edit data bagian berhasil!</div>';
                                            } else if ($_GET['status'] == 'gagal-edit') {
                                                echo '<div class="alert alert-danger" role="alert">Tambah data bagian gagal!</div>';
                                            } else if ($_GET['status'] == 'berhasil-hapus') {
                                                echo '<div class="alert alert-success" role="alert">Data bagian berhasil dihapus!</div>';
                                            }
                                            ?>
                                        </p>
                                    <?php endif; ?>
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-3 fs-6">
              <li class="breadcrumb-item">
                <P></P>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <label class="fw-bold mb-3" for="">Data Pegawai</label>
        <button
            type="button"
            class="btn btn-success btn-sm float-end tambah"
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
          >
            <a href="tambah_pegawai.php"><i class="bi bi-person-add">Tambah Pegawai</i></a>
        </button>
        <br>
        <table id="example" class="table table-bordered" style="width:100%">
        <thead class="theadcuy">
            <tr>
                <th>Id Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Golongan</th>
                <th>Bagian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="tbodycuy">
            <?php
                $sql = "SELECT * FROM pegawai,bagian WHERE pegawai.kode_bagian = bagian.kode_bagian";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$data['id_pegawai']."</td>";
                    echo "<td>".$data['nama_pegawai']."</td>";
                    echo "<td>".$data['alamat']."</td>";
                    echo "<td>".$data['no_telp']."</td>";
                    echo "<td>".$data['golongan']."</td>";
                    echo "<td>".$data['nama_bagian']."</td>";
                    echo "<td>";
                    echo "<div class='dropdown-center'>
                    <button
                      class='btn btn-primary dropdown-toggle'
                      type='button'
                      data-bs-toggle='dropdown'
                      aria-expanded='false'
                    >
                      OPTION
                    </button>
                    <ul class='dropdown-menu'>
                      <li>
                        <a class='dropdown-item fw-bold text-warning' href='ubah_pegawai.php?id=".$data['id_pegawai']."'
                          ><i class='bi bi-pencil me-2'></i> EDIT</a
                        >
                      </li>
                      <li>
                        <a href='../controller/proses_hapus_pegawai.php?id=".$data['id_pegawai']."' class='dropdown-item fw-bold text-danger' onclick=\"return confirm('Anda yakin ingin menghapus data pegawai ".$data['id_pegawai']."?');\"><i class='bi bi-trash me-2'></i>DELETE</a>
                      </li>
                    </ul>
                  </div>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </div>
  </section>
    <!--DATATABLES .JS-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
    <script>
      new DataTable('#example');
    </script>
    <?php include '../partials/footer.php'?>
</body>
</html>
