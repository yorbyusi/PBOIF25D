<?php

require_once('./Jasa.php');

use Pbo\Marketplace\Jasa;

// Objek
$produk = new Jasa('P0001', 'Laptop', 1000000, 5);

// Hasil
echo "Kode: " . $produk->getKode();
echo "<br/>";

echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: Rp." . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->total();
echo "<br/>";

echo "Metode Pembayaran: " . $produk->payment('qris');