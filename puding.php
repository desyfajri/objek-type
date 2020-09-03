<?php
//contoh class
 class puding{
     // contoh property
     public $rasapuding;
     public $bayakpuding;
     public $banyakkirim;
     // contoh method
     public function getCetak(){
         return "$this->banyakpuding, $this->rasapuding, $this->banyakkirim";
     }
     public function __construct($rasapuding="rasa puding", $banyakpuding="banyak puding ", $banyakkirim=0){
         $this->rasapuding = $rasapuding;
         $this->banyakpuding = $banyakpuding;
         $this->banyakkirim = $banyakkirim;
     }
 }
 class cetakbanyakpuding{
    public function cetakbikin($puding){
        $str="{$puding->banyakpuding}, {$puding->getcetak()}";
        return $str;
    }
}
 // contoh objek nya
 $puding1 = new puding("coklat", "10", "5");
 $puding2 = new puding("vanila", "20", "10");
 $puding3 = new puding("pandan", "20", "15");
 $puding4 = new puding("susu", "40", "30");
 $banyakpuding = new cetakbanyakpuding();

 echo "puding 1: " . $puding1->getcetak();
 echo "<br>";
 echo "puding 2: " . $puding2->getcetak();
 echo "<br>";
 echo "puding 3: " . $puding3->getcetak();
 echo "<br>";
 echo "puding 4: " . $puding4->getcetak();
 echo "<br>";
 echo $banyakpuding-> cetakbikin($puding1);


 ?>