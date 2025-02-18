<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/file_upload.css">
    <script scr="<?php echo base_url(); ?>/assets/js/file_upload.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(elems, {
                hover: false,
                coverTrigger: false
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            M.Modal.init(elems);
        });
    </script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teknik Informatika</title>
</head>

<body id="home" class="">

    <!-- Section: Follow -->

    <section class="section grey white-text">
        <div class="row">
            <div class="col s12 left">
                <a href="#" class="brand-logo "><img src="<?php echo base_url(); ?>/assets/img/logo-kampus-merdeka.png">
                </a>
                <img src="<?php echo base_url(); ?>/assets/img/avatar-10.png" alt="" class="dropdown-trigger right" data-target="dropdown2" style="width: 50px; margin-right: 50px; margin-top: 25px;">
            </div>
            <ul id='dropdown2' class='dropdown-content'>
                <li><a href="#!">Account</a></li>
                <li><a href="#!">Logout</a></li>
            </ul>
        </div>
    </section>
    <!-- Navbar -->
    <div class="navbar">
        <nav class=" #616161 grey lighten-1  black-text">

            <div class="nav-wrapper">
                <ul class="left ">
                    <li>
                        <a href="#home" class="black-text">Dashboard</a>
                    </li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">Pengajuan Usulan<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li>
                        <a href="#program" class="black-text">Profil</a>
                    </li>
                </ul>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Catatan Harian</a></li>
                    <li><a href="#!">Laporan Tengah</a></li>
                    <li><a href="#!">Laporan Akhir</a></li>
                    <li><a href="#!">Pengumuman</a></li>
                </ul>
            </div>
    </div>

    </nav>
    </div>