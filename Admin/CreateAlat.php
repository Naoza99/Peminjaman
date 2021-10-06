<?php
    include "inc/header.php";
    include "inc/sidebar.php";
    include "../class/Alat.php";
    include "../class/Laboratorium.php";

    $alat = new Alat();
    $laboratorium = new Laboratorium();
?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-style.css">

<body>
    <div class="page-view">
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama Alat</label>
                        <input type="text" class="form-control" id="AlatName" placeholder="Nama Alat" name="AlatName">
                    </div>
                    <div class="col-md-6">
                        <label>Nama Alat Category</label>
                        <Select class="form-control">
                            <option value="Select Alat Category">Select Alat Category</option>
                            <?php
                                $getAlatCategory = $alat->ShowAllAlatCategory();
                                if($getAlatCategory){
                                    $i = 0;
                                    while($result = $getAlatCategory->fetch_assoc())
                                    {
                                        $i++;
                            ?>
                            <option value="<?php echo $result ['AlatCategoryId']?>" name="AlatCategoryId"><?php echo $result ['Name']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </Select>
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
                        <Select class="form-control">
                            <option value="Select Kondisi Alat">Select Satuan</option>
                            <?php
                                $getSatuan = $alat->ShowAllSatuan();
                                if($getSatuan){
                                    $i = 0;
                                    while($result = $getSatuan->fetch_assoc())
                                    {
                                        $i++;
                            ?>
                            <option value="<?php echo $result ['SatuanId']?>" name="SatuanId"><?php echo $result ['Name']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </Select>
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
                            <?php
                                $getLokasiSimpan = $laboratorium->ShowAllLab();
                                if($getLokasiSimpan){
                                    $i = 0;
                                    while($result = $getLokasiSimpan->fetch_assoc())
                                    {
                                        $i++;
                            ?>
                            <option value="<?php echo $result ['LaboratoriumId']?>" name="LaboratoriumId"><?php echo $result ['Name']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </Select>
                    </div>
                    <div class="col-md-6">
                        <label>Kondisi Alat</label>
                        <Select class="form-control">
                            <option value="Select Kondisi Alat">Select Kondisi Alat</option>
                            <?php
                                $getKondisiAlat = $alat->ShowKondisiAlat();
                                if($getKondisiAlat){
                                    $i = 0;
                                    while($result = $getKondisiAlat->fetch_assoc())
                                    {
                                        $i++;
                            ?>
                            <option value="<?php echo $result ['KondisiAlatId']?>" name="KondisiAlatId"><?php echo $result ['Name']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </Select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Image Upload</label>
                        <input type="file" class="form-control" id="customFile" name="image"/>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <button type="submit" name="submit" class="btn btn-primary col-md-2">Submit</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
                    $insertAlat = $alat->AlatInsert($_POST, $_FILES);
                }

                if (isset($insertAlat)) {
                    echo $insertAlat;
                 }
            ?>
            <br>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

<?php
    include "inc/footer.php";
?>

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