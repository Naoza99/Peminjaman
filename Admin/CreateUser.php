<?php
    include "inc/header.php";
    include "inc/sidebar.php";
    include "../class/User.php";

    $User = new UserLogin();
?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/footer-style.css">

<body>
    <div class="page-view">
        <ul class="breadcrumb">
            <li class="breadcrumb-size-text">
                <a class="breadcrumb-item active" href="home.php">Dashboard</a>
                <a class="breadcrumb-item active" href="CreateUser.php">User</a>
                <span class="breadcrumb-item active">Create User</span>
            </li>
        </ul>
        <hr>
        <div class="page-header">
            <h1>Create User</h1>
        </div>

        <div class="portlet">
            <h1>Form Data</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama User</label>
                        <input type="text" class="form-control" id="Username" placeholder="Nama User" name="Username">
                    </div>
                    <div class="col-md-6">
                        <label>NIM/NIP</label>
                        <input type="text" class="form-control" placeholder="NIM/NIP" name="NIM">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="Password">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="Email">
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary col-md-2">Submit</button>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
                    $insertUser = $User->UserRegistration($_POST);
                }

                if (isset($insertUser)) {
            ?>
                    <span class="text-danger"><?php echo $insertUser;?></span>
            <?php
                 }
            ?>
            <br>
        </div>
    </div>
    <!-- <div class="footer-style">
        <span>2021 &copy; by E-Peminjaman</span>
    </div> -->
</body>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#sub-menu').on('click', 'li a', function(e) {
            alert($(this).text());                
        });
    });
</script>