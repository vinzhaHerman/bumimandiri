<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/booking.css">
</head>
</div>
</div>
<body>

    <form id="booking-form" class="booking-form" name="form1" method="post" action="">
        <div align="center"><img class="logo" src="<?php echo base_url();?>assets/logos/mixed.png" width="100px" height="100px" title="Bumi Mandiri" alt="Bumi Mandiri"></div>
        <div class="h1">Bumi Mandiri</div>
        <div id="form-message" class="message hide">
            Selamat Hiburan
        </div>
        <div id="form-content">
            <div class="group">
                <label for="name">Nama</label>
                <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
            </div>
            <div class="group">
                <label for="email">Email</label>
                <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
            </div>
            <div class="group">
                <label for="phone">Telp</label>
                <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Telp"></div>
            </div>

            <div class="group">
                <label for="date-from">Dari</label>
                <div class="addon-right">
                    <input type="date" id="tanggal_sewa" name="tanggal_sewa" placeholder="Masukan tanggal" class="form-control" required min="<?php echo date('Y-m-d') ?>">
                    
                </div>
            </div>
            <div class="group">
                <label for="date-to">Sampai</label>
                <div class="addon-right">
                    <input type="date" id="tanggal_kembali" name="tanggal_kembali" placeholder="Masukan tanggal" class="form-control" required min="<?php echo date('Y-m-d') ?>">
                   
                </div>
            </div>
            <div class="group">
                <label for="room-type">Pilihan Paket</label>
                <div>
                    <select id="room-type" name="room-type" class="form-control">
                        <option value="Paket Umum">Paket Umum</option>
                        <option value="Paket Sekolah">Paket Sekolah</option>
                        <option value="Paket Meeting">Paket Meeting</option>
                    </select>
                </div>
            </div>

            <div class="group">
                <label for="jumlah-peserta">Jumlah Peserta</label>
                <div><input id="jumlah-peserta" name="jumlah-peserta" class="form-control" type="jumlah-peserta" placeholder=""></div>
            </div>

            <div class="group">
                <label for="total-biaya">Total Biaya</label>
                <div><input id="total-biaya" name="total-biaya" class="form-control" type="total-biaya" placeholder=""></div>
            </div>

            <div class="group">
                <label for="special-requirements">Persyaratan khusus</label>
                <div><textarea id="special-requirements" name="special-requirements" class="form-control" cols="" rows="5" placeholder="Persyaratan khusus"></textarea></div>
            </div>
            <div class="group submit">
                <label class="empty"></label>
                <div><input name="submit" type="submit" value="Bayar Sekarang"/></div>
            </div>

            <div class="group submit">
                <label class="empty"></label>
                <div><a href="http://localhost/PBumiMandiri/web"><input name="text" type="button" class="cancelbtn" value="Cancel"/></a></div>
                <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                NB : Pemesanan Harap Dilakukan 7 Hari sebelum tanggal pelaksanaan
            </form>
        </body>
        </html>
