<?php

namespace ParentClass;

class Kendaraan
{
    protected $nama,
              $jumlahRoda,
              $kecepatanMaximal,
              $mesinMenyala;
    
    function __construct(string $nama, int $jumlahRoda, int $kecepatanMaximal, bool $mesinMenyala)
    {
        $this->nama = $nama;
        $this->jumlahRoda = $jumlahRoda;
        $this->kecepatanMaximal = $kecepatanMaximal;
        $this->mesinMenyala = $mesinMenyala;
    }

    public function menyalakanMesin(): string
    {
        if (!($this->mesinMenyala)) {
            $this->kondisiMesin = \true;
            return $this->nama . ' Mesinnya Menyalaa!!';
        }
        return $this->nama . ' Mesinnya sudah menyala dari tadi';
    }
}
