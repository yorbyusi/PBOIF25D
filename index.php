<?php

// Panggil file PropertyConstant.php
require_once('./PropertyConstant.php');

use Pbo\Marketplace\Product;

// Objek
$produk = new Product('P0001', 'Laptop', 1000000, 5);

// Hasil
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