<?php include '../config/koneksi.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Data Bagian</title>
    <link rel="stylesheet" href="../aset/css/data_bagian.css">
    <link rel="stylesheet" href="../aset/css/navbar.css">
    <link rel="stylesheet" href="../aset/css/footer.css">
    <link rel="stylesheet" href="../aset/css/main.css">
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
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb tex-light">
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
          <label class="fw-bold mb-3" for="">Data Bagian</label>
        <button
            type="button"
            class="btn btn-success btn-sm float-end tambah"
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
          >
            <a href="tambah_bagian.php"><i class="bi bi-person-add">Tambah Bagian</i></a>
          </button>
        <br>
        <table id="example" class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th class="bg-light text-dark">Kode Bagian</th>
                    <th class="bg-light text-dark">Nama Bagian</th>
                    <th class="bg-light text-dark">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM bagian";
                    $query = mysqli_query($koneksi,$sql);
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>".$data['kode_bagian']."</td>";
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
                            <a class='dropdown-item fw-bold text-warning' href='ubah_bagian.php?id=".$data['kode_bagian']."'
                              ><i class='bi bi-pencil me-2'></i> EDIT</a
                            >
                          </li>
                          <li>
                            <a href='../controller/proses_hapus_bagian.php?id=".$data['kode_bagian']."' class='dropdown-item fw-bold text-danger' onclick=\"return confirm('Anda yakin ingin menghapus data bagian ".$data['kode_bagian']."?');\"><i class='bi bi-trash me-2'></i>DELETE</a>
                          </li>
                        </ul>
                      </div>"; 
                        echo "</td>";
                    }
                ?>
            </tbody>
        </table
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
        </div>
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