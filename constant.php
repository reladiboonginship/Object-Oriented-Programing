<?php


//constant = sebuah identifier untuk menyimpan nilai, mirip" sama variabel tapi berbeda.. bedanya constant = nilai-nya tidak dapat berubah (tetap)


/*define('NAMA', 'Dio Arrafiq');

echo NAMA;

echo "</br>";

const UMUR = 19;

echo UMUR;

?>*/


//define tidak bisa disimpan didalam class
//const bisa disimpan didalam kelas

/*
class Coba{
	const NAMA = 'Dio';
}

echo Coba::NAMA;*/

/*
Magic Constant
__LINE__
__FILE__
__DIR__
__FUNCTION__
__CLASS__
__TRAIT__
__METHOD__
__NAMESPACE__*/

/*echo __FILE__;*/

class coba {
	public $kelas = __CLASS__;

}

$obj = new coba;
echo $obj->kelas;