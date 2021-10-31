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

<?php
    if(!isset($_GET['AlatId']) || $_GET['AlatId'] == NULL){
        echo "<script>window.location = 'AllAlat.php'; </script>";
    }
    else{
        $id = $_GET['AlatId'];
    }
?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $UpdateAlat = $alat->UpdateAlatById($_POST, $_FILES, $id);
    }
?>

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
            <?php 
                $getAlat = $alat->ShowAlatById($id);
                if($getAlat){
                    $i = 0;
                    while($value = $getAlat->fetch_assoc()){
                        $i++;
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama Alat</label>
                        <input type="text" class="form-control" id="AlatName" placeholder="Nama Alat" name="AlatName" value="<?php echo $value['AlatName'];?>">
                    </div>
                    <div class="col-md-6">
                        <label>Nama Alat Category</label>
                        <Select class="form-control" name="AlatCategoryId">
                            <option value="Select Alat Category">Select Alat Category</option>
                            <?php
                                $getAlatCategory = $alat->ShowAllAlatCategory();
                                if($getAlatCategory){
                                    $i = 0;
                                    while($result = $getAlatCategory->fetch_assoc())
                                    {
                                        $i++;
                                        if($value['AlatCategoryId'] == $result['AlatCategoryId']){
                            ?>
                            <option selected="selected" 
                            <?php 
                                        }
                            ?> value="<?php echo $result ['AlatCategoryId'];?>"><?php echo $result ['AlatCategoryName'];?>
                            </option>
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
                        <input type="text" class="form-control" placeholder="Jumlah" name="Jumlah" value="<?php echo $value['Jumlah'];?>">
                    </div>
                    <div class="col-md-3">
                        <label>Satuan</label>
                        <Select class="form-control" name="SatuanId">
                            <option value="Select Kondisi Alat">Select Satuan</option>
                            <?php
                                $getSatuan = $alat->ShowAllSatuan();
                                if($getSatuan){
                                    $i = 0;
                                    while($result = $getSatuan->fetch_assoc())
                                    {
                                        $i++;
                                        if($value['SatuanId'] == $result['SatuanId']){
                            ?>
                            <option selected="selected" <?php } ?> value="<?php echo $result ['SatuanId']?>" name="SatuanId"><?php echo $result ['SatuanName']?></option>
                            <?php
                                    }
                                }
                            ?>
                        </Select>
                    </div>
                    <div class="col-md-6">
                        <label>Tanggal masuk</label>
                        <input class="datepicker form-control" data-provide="datepicker" id="datepicker" name="datepicker" disabled value="<?php echo $value['TanggalMasuk'];?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Lokasi Simpan</label>
                        <Select class="form-control" name="LaboratoriumId">
                            <option value="Select Lokasi Simpan">Select Lokasi Simpan</option>
                            <?php
                                $getLokasiSimpan = $laboratorium->ShowAllLab();
                                if($getLokasiSimpan){
                                    $i = 0;
                                    while($result = $getLokasiSimpan->fetch_assoc())
                                    {
                                        $i++;
                                        if($value['LokasiSimpanId'] == $result['LaboratoriumId']){
                            ?>
                            <option selected="selected" <?php }?> value="<?php echo $result ['LaboratoriumId']?>" name="LaboratoriumId"><?php echo $result ['LaboratoriumName']?></option>
                            <?php
                                        
                                    }
                                }
                            ?>
                        </Select>
                    </div>
                    <div class="col-md-6">
                        <label>Kondisi Alat</label>
                        <Select class="form-control" name="KondisiAlatId">
                            <option value="Select Kondisi Alat">Select Kondisi Alat</option>
                            <?php
                                $getKondisiAlat = $alat->ShowKondisiAlat();
                                if($getKondisiAlat){
                                    $i = 0;
                                    while($result = $getKondisiAlat->fetch_assoc())
                                    {
                                        $i++;
                                        if($value['KondisiAlatId'] == $result['KondisiAlatId']){
                            ?>
                            <option selected="selected" <?php }?> value="<?php echo $result ['KondisiAlatId'];?>" name="KondisiAlatId"><?php echo $result ['Name']?></option>
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
                        <br>
                        <img src="<?php echo $value['Image'];?>" height="500px;" width="500px;">
                        <br>
                        <br>
                        <input type="file" class="form-control" id="customFile" name="image"/>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-8">Update</button>
                    </div>
                    <div class="col-md-2">
                        <a href="AllUser.php" class="btn btn-danger col-md-6">Cancel</a>
                    </div>
                </div>
            </form>
            <?php
                    }
                }
            ?>
            <br>
            <span>
                <?php
                    if (isset($UpdateAlat)) {
                        echo $UpdateAlat;
                    }
                ?>
            </span>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

<!-- <?php
    include "inc/footer.php";
?> -->

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