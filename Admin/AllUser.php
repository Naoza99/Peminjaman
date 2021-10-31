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
                <a class="breadcrumb-item active" href="AllUser.php">User</a>
                <span class="breadcrumb-item active">AllUser</span>
            </li>
        </ul>
        <hr>

        <div class="page-header">
            <h1>Daftar User</h1>
        </div>

        <div class="portlet">
            <h1>List User</h1>
            <br>
            
            <?php
                $getData = $User->getUserData();            
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">NIM/NIP</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($getData){
                            $i = 0;

                            while($result = $getData->fetch_assoc()){
                                $i++;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i;?></td>
                        <td><?php echo $result['Username'];?></td>
                        <td><?php echo $result['NIM'];?></td>
                        <td><?php echo $result['Password'];?></td>
                        <td><?php echo $result['Email'];?></td>
                        <td>
                            <div class="col-md-4">
                                <div class="row">
                                    <a href="EditUser.php?UserId=<?php echo $result['UserId'];?>" class="btn btn-primary col-md-12">Edit</a>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <a onclick="return confirm('Are you sure you want to delete?')" href="?delUser=<?php echo $result['UserId'];?>" class="btn btn-danger col-md-12">Delete</a>
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
                if(isset($_GET['delUser'])){
                    $id = $_GET['delUser'];
                    $delUser = $User->deleteUserById($id);
                }
            ?>
            <span class="text-danger">
                <?php if(isset($delUser)){
                    echo $delUser;
                }    
                ?>
            </span>
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

