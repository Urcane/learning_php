<?php

namespace Components;

class Mobil
{
    public $kondisiMenyala;
    public $kecepatan;

    function __construct(bool $kondisiMenyala, int $kecepatan)
    {
        $this->kondisiMenyala = $kondisiMenyala;
        $this->kecepatan = $kecepatan;
    }

    public function menyalakanMesin()
    {
        if (!($this -> kondisiMenyala)) {
            $this->kondisiMenyala = \true;
            return 'Kondisi Mesin <strong>Menyala</strong>';
        }
        return 'Mesin Sudah <strong>Menyala</strong>';
    }

    public function belokKiri()
    {
        return 'Belok Kiri';
    }

    public function belokKanan()
    {
        return 'Belok Kanan';
    }

    public function gas()
    {
        return 'Mobil di jalankan dengan kecepatan <strong>'. $this->kecepatan .' km/jam</strong>';
    }
}
