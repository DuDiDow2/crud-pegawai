<?php session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
    exit();
}
$username=$_SESSION['username'];
?>
<nav class="navbar">
    <div class="navbar-header">
    <P>CRUD PEGAWAI</P>
    </div>
    <div id="navbar" class="navbar-menu">
        <ul class="navbar-menu d-flex align-items-center">
            <li>
                <a class="pegawai" href="/crudgajipegawai/view/data_pegawai.php">Data Pegawai<span>|</span></a>
            </li>
            <li>
                <a class="bagian" href="/crudgajipegawai/view/data_bagian.php">Data Bagian<span>|</span></a>
            </li>
            <li>
                <a class="user" href="/crudgajipegawai/view/data_user.php">Data User</a>
            </li>
            <li>
                <a href="../loginlogout/logout.php" class="btn btn-danger"><i class="bi bi-power">Logout</i></a>
            </li>
        </ul>
    </div>
</nav>