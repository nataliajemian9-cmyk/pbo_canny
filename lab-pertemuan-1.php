<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
        ['judul' => 'Jevgar The Story Of Sheana', 'penulis' => 'Canny', 'tahun' => 2009],
        ['judul' => 'Dream', 'penulis' => ' Gaecattz', 'tahun' => 2009],

    // TODO: tambahkan 2 buku lagi
];
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// 2) Versi OOP
class Buku
{
    // TODO: properti, constructor, dan method info()
    public$judul;
    public$penulis;
    public$tahun;
    
    public function __construct(string $judul, string $penulis,int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }
    public function info(): string
    {
        return "{$this->judul} ({$this->tahun})";
    }

        
}

// TODO: buat 3 object Buku lalu tampilkan info()-nya
