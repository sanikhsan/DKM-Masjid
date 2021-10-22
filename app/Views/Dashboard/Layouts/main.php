<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <?php $uri = service('uri'); ?>
        <?php $title = $uri->getSegment(1); ?>
        <?php $page = $uri->getSegment(2); ?>
        <title><?php { echo ucfirst($title); }?> | <?php { echo ucfirst($page); } ?></title>

        <!-- sweetalert2 -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

        <!-- Styles -->
        <script src="https://cdn.tiny.cloud/1/stgv6t39hhxlo3krxxcf1ew5bbgsw7q2wtlknfcmp454wb7c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/font-awesome/css/all.min.css')?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/perfectscroll/perfect-scrollbar.css')?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/apexcharts/apexcharts.css')?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/plugins/DataTables/datatables.min.css')?>" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?= base_url('Admin/assets/css/main.min.css')?>" rel="stylesheet">
        <link href="<?= base_url('Admin/assets/css/custom.css')?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- main -->
        <!-- SweetAlert -->
        <?= $this->include('Dashboard/Layouts/sweetalert'); ?>

        <?= $this->renderSection('content') ?>

        <!-- Javascripts -->
        <script src="<?= base_url('Admin/assets/plugins/jquery/jquery-3.4.1.min.js')?>"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="<?= base_url('Admin/assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="<?= base_url('Admin/assets/plugins/perfectscroll/perfect-scrollbar.min.js')?>"></script>
        <script src="<?= base_url('Admin/assets/plugins/apexcharts/apexcharts.min.js')?>"></script>
        <script src="<?= base_url('Admin/assets/js/main.min.js')?>"></script>
        <script src="<?= base_url('Admin/assets/js/pages/dashboard.js')?>"></script>
        <script src="<?= base_url('Admin/assets/plugins/DataTables/datatables.min.js')?>"></script>
        <script src="<?= base_url('Admin/assets/js/pages/datatables.js')?>"></script>
    </body>
</html>