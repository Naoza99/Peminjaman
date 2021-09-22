<?php
    include "inc/header.php";
    include "inc/sidebar.php";
?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-style.css">

<body>
    <ul class="breadcrumb">
        <li class="breadcrumb-size-text"><a class="breadcrumb-item active" href="home.php">Dashboard</a><a class="breadcrumb-item active" href="CreateAlat.php">Alat</a><span class="breadcrumb-item active">Baru</span></li>
    </ul>
    <hr>

    <div class="page-header">
        <h1>Alat Baru</h1>
    </div>

    <div class="portlet">
        <h1>Form Data</h1>
        <br>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label>Nama Alat</label>
                    <input type="text" class="form-control" id="Alat" placeholder="Nama Alat" name="Alat">
                </div>
                <div class="col-md-6">
                    <label>Nama Alat Category</label>
                    <input type="text" class="form-control" placeholder="Nama Alat Category" name="AlatCategory">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" placeholder="Jumlah" name="Jumlah">
                </div>
                <div class="col-md-3">
                    <label>Satuan</label>
                    <input type="text" class="form-control" placeholder="Satuan" name="Satuan">
                </div>
                <div class="col-md-6">
                    <label>Tanggal masuk</label>
                    <input class="datepicker form-control" data-provide="datepicker" id="datepicker">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Lokasi Simpan</label>
                    <Select class="form-control">
                        <option value="Select Lokasi Simpan">Select Lokasi Simpan</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </Select>
                </div>
                <div class="col-md-6">
                    <label>Kondisi Alat</label>
                    <Select class="form-control">
                        <option value="Sekect Kondisi Alat">Sekect Kondisi Alat</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </Select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label>Image Upload</label>
                    <input type="file" class="form-control" id="customFile" />
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <button type="submit" class="btn btn-primary col-md-2">Submit</button>
            </div>
        </form>
        <br>
    </div>
    <div class="footer-style">
        <span>2021 &copy; by E-Peminjaman</span>
    </div>
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