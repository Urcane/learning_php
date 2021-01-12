<?php

namespace MagicMethods;

use TypeError;

class People
{
    protected $warnaRambut;
    protected $bentukWajah;
    public $tinggiBadan = 10;
    
    public function __construct(string $warnaRambut, string $bentukWajah)
    {
        $this->warnaRambut = $warnaRambut;
        $this->bentukWajah = $bentukWajah;
    }

    public function __get($name)
    {
        if ($name === 'hairColor') {
            return $this->warnaRambut;
        } elseif ($name === 'faceShape') {
            return $this->bentukWajah;
        } else {
            throw new TypeError("Error No Method Found!!", 1);
        }
    }

    /**
     * Even not called with setter magic methods public properties can be accessed and called from outside class
     * and protected or private properties cant be accessed without getter methods
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString(): string
    {
        return 'Mantep ini class <strong>' . self::class . '</strong> di panggil dari toString magic methods' . '<br>';
    }

    public function __invoke()
    {
        return 'Mantappp anda telah memanggil fungsi berbentuk class' . '<br>';
    }

    public function __call($name, $args)
    {
        if ($name === 'getHairColor') {
            return 'Warna Rambut nya adalah <strong>' . $this->getWarnaRambut() . '</strong><br>';
        }
        return 'Nama Method Tidak Ada' . '<br>';
    }

    public static function __callStatic($name, $args)
    {
        return "\"$name\" Static Method telah terpanggil <br>";
    }

    public function __sleep()
    {
        $this->bentukWajah = \null;
        return array('warnaRambut', 'tinggiBadan', 'bentukWajah');
    }

    public function __wakeup()
    {
        $this->bentukWajah = 'oval';
    }

    public function __clone()
    {
        \var_dump($this);
    }

    public function getWarnaRambut()
    {
        return $this->warnaRambut;
    }
}