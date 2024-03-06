<?php include "../config/koneksi.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Data User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="../aset/css/data_user.css"/>
    <link rel="stylesheet" href="../aset/css/navbar.css"/>
    <link rel="stylesheet" href="../aset/css/footer.css"/>
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    />
</head>

<body>
<?php include "../partials/navbar.php";?>
<div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb pt-3 fs-6">
               <li class="breadcrumb-item">
                  <P></P>
               </li>
                 <li class="breadcrumb-item active" aria-current="page">
               </li>
              </ol>
            </nav>

  <div class="row">
  <div class="col">

  <div class="page-content page-container" id="page-content">
      <div class="padding">
        <div class="row container d-flex justify-content-center">
          <div class="col-xl-6 col-md-12">
              <div class="card-block">
                  <h3 class="m-b-20 p-b-5 b-b-default f-w-600 text-center">DATA USER</h3>
                  <div class="row b-b-default">
                      <?php $sql_user= "SELECT * FROM users WHERE username='$username'";
                       $query_user=mysqli_query($koneksi,$sql_user);
                       while($data_user=mysqli_fetch_array($query_user)){
                         echo "<p>ID :</p>";
                         echo "<h6 class='text-muted f-w-400'>".$data_user['id']."</h6>";
                        }
                       ?>
                  </div>
                  <br>
                  <div class="row b-b-default">
                  <?php $sql_user= "SELECT * FROM users WHERE username='$username'";
                       $query_user=mysqli_query($koneksi,$sql_user);
                       while($data_user=mysqli_fetch_array($query_user)){
                         echo "<p>NAME :</p>";
                         echo "<h6 class='text-muted f-w-400'>".$data_user['name']."</h6>";
                        }
                       ?>
                  </div>
                  <br>
                  <div class="row b-b-default">
                  <?php $sql_user= "SELECT * FROM users WHERE username='$username'";
                       $query_user=mysqli_query($koneksi,$sql_user);
                       while($data_user=mysqli_fetch_array($query_user)){
                         echo "<p>USERNAME :</p>";
                         echo "<h6 class='text-muted f-w-400'>".$data_user['username']."</h6>";
                        }
                       ?>
                  </div>
                  <br>
                  <div class="row b-b-default">
                  <?php $sql_user= "SELECT * FROM users WHERE username='$username'";
                       $query_user=mysqli_query($koneksi,$sql_user);
                       while($data_user=mysqli_fetch_array($query_user)){
                         echo "<p>EMAIL :</p>";
                         echo "<h6 class='text-muted f-w-400'>".$data_user['email']."</h6>";
                        }
                       ?>
                  </div>
                  <br>
                  <div class="row b-b-default">
                  <?php $sql_user= "SELECT * FROM users WHERE username='$username'";
                       $query_user=mysqli_query($koneksi,$sql_user);
                       while($data_user=mysqli_fetch_array($query_user)){
                         echo "<p>PASSWORD :</p>";
                         echo "<h6 class='text-muted f-w-400'>".$data_user['password']."</h6>";
                        }
                       ?>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>


<?php include "../partials/footer.php";?>
</body>
</html>