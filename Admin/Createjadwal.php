<?php
    include "inc/header.php";
    include "inc/sidebar.php";
    include "../class/Laboratorium.php";

    $laboratorium = new Laboratorium();
?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-style.css">
<link type='text/css' rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css' />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>

<body>
    <div class="page-view">
        <ul class="breadcrumb">
            <li class="breadcrumb-size-text">
                <a class="breadcrumb-item active" href="home.php">Dashboard</a>
                <a class="breadcrumb-item active" href="CreateLaboratorium.php">Jadwal</a>
                <span class="breadcrumb-item active">Baru</span>
            </li>
        </ul>
        <hr>
        <div class="page-header">
            <h1>Jadwal Baru</h1>
        </div>

        <div class="portlet">
            <h1>Form Data</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <label>Nama Jadwal</label>
                        <input type="text" class="form-control" id="LaboratoriumName" placeholder="Nama Laboratorium" name="LaboratoriumName">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Laboratorium</label>
                        <select class="form-control">
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
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Waktu</label>
                        <input class="datepicker form-control" data-provide="datepicker" id="datepicker">
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div class="footer-style">
        <span>2021 &copy; by E-Peminjaman</span>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        // Initialize the datepicker
        $('.datepicker').datetimepicker({
            todayHighlight: true, // to highlight the today's date
            format: 'yyyy-mm-dd', // we format the date before we will submit it to the server side
            autoclose: true, //we enable autoclose so that once we click the date it will automatically close the datepicker
            showTimePicker: false, 
            showSecond:false,
            showMillisec:false,
            showMicrosec:false,
            showTimezone:false
        });     
    })
</script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#sub-menu').on('click', 'li a', function(e) {
            alert($(this).text());                
        });
    });
</script>