<?php 


// define('NAMA', 'Feri Irawan');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;


// class Coba{
//     const NAMA = 'Feri Irawan';
// }

// echo Coba::NAMA;

// echo __LINE__ ;
// echo __FILE__;
// echo __DIR__;
// echo __FUNCTION__;
// echo __CLASS__;
// echo __TRAIT__;
// echo __METHOD__;
// echo __NAMESPACE__;


// function coba(){
//     return __FUNCTION__;
// }
// echo coba();


class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;















?>