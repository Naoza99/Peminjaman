<?php 
    include '../lib/Session.php';
    Session::checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="js/bootstrap.min.js" text="text/javascript"></script> -->
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="Stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/themes/redmond/jquery-ui.css" />

    <link rel="stylesheet" href="css/sidebar-style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Peminjaman</title>
    <link rel="stylesheet" href="css/header-style.css">
</head>
<body>
    <?php 
        if (isset($_GET['action']) && $_GET['action'] == "logout") {
            Session::destroy();
        }
    ?>
    <ul class="header-ul">
        <li class ="header-li"><a href="/../index.php">Website</a></li>
        <li class ="header-li" style="float:right"><a href="?action=logout">Logout</a></li>
        <li class ="header-li" style="float:right"><span><?php echo Session::get('adminUser');?></li></span>
    </ul>
</body>
</html>