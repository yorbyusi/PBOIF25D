<?php

// Panggil file PropertyConstant.php
require_once('./PropertyConstant.php');

use Pbo\Marketplace\Product;

class ItemProduk {
    use Product;
}

// Objek
$produk = new ItemProduk('P0001', 'Laptop', 1000000, 5);

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
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->total();