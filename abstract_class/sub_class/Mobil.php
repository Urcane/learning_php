<?php
namespace SubClassAbstract;
include('./parent_class/Kendaraan.php');

use ParentClassAbstract\Kendaraan;

class Mobil extends Kendaraan
{
    public function menyalakanMesin(): string
    {
        if (!($this->mesinMenyala)) {
            $this->kondisiMesin = \true;
            return $this->nama . ' Mesinnya Menyalaa!!';
        }
        return $this->nama . ' Mesinnya sudah menyala dari tadi';
    }

    final public function menghitungRoda(): string
    {
        return 'Jumlah Rodanya adalah ' . $this->jumlahRoda;
    }

    final public function meningkatkanKecepatan(int $kecepatanSaatIni, int $waktuPedalGas): string
    {
        $totalKecepatan = $kecepatanSaatIni + ($waktuPedalGas * $this->defaultKecepatanMesin);

        return 'Total Kecepatan Saat ini adalah ' . $totalKecepatan;
    }
    
    final public function menurunkanKecepatan(int $kecepatanSaatIni, int $waktuPedalRem): string
    {
        $totalKecepatan = $kecepatanSaatIni - ($waktuPedalRem * $this->defaultRemMesin);

        return 'Total Kecepatan Saat ini setelah di rem adalah ' . $totalKecepatan;
    }
}
