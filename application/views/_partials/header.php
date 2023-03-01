<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>e-Schedule</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= site_url() ?>assets/images/itlogo.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">

    <style>
        body{
    margin-top:20px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}


.bg-sky.box-shadow {
    box-shadow: 0px 5px 0px 0px #00a2a7
}

.bg-orange.box-shadow {
    box-shadow: 0px 5px 0px 0px #af4305
}

.bg-green.box-shadow {
    box-shadow: 0px 5px 0px 0px #4ca520
}

.bg-yellow.box-shadow {
    box-shadow: 0px 5px 0px 0px #dcbf02
}

.bg-pink.box-shadow {
    box-shadow: 0px 5px 0px 0px #e82d8b
}

.bg-purple.box-shadow {
    box-shadow: 0px 5px 0px 0px #8343e8
}

.bg-lightred.box-shadow {
    box-shadow: 0px 5px 0px 0px #d84213
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

.padding-15px-lr {
    padding-left: 15px;
    padding-right: 15px;
}
.padding-5px-tb {
    padding-top: 5px;
    padding-bottom: 5px;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.border-radius-5 {
    border-radius: 5px;
}

.margin-10px-top {
    margin-top: 10px;
}
.font-size14 {
    font-size: 14px;
}

.text-light-gray {
    color: #d6d5d5;
}
.font-size13 {
    font-size: 13px;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
    </style>
</head>