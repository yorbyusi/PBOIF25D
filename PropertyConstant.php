<?php

namespace Pbo\Marketplace;

class product {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK =0.11;

    public function  pajak() {
        return self::PAJAK * 100; //11%
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}
