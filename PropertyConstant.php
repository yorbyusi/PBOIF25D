<?php

class product {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK =0.11;
}

//Objek

$produk = new product();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 1000000;
$produk->stok = 5;

//Hitung pajak
$pajak = product::PAJAK * 100;
$jumlahPajak = $produk->harga * product::PAJAK;

//total
$total = $produk->harga + $jumlahPajak;

//Hasil
echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: Rp." . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $pajak . "%";
echo "<br/>";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $total;
