<?php
class HitungBangunDatar {
    // Luas persegi panjang
    public function luasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // Keliling persegi panjang
    public function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    // Luas persegi 
    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

    // Keliling persegi
    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    // Luas segitiga (alas * tinggi / 2)
    public function luasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // Luas lingkaran (π * r^2)
    public function luasLingkaran($jariJari) {
        return pi() * pow($jariJari, 2);
    }

    // Keliling lingkaran (2 * π * r)
    public function kelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

// Contoh penggunaan class
$hitung = new HitungBangunDatar();

// Menghitung dan menyimpan hasil
$luasPersegiPanjang = $hitung->luasPersegiPanjang(5, 10);
$kelilingPersegiPanjang = $hitung->kelilingPersegiPanjang(5, 10);
$luasPersegi = $hitung->luasPersegi(4);
$kelilingPersegi = $hitung->kelilingPersegi(4);
$luasSegitiga = $hitung->luasSegitiga(5, 8);
$luasLingkaran = $hitung->luasLingkaran(7);
$kelilingLingkaran = $hitung->kelilingLingkaran(7);

// Menampilkan hasil dengan echo
echo "Luas Persegi Panjang: " . number_format($luasPersegiPanjang) . "<br>";
echo "Keliling Persegi Panjang: " . number_format($kelilingPersegiPanjang) . "<br>";
echo "Luas Persegi: " . number_format($luasPersegi) . "<br>";
echo "Keliling Persegi: " . number_format($kelilingPersegi) . "<br>";
echo "Luas Segitiga: " . number_format($luasSegitiga) . "<br>";
echo "Luas Lingkaran: " . number_format($luasLingkaran) . "<br>";
echo "Keliling Lingkaran: " . number_format($kelilingLingkaran) . "<br>";
?>