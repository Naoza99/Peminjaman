<div class="nav-side-menu">
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
                <li data-toggle="collapse" data-target="#Laboratorium" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Data Laboratorium <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="Laboratorium">
                    <li><a href="CreateLaboratorium.php">Buat Baru</a></li>
                    <li><a href="AllAlat.php">Semua Alat</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#Penjadwalan" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Penjadwalan <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="Penjadwalan">
                    <li><a href="Createjadwal.php">Create Jadwal</a></li>
                    <li>Lihat Jadwal</li>
                </ul>
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-lg"></i> Reporting
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#Konfirmasi" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Konfirmasi <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="Konfirmasi">
                    <li><a href="AllPeminjam.php">Peminjaman</a></li>
                    <li><a href="AllPengembalian.php">Pengembalian</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#ManageUser" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Manage User <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="ManageUser">
                    <li><a href="CreateUser.php">Create User</a></li>
                    <li><a href="AllUser.php">Semua User</a></li>
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