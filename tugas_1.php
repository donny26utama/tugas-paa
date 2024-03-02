<?php

echo "Inputkan angka ke1: ";
$input_angka = fopen("php://stdin","r");
$val1 = intval(trim(fgets($input_angka)));


echo "Inputkan angka ke2: ";
$input_angka = fopen("php://stdin","r");
$val2 = intval(trim(fgets($input_angka)));


echo "Inputkan angka ke3: ";
$input_angka = fopen("php://stdin","r");
$val3 = intval(trim(fgets($input_angka)));


echo "Inputkan angka ke4: ";
$input_angka = fopen("php://stdin","r");
$val4 = intval(trim(fgets($input_angka)));


echo "Inputkan angka ke5: ";
$input_angka = fopen("php://stdin","r");
$val5 = intval(trim(fgets($input_angka)));

$total = $val1 + $val2 + $val3 + $val4 + $val5;
echo "total: $total\n";
