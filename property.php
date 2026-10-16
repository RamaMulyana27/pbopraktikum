<?php

class Product {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function pajak(){
        return self::PAJAK * 100;
    }


    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new Produk ();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hasil
echo "produk: ". $produk->nama;
echo "harga: ". $produk->harga;
echo "stok: ". $produk->stok;
echo "pajak: ".$pajak;
echo "total harga setelah pajak: ". $produk->total();