<?php

namespace ParentClassAbstract;

abstract class Kendaraan
{
    protected $nama,
              $kecepatanMaximal,
              $mesinMenyala,
              $jumlahRoda,
              $defaultKecepatanMesin,
              $defaulRemMesin;

    function __construct(
        string $nama, 
        int $kecepatanMaximal, 
        bool $mesinMenyala, 
        int $jumlahRoda, 
        int $defaultKecepatanMesin, 
        int $defaultRemMesin
    )
    {
        $this->nama = $nama;
        $this->kecepatanMaximal = $kecepatanMaximal;
        $this->mesinMenyala = $mesinMenyala;
        $this->jumlahRoda = $jumlahRoda;
        $this->defaultKecepatanMesin = $defaultKecepatanMesin;
        $this->defaultRemMesin = $defaultRemMesin;
    }
    
    abstract public function meningkatkanKecepatan(int $kecepatanSaatIni, int $waktuPedalGas): string;
    abstract public function menurunkanKecepatan(int $kecepatanSaatIni, int $waktuPedalRem): string;
    abstract public function menghitungRoda(): string;
}
