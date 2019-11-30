<?php

//Class merupakan template dari object
// but, kita bisa mengakses property dan method kedalam kontek class, tanpa membuat instansiasi dari class tersebut
// jadi tinggal akses property dan methodnya, kita bisa menggunakan itu dengan static keyword
// kita bisa membuat static property dan static method, supaya kita bisa akses pada konteks class  

//class contohStatic{

//	public static $angka = 1;

//	public static function halo(){

//		return "Halo " . self::$angka . " kali . ";
//	}
//}

//echo contohStatic::$angka;
//echo "</br>";
//echo contohStatic::halo();

class contoh{
	public static $angka = 1;

	public function halo(){

		return "Halo " . self::$angka++ . " Kali .</br>" ;

	}
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo(); 


// Static Keyword

// Member yang terikat dengan class, bukan object
// Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
// Membuat kode menjadi 'procedural'
// Biasanya digunakan untuk membuat fungsi bantuan / helper
// Atau digunakan di class-class utility pada Framework 



