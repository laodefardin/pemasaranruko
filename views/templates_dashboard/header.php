<?php
session_start();

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

    include "app/config/koneksi.php";

$query = $koneksi->query("SELECT * FROM tb_konfigurasi");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info harga Jual dan Sewa Ruko | <?= $data['nama_perusahaan'] ?></title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/dist/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="icon" href="assets/icon.png" type="image/x-icon" />


    <!-- Google Font: Source Sans Pro -->

    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #2951a3;
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgb(228 228 228)
        }

        .description-block {
            display: block;
            margin: 0px 0;
            text-align: center;
        }

        .description-block>.description-header {
            font-size: 13px;
            font-weight: 600;
            margin: 0;
            padding: 0;
        }

        .widget-user .widget-user-username {
            font-size: 25px;
            font-weight: 300;
            margin-bottom: 0;
            margin-top: 150px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
        }

        .widget-user .widget-user-header {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
            height: 135px;
            padding: 0rem;
            text-align: center;
        }

        .summary .title {
            /* font-size: 32px; */
            letter-spacing: -0.9px;
            color: #161616;
            margin: 8px 0;
        }

        .summary .category {
            font-size: 12px;
            font-weight: 600;
            color: #3943e8;
            text-transform: uppercase;
        }

        .product .detail .summary .address {
            margin-bottom: 20px;
        }

        .summary .address span {
            line-height: 1.57;
            color: #666666;
            display: block;
        }

        .summary .meta {
            position: relative;
        }

        .summary .meta .price {
            margin-right: 32px;
        }

        .summary .meta>div,
        .summary .meta span {
            display: inline-block;
            vertical-align: middle;
        }

        .summary .meta .price .total {
            background-color: #2951a3;
            color: #fff;
            padding: 8px 16px;
        }

        .summary .meta .price .per-month {
            color: #3943e8;
            padding: 8px 24px;
        }


        .summary .meta .spec>div {
            display: inline-block;
            font-size: 0;
        }

        .summary .meta .spec .icon {
            display: inline-block;
            width: 36px;
            height: 36px;
            margin-right: 12px;
        }

        .summary .meta .spec span {
            display: inline-block;
            font-size: 16px;
            line-height: 36px;
            vertical-align: middle;
        }

        .summary .meta .spec>div+div {
            margin-left: 16px;
        }

        .product .detail .summary .meta .spec>div {
            display: inline-block;
            font-size: 0;
        }

        /* * {
    outline: none;
    box-sizing: border-box;
    font-size: 14px;
    color: #171717;
    margin: 0;
    padding: 0;
} */
        .summary .meta .spec .icon-area {
            background: transparent url(./assets/image/sistem/area.svg) no-repeat center;
            background-size: cover;
        }

        .summary .meta .spec .icon-bedroom {
            background: transparent url(./assets/image/sistem/bedroom.svg) no-repeat center;
            background-size: cover;
        }

        .summary .meta .spec .icon-bathroom {
            background: transparent url(./assets/image/sistem/bathroom.svg) no-repeat center;
            background-size: cover;
        }

        .summary .meta .spec .icon-garage {
            background: transparent url(./assets/image/sistem/garage.svg) no-repeat center;
            background-size: cover;
        }

        .info .property-info {
            border-radius: 8px;
            background-color: #e8e8e8;
            margin-top: 24px;
            padding: 28px 25px;
            position: relative;
        }

        .info>div {
            margin-bottom: 32px;
            /* padding-top: 32px; */
        }

        .info .property-info>.row>.col-6:first-child {
            padding-right: 28px;
        }

        /* .no-padding [class*='col-'] {
    padding: 0;
} */
        /* [class*='col-'] {
    float: left;
    min-height: 1px;
    padding: 0 15px;
} */
        .col-6 {
            width: 50%;
        }

        .info .property-info .item .type {
            font-weight: 600;
        }

        /* .info .property-info .item .value {
    color: #666666;
} */
        .info .property-info .item+.item {
            margin-top: 8px;
        }

        .info .property-info>.row>.col-6:last-child {
            padding-left: 28px;
        }

        .info .property-info:before {
            content: '';
            position: absolute;
            width: 1px;
            top: 28px;
            bottom: 28px;
            left: 50%;
            background: #dbdbdb;
        }

        .content-wrapper {
            background: #ffffff;
        }



        .card {
            box-shadow: 0 0 1px rgb(0 0 0 / 100%), 0 0 0px rgba(0, 0, 0, .2);
        }


        /* .news-content {
    max-width: 726px;
    margin: 80px auto 0;
} */
        .news-content .news-back {
            font-weight: 600;
        }

        .news-content .date {
            display: block;
            font-weight: 600;
            color: #666666;
        }

        .news-content img {
            display: block;
            width: 100%;
            min-height: 100px;
            background: #ccc;
            margin: 16px 0;
        }

        .news-content p {
            line-height: 1.57;
        }

        .news-content .news-share {
            padding: 14px 32px;
            border-radius: 3px;
            border: solid 1px #eaeaea;
            width: 200px;
            margin: 66px auto;
        }

        .news-header {
            height: 250px;
            background: rgba(102, 102, 102, 0.66) url(./assets/image/sistem/news-header.jpg) no-repeat;
            background-size: cover;
        }

        .news-header h1 {
            margin: 0;
            line-height: 250px;
            text-align: center;
            color: #fff;
            font-size: 38px;
            letter-spacing: -0.9px;
        }

        .news-list {
            padding: 50px 0 0;
        }

        .container {
            width: 100%;
            max-width: 1168px;
            position: relative;
            margin: 0 auto;
        }

        .news-list .list-header {
            position: relative;
            /* margin-bottom: 50px; */
        }

        .news-list .list-header h2 {
            font-size: 28px;
        }

        .news-list .list-header .list-search {
            position: absolute;
            top: 0;
            right: 0;
        }

        .news-list .list-header .list-search input {
            width: 442px;
            border-radius: 3px;
            background-color: #ffffff;
            border: solid 1px #e8e8e8;
        }

        .list-header {
            color: #363738;
        }

        input[type=text],
        input[type=email],
        input[type=password] {
            background: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            line-height: 18px;
            letter-spacing: -0.2px;
            padding: 10px 8px;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-progress-appearance: none;
            appearance: none;
            resize: none;
        }

        .button.filled {
            color: #fff;
            background: #3943e8;
            border: 1px solid #3943e8;
        }

        .button {
            display: inline-block;
            font-weight: 600;
            color: #3943e8;
            border-radius: 3px;
            margin: 0;
            padding: 8px 22px;
            cursor: pointer;
            text-align: center;
        }

        .news-list .list-wrapper {
            list-style: none;
        }

        .news-list .list-wrapper .list-item {
            float: left;
            width: 568px;
            background: #fff;
            border: solid 1px #e8e8e8;
            border-radius: 3px;
            overflow: hidden;
            margin: 12px 0;
        }

        .news-list .list-wrapper .list-item .thumbnail {
            width: 165px;
            height: 145px;
            float: left;
            background: #ccc;
            overflow: hidden;
        }

        .news-list .list-wrapper .list-item .thumbnail img {
            width: 100%;
        }

        img {
            border-style: none;
        }

        .news-list .list-wrapper .list-item .description {
            width: 382px;
            float: left;
            height: 100%;
            padding: 20px;
        }

        .news-list .list-wrapper .list-item .description .title {
            display: block;
            /* font-family: Merriweather; */
            font-size: 19px;
            letter-spacing: -0.3px;
            color: #161616;
        }

        .news-list .list-wrapper .list-item .description .date {
            font-size: 10px;
            font-weight: 600;
            color: #666;
            text-transform: uppercase;
            margin: 8px 0;
            display: block;
        }

        .news-list .list-wrapper .list-item .description .excerpt {
            font-size: 13px;
            line-height: 1.38;
            color: #666;
        }

        .news-list .list-pagination {
            background: #fff;
            padding: 50px 0;
        }

        .pagination {
            text-align: center;
        }

        .pagination ul {
            display: inline-block;
            vertical-align: middle;
            list-style: none;
            margin-right: 4px;
        }

        .pagination ul li {
            display: inline-block;
        }

        .pagination ul li a.current {
            font-weight: 600;
            background: #f4f5f9;
        }

        .pagination ul li a {
            display: block;
            width: 32px;
            line-height: 1;
            padding: 8px 0;
            border: 1px solid #e8e8e8;
            background: #fff;
            color: #161616;
        }

        .pagination a {
            display: inline-block;
            vertical-align: middle;
        }

        .pagination>a {
            width: 32px;
            height: 32px;
            position: relative;
            border: 1px solid #e8e8e8;
            background: #fff;
        }

        .pagination a {
            display: inline-block;
            vertical-align: middle;
        }

        .list-pagination li.active a {
            background-color: #001f3f;
            border-color: #001f3f;
            color: #fff;
        }

        .list-pagination li:not(.active) a {
            background-color: #f0f0f0;
            border-color: #ccc;
            color: #333;
        }

        .news-related {
            background-color: #f4f5f9;
            padding: 55px 0;
        }

        .news-related h2 {
            font-size: 22px;
            margin-bottom: 24px;
        }

        .news-list .list-wrapper {
            list-style: none;
        }

        .footer .link {
            /* background-color: #161616; */
            padding: 34px 0;
        }

        .footer .link-logo {
            display: inline-block;
            margin: -9px 0 0;
        }

        .footer .link-logo a {
            display: inline-block;
        }

        .footer .link-logo img {
            width: 117px;
        }

        img {
            border-style: none;
        }

        .footer .link-menu,
        .footer .link-social {
            float: right;
        }

        .footer .link-menu ul {
            list-style: none;
            font-size: 0;
        }

        .footer .link-menu ul li {
            display: inline-block;
            line-height: 24px;
        }

        .footer .link-menu ul li+li {
            margin-left: 16px;
        }

        .footer .link-social {
            font-size: 0;
            margin-left: 40px;
        }

        .footer .link-social a {
            display: inline-block;
            width: 24px;
            height: 24px;
        }

        .footer .copyright {
            background-color: #011121;
            /* box-shadow: inset 0 1px 0 0 #373737; */
            padding: 15px 0;
        }

        .footer .copyright-text {
            display: inline-block;
            font-size: 13px;
            color: #898989;
            line-height: 22px;
        }

        .footer .copyright-link {
            float: right;
        }

        .footer .copyright-link ul {
            font-size: 0;
            list-style: none;
        }

        .footer .copyright-link ul li {
            display: inline-block;
        }

        .footer .copyright-link ul li a {
            font-size: 14px;
            line-height: 1.57;
            color: #b5b5b5;
        }

        element.style {}

        .footer .link-menu ul li+li {
            margin-left: 16px;
        }

        .footer .link-menu ul li {
            display: inline-block;
            line-height: 24px;
        }

        .list-box {
            height: 144px;
            float: left;
            width: 50%;
            overflow: hidden;
        }

        @media (max-width: 48em) {
            .list-box {
                width: 100%;
            }
        }

        @media (max-width: 36em) {
            .list-box {
                height: auto;
            }
        }

        .list-box>div {
            float: left;
        }

        @media (max-width: 36em) {
            .list-box>div {
                float: none;
            }
        }

        .list-box .thumbnail {
            width: 167px;
            height: 144px;
            background: #ccc;
            vertical-align: top;
        }

        .list-box>div {
            float: left;
        }

        .list-box .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        img {
            border-style: none;
        }

        .list-box .description {
            width: calc(100% - 167px);
            padding: 15px;
        }

        .list-box .description .title {
            display: block;
            /* font-family: 'Merriweather'; */
            font-size: 16px;
            letter-spacing: -0.3px;
            line-height: 20px;
            color: #161616;
        }

        .list-box .description .date {
            display: inline-block;
            font-size: 10px;
            font-weight: 600;
            line-height: 14px;
            color: #666666;
            text-transform: uppercase;
            margin: 7px 0 10px;
        }

        .list-box .description .excerpt {
            font-size: 13px;
            line-height: 1.38;
            color: #666666;
            white-space: normal;
        }

        .list-more {
            text-align: center;
            padding: 14px 0;
        }

        .list-more .button {
            color: #3943e8;
            margin-top: 1rem;
        }

        /* .row > div ul {
    box-shadow: 2px 2px 8px 0 rgba(0, 0, 0, 0.05);
    border: solid 1px #e8e8e8;
    border-radius: 3px;
    list-style: none;
} */
    </style>
</head>

<body class="layout-top-nav text-sm layout-navbar-fixed">
    <div class="wrapper bg-white">