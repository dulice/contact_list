<?php require_once "core/base.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo url(); ?>assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url(); ?>assets/vendor/feather-icons-web/feather.css">

    <style>
        .contact-image {
            width: 30px;
            height: 30px;
            object-fit: cover;
            object-position: center;
        }
        .active, .active:hover {
            background-color: #2774e5;
            color: white;
        }
        .active > .nav-link {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 col-md-3">
                <?php require_once "template/sidebar.php"; ?>                
            </div>
            <div class="col-12 col-md-9">
                