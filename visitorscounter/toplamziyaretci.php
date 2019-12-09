<?php
$sayac_degeri = file_get_contents('sayac.txt');
	$sayac_degeri = $sayac_degeri+1;
	file_put_contents('sayac.txt',$sayac_degeri);
	
	echo 'Site Goruntulenme Sayisi: '.$sayac_degeri;
	?>