<?php

include 'config.php';

$query = "SELECT * FROM heho";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<html>    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Motor Admin</title>
    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style2.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">

<body class="table">

    <header id="header-area" class="fixed-top">
        <div id="header-top" class="d-none d-xl-block"></div>
        <div id="header-bottom" class="fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-none d-xl-block">
                        <nav class="mainmenu alignleft">
                            <ul>
                                <li class="active"><a href="index.php">BERANDA</a></li>
                                <li><a href="about.php">TENTANG</a></li>
                                <li><a href="admin.php">ADMIN</a></li>
                                <li><a href="logout.php">LOGOUT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="tentang-area" class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <table border='1'>
                        <h2> DATA RENTAL</h2>
                        <span class="title-line"></span>
                        <div class="row">
                                <tr>
                                <th>No.</th>
                                <th>Tanggal Awal</th>
                                <th>Tanggal Akhir</th>
                                <th>Merk</th>
                                </tr> 
                        </div>  
                    </div>
                </div>
            </div>
    </section>  
    <?php 
        if($num > 0)
        {
            $no = 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['tanggala_rental'] . "</td>";
                echo "<td>" . $data['tanggalm_rental'] . "</td>";
                echo "<td>" . $data['merk_rental'] . "</td>";
                echo "<td><a href='delete.php?id_rental=" . $data['id_rental'] ."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }
        else
        {
            echo "<td colspan='3'>Tidak ada data</td>";
        }
    ?>
    </table>