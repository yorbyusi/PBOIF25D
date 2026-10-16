<?php

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

//Objek

$produk = new product();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 1000000;
$produk->stok = 5;

//Hasil
echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: Rp." . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->total();
