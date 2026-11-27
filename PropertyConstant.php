<?php

namespace Pbo\Marketplace;

trait Product {

    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    public function __construct(string $kode = '', string $nama = '', int $harga = 0, int $stok = 0) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Setter
    public function setKode(string $kode): void {
        $this->kode = $kode;
    }

    public function setNama(string $nama): void {
        $this->nama = $nama;
    }

    public function setHarga(int $harga): void {
        $this->harga = $harga;
    }

    public function setStok(int $stok): void {
        $this->stok = $stok;
    }

    // Getter
    public function getKode(): string {
        return $this->kode;
    }

    public function getNama(): string {
        return $this->nama;
    }

    public function getHarga(): int {
        return $this->harga;
    }

    public function getStok(): int {
        return $this->stok;
    }

    public function pajak() {
        return self::PAJAK * 100; // 11%
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}