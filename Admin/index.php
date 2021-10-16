<?php
    include '../class/Admin.php';
?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
    $al = new AdminLogin();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $adminUser = $_POST['adminUser'];
        $adminPass = $_POST['adminPass'];

        $login = $al->adminLogin($adminUser,$adminPass);
    }
?>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="username" name="adminUser"/>
                <input type="password" placeholder="password" name="adminPass"/>
                <button class="btn-login-admin" value="Log In">login</button>
                <span class="text-danger"><?php if(isset($login)){echo $login;}?></span>
            </form>
        </div>
    </div>
</body>