<?php
    @$halaman = $_GET['halaman'];
    if($halaman == "departemen"){
        //
        //echo "Tampil halaman Modul departemen";
        include "modul/departemen/departemen.php";
    }
    elseif($halaman == "pengirim_surat"){

        include "modul/pengirim_surat/pengirim_surat.php";
        //
        //echo "Tampil Halaman Modul Pengirim Surat";
    }elseif($halaman == "arsip_surat"){
        //echo "Tampil Halaman Modul Arsip Surat";
        if(@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus"){
            include "modul/arsip/form.php";
        }else{
            include "modul/arsip/data.php";
        }
    }else{
        //echo "Tampil Halaman Home";
        include "modul/home.php";
    }

?>