<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.html");
}
include "koneksi.php";

$query = "SELECT m.*, p.nama namaProdi FROM mahasiswa m join prodi p ON m.id = p.id";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>
<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Data Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>No hp</th>
                                        <th>Email</th>
                                        <th>Prodi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $d["NIM"] ?></td>
                                            <td><?= $d["Nama"] ?></td>
                                            <td><?= $d["Tanggal_Lahir"] ?></td>
                                            <td><?= $d["No_hp"] ?></td>
                                            <td><?= $d["email"] ?></td>
                                            <td><?= $d["namaProdi"] ?></td>
                                            <td><a class="btn btn-danger" href="deletemahasiswa.php?nim=<?= $d['NIM']; ?>"
                                                    onclick="return confirm('Yakin Ingin hapus?')">Delete</a>
                                                <a class="btn btn-warning" href="editmahasiswa.php?nim=<?= $d['NIM']; ?>">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<?php include "template/footer.php"; ?>