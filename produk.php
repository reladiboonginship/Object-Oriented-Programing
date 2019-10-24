<?php 

// Jualan
// Game
// komik

class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function getLabel(){

		return "$this->penulis, $this->penerbit";
	}
}

//$produk1 = new Produk();
//$produk1-> judul = "Naruto";
//var_dump($produk1);

$produk3 = new Produk();
$produk3-> judul = "Naruto";
$produk3-> penulis = "Masashi Kishimoto";
$produk3-> penerbit = "Shonen Jump";
$produk3-> harga = 3000 ;

$produk4 = new Produk();
$produk4-> judul = "Ucharted";
$produk4-> penulis = "Neil Druckmann";
$produk4-> penerbit = "Sony Entertaiment";
$produk4-> harga = 240000;


echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
 ?>