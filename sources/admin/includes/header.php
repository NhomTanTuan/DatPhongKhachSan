<?php session_start();
    if(!isset($_SESSION['username'])){
        header('location:../dangnhap.php');
    }
    if($_SESSION['quyen']==0){
        header('location:../ĐPKS.php');
    }
?>
<?php include('config/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản trị hệ thống</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
    <script src="../js/jquery.js"></script>
</head>

<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">QUẢN TRỊ HỆ THỐNG</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Xin chào:&nbsp;<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="edit_user.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>                        
                <li>
                    <a href="./doipass.php"><i class="fa fa-fw fa-cog"></i>Đổi mật khẩu</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../thoat.php"><i class="fa fa-fw fa-power-off"></i>Đăng xuất</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include('includes/sidebar.php') ?>
    <!-- /.navbar-collapse -->
</nav>
<div id="page-wrapper">
    <div class="container-fluid">
<!-- Page Heading -->        