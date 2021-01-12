<?php

namespace SubClass;

use ParentClass\Kendaraan;

class Mobil extends Kendaraan
{
    public function menghitungRoda(): string
    {
        return 'Jumlah Rodanya adalah ' . $this->jumlahRoda;
    }

    public function menghitungKecepatanMaksimal(): string
    {
        return $this->nama . ' bisa melaju dengan kecepatan ' . $this->kecepatanMaximal . ' Km/jam';
    }
}
