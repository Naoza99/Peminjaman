<?php
    include "inc/header.php";
    include "inc/sidebar.php";
?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-style.css">

<body>
    <div class="page-view">
        <ul class="breadcrumb">
            <li class="breadcrumb-size-text"><a class="breadcrumb-item active" href="home.php">Dashboard</a><a class="breadcrumb-item active" href="AllAlat.php">Alat</a><span class="breadcrumb-item active">Semua</span></li>
        </ul>
        <hr>

        <div class="page-header">
            <h1>Data Alat</h1>
        </div>

        <div class="portlet">
            <h1>List Data</h1>
            <br>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <label>Show</label>
                    <Select class="form-control">
                        <Option>A</Option>
                        <Option>A</Option>
                        <Option>A</Option>
                    </Select>
                </div>
                <div class="col-md-4 col-sm-6">
                    <label>Search :</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Alat Category</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Tanggal masuk</th>
                        <th scope="col">Lokasi Simpan</th>
                        <th scope="col">Kondisi Alat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Dummy Nama</td>
                        <td>Dummy</td>
                        <td>Dummy</td>
                        <td>Dummy</td>
                        <td>Dummy</td>
                        <td>Dummy</td>
                        <td>Dummy</td>
                        <td>Dummy</td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
    <!-- <div class="footer-style" style="margin-top: 271px;">
        <span>2021 &copy; by E-Peminjaman</span>
    </div> -->
</body>

<script type="text/javascript">
    $(document).ready(function(){
        // Initialize the datepicker
        $('.datepicker').datepicker({
            todayHighlight: true, // to highlight the today's date
            format: 'yyyy-mm-dd', // we format the date before we will submit it to the server side
            autoclose: true //we enable autoclose so that once we click the date it will automatically close the datepicker
        });     
    })
</script>

