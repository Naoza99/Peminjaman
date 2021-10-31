<?php
    include "inc/header.php";
    include "inc/sidebar.php";

    include "../class/Alat.php";

    $Alat = new Alat();
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
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
                    <?php
                        $getAlat = $Alat->ShowAlat();

                        if($getAlat){
                            $i = 0;

                            while($result = $getAlat->fetch_assoc()){
                                $i++;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i;?></td>
                        <td><?php echo $result['AlatName'];?></td>
                        <td><?php echo $result['AlatCategoryName'];?></td>
                        <td><?php echo $result['Jumlah'];?></td>
                        <td><?php echo $result['SatuanName'];?></td>
                        <td><?php echo $result['TanggalMasuk'];?></td>
                        <td><?php echo $result['LaboratoriumName'];?></td>
                        <td><?php echo $result['Name'];?></td>
                        <td>
                            <div class="col-md-4">
                                <div class="row">
                                    <a href="EditAlat.php?AlatId=<?php echo $result['AlatId'];?>" class="btn btn-primary col-md-12">Edit</a>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <a onclick="return confirm('Are you sure you want to delete?')" href="?delAlat=<?php echo $result['AlatId'];?>" class="btn btn-danger col-md-12">Delete</a>
                                </div> 
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
            <?php
                if(isset($_GET['delAlat'])){
                    $id = $_GET['delAlat'];
                    $delAlat = $Alat->delAlatById($id);
                }
            ?>
            <span class="text-danger">
                <?php if(isset($delAlat)){
                    echo $delAlat;
                }    
                ?>
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

