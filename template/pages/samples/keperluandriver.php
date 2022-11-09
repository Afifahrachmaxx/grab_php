<?php
    $koneksi = mysqli_connect("localhost","root","","antriangrab");
    $keperluandriver = $_POST['keperluandriver'];
    $dt = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM keperluandriver WHERE keperluan_driver='$keperluandriver'"));
    $output = $dt['keperluan_driver'];
    echo $output;
    // Perubahan
    // peruabahn 2
?>