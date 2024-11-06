<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();

    if (!empty ($_SESSION[level])) {
        require 'config/koneksi.php';
        require'fungsi/pesan_kilat.php';

        include 'admin/template/header.php';
        if (!empty($GET['page'])) {
            include 'admin/module/'.$GET['page'].'/index.php';
        } else {
            include 'admin/template/home.php';
        }
        include 'admin/template/footer.php';
    } else {
        header('location:login.php');
    }
        }