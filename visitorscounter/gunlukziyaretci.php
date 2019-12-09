<?php
$tarih = file_get_contents('tarih.txt');
if ($tarih == date('d.m.Y')) {

$sayac_degeri = file_get_contents('gunluk.txt');
	$sayac_degeri = $sayac_degeri+1;
	file_put_contents('gunluk.txt',$sayac_degeri);
	echo 'Site bugünki goruntulenme sayisi: '.$sayac_degeri;
} else {
	file_put_contents('tarih.txt', date('d.m.Y'));
	file_put_contents('gunluk.txt', 0);
}



	?>