<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\Product;

class Jasa {

    use Product;

    public function payment($tipe) {
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "pembayaran hanya bisa va dan QRIS"
        };
    }
}