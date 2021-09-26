<?php
    include "inc/header.php";
    include "../class/Laboratorium.php";

    $laboratorium = new Laboratorium();
?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-style.css">

<body>
    <div class="nav-side-menu" style="height: 1020px;">
        <div class="brand">Admin</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                        <a href="home.php">
                            <i class="fa fa-dashboard fa-lg"></i> Dashboard
                        </a>
                    </li>
                    <li  data-toggle="collapse" data-target="#Alat" class="collapsed">
                        <a href="#"><i class="fa fa-gift fa-lg"></i> Data Alat 
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <ul class="sub-menu collapse" id="Alat">
                        <li><a href="CreateAlat.php">Buat Baru</a></li>
                        <li><a href="AllAlat.php">Semua Alat</a></li>
                    </ul>
                    <li data-toggle="collapse" data-target="#Konfirmasi" class="collapsed">
                        <a href="#"><i class="fa fa-globe fa-lg"></i> Data Laboratorium <span class="arrow"></span></a>
                    </li>  
                    <ul class="sub-menu collapse" id="Konfirmasi">
                        <li><a href="CreateLaboratorium.php">Buat Baru</a></li>
                        <li><a href="AllAlat.php">Semua Alat</a></li>
                    </ul>
                    <li data-toggle="collapse" data-target="#Penjadwalan" class="collapsed">
                        <a href="#"><i class="fa fa-car fa-lg"></i> Penjadwalan <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="Penjadwalan">
                        <li>Alarmstatistik</li>
                        <li>Prozessfähigkeit</li>
                    </ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-user fa-lg"></i> Reporting
                        </a>
                    </li>
                    <li data-toggle="collapse" data-target="#Service" class="collapsed">
                        <a href="#"><i class="fa fa-car fa-lg"></i> Service <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="Service">
                        <li>Sensorkonfiguration</li>
                        <li>Betriebsarten</li>
                    </ul>
                    <li data-toggle="collapse" data-target="#ManageUser" class="collapsed">
                        <a href="#"><i class="fa fa-car fa-lg"></i> Manage User <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="ManageUser">
                        <li>Alarmstatistik</li>
                        <li>Prozessfähigkeit</li>
                    </ul>
                    <li data-toggle="collapse" data-target="#WebSettings" class="collapsed">
                        <a href="#"><i class="fa fa-car fa-lg"></i> Web Settings <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="WebSettings">
                        <li>Alarmstatistik</li>
                        <li>Prozessfähigkeit</li>
                    </ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-user fa-lg"></i> Log Out
                        </a>
                    </li>
                </ul>
        </div>
    </div>
    <div class="page-view">
        <ul class="breadcrumb">
            <li class="breadcrumb-size-text">
                <a class="breadcrumb-item active" href="home.php">Dashboard</a>
                <a class="breadcrumb-item active" href="CreateLaboratorium.php">Laboratorium</a>
                <span class="breadcrumb-item active">Baru</span>
            </li>
        </ul>
        <hr>
        <div class="page-header">
            <h1>Laboratorium Baru</h1>
        </div>

        <div class="portlet">
            <h1>Form Data</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama Laboratorium</label>
                        <input type="text" class="form-control" id="LaboratoriumName" placeholder="Nama Laboratorium" name="LaboratoriumName">
                    </div>
                    <div class="col-md-6">
                        <label>Telepon</label>
                        <input type="text" class="form-control" placeholder="Telepon" name="Telepon">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="Alamat">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="Email">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Profile</label>
                        <textarea class="form-control" name="Profile" id="" cols="40" rows="10"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Ketentuan</label>
                        <textarea class="form-control" name="Ketentuan" id="" cols="40" rows="10"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-2">Submit</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
                    $insertLab = $laboratorium->laboratoriumInsert($_POST);
                }

                if (isset($insertLab)) {
                    echo $insertLab;
                 }
            ?>
            <br>
        </div>
    </div>
    <div class="footer-style">
        <span>2021 &copy; by E-Peminjaman</span>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#sub-menu').on('click', 'li a', function(e) {
            alert($(this).text());                
        });
    });
</script>