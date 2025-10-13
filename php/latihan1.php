<?php 
    $nim = "I.2510066"; 
    $nama = 'Rafly Apriliansyah'; 
    $umur = 19; 
    $nilai = 92.75; 
    $status = TRUE; 

    echo  "NIM   : " . $nim . "/n"; 
    echo  "Nama  : $nama /n"; 
    print "Umur  : " . $umur; 
    print "<br>"; 
    printf("Nilai : %.3f /n", $nilai); 
    if ($status) 
    echo "Status : Aktif"; 
    else 
    echo "Status : Tidak Aktif"; 
?>