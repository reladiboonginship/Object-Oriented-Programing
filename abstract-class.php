<?php 

/*
Abstract class (1)

- sebuah kelas yang tidak dapat di instansiasi
- kelas 'Abstrak'
- Mendefinisikan interface untuk kelas lain yang menjadi turunannya
- Berperan sebagai 'kerangka dasar' untuk kelas turunannya
- Memiliki minimal 1 method abstrak
- Digunakan dalam 'pewarisan'/inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turunannya

Abstract class (2)

- Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
- Kelas abstrak boleh memiliki property / method reguler
- Kelas abstrak boleh memiliki property / static method

Alasan menggunakan kelas abstrak

- merepresentasikan ide atau konsep dasar
- "Composition over Inheritance"
- Salah satu cara menerapkan Polimorphism
- Sentralisasi logic
- Mempermudah pengerjaan tim*/

abstract class Produk{
	private $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;
		   

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}
		public function setJudul( $judul ){
			$this->judul = $judul;
		}

		public function getJudul(){

			return $this->judul;
		}
		
		public function setPenulis( $penulis ){
			$this->penulis = $penulis;
		}

		public function getPenulis(){
			return $this->penulis;
		}

		public function setPenerbit( $penerbit ){

			$this->penerbit = $penerbit;
		}

		public function getPenerbit(){
			return $this->penerbit;
		}

		public function setDiskon ( $diskon ){
			$this->diskon = $diskon;
		}

		public function getDiskon( $diskon ){
			$this->diskon = $diskon;

		}

		public function getHarga(){

			return $this->harga - ( $this->harga * $this->diskon / 100 );
		}

		public function getLabel(){

			return "$this->penulis, $this->penerbit";
		}

		abstract public function getInfoProduk();

		public function getInfo(){

		$str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";

			return $str;
		}
	}

	class Komik extends Produk{
		public $jmlHalaman;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){

			parent::__construct(  $judul , $penulis , $penerbit , $harga );
			$this->jmlHalaman = $jmlHalaman;

		}
		public function getInfoProduk(){
			$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";

			return $str;
		}	
	}

	class Game extends Produk{
		public $waktuMain;

		public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

			parent::__construct( $judul , $penulis , $penerbit , $harga  );
			$this->waktuMain = $waktuMain;

		}


		public function getInfoProduk(){
			$str = "Game :" . $this->getInfo() . " ~ {$this->waktuMain} Jam.";

			return $str;
		}	
	}

class cetakInfoProduk{
	public $daftarProduk = array();

	public function tambahProduk ( Produk $produk ){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){

		$str = "DAFTAR PRODUK : <br>";
		
		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str; 
	}
}



$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);

$produk2 = new Game ("Uncharted","Neil Druckmann","Sony Computer",240000,50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk ( $produk1 );
$cetakProduk->tambahProduk ( $produk2 );
echo $cetakProduk->cetak();