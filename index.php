<?php

function konversikedetik($jam, $menit, $detik)
{
    return $jam * 3600 + $menit * 60 + $detik;
}

function detikkewaktu($durasi)
{
    // Menghitung jam
    $jam = floor($durasi / 3600);
    
    // Menghitung sisa detik setelah dihitung jam
    $sisa_detik = $durasi % 3600;
    
    // Menghitung menit
    $menit = floor($sisa_detik / 60);
    
    // Menghitung detik yang tersisa
    $detik_sisa = $sisa_detik % 60;
    $detik = str_pad($detik_sisa, 2, "0", STR_PAD_LEFT);

    return "$jam:$menit:$detik";
}

echo "Soal 1:", "<br>";
echo "Seseorang berangkat pukul  08 : 52 : 45 
( pukul 08 lewat 52 menit 45 detik ), 
dan tiba ditujuan setelah 5000 detik kemudian.
Susun program untuk menghitung dan mencetak pukul berapa 
( jam : menit : detik ) dia tiba ditempat tujuan.", "<br>";

function soal1()
{
    // Waktu awal berangkat, kita ubah dalam satuan detik
    $waktu_awal = konversikedetik(8, 52, 45);
    
    // Durasi dalam detik
    $durasi = 5000;
    
    // Hitung waktu tiba
    $waktu_tiba = $waktu_awal + $durasi;

    return detikkewaktu($waktu_tiba);
}

// Output waktu tiba
echo "Waktu tiba:", soal1(), "<br>";

echo "Soal 2:", "<br>";
echo "Seseorang berangkat pukul  08 : 52 : 45 
( pukul 08 lewat 52 menit 45 detik ) , 
dan tiba ditujuan pukul : 12 : 15 : 10. 
Susun program untuk menghitung dan mencetak berapa jam, berapa menit dan berapa detik waktu yang dia habiskan dalam perjalanan.", "<br>";

function soal2()
{
    // Waktu awal berangkat, kita ubah dalam satuan detik
    $waktu_awal = konversikedetik(8, 52, 45);
    $waktu_tiba = konversikedetik(12, 15, 10);

    $waktu_jalan = $waktu_tiba - $waktu_awal;

    return detikkewaktu($waktu_jalan);
}

// Output waktu tiba
echo "Waktu perjalanan:", soal2(), "<br>";
