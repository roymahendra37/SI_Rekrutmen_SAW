<?php
namespace App\Observers;

use App\Models\Pelamar;
use App\Models\Alternatif;
use App\Models\Normalisasi;
use App\Models\Hasil;
use App\Models\Kriteria;

class PelamarObserver
{
    public function created(Pelamar $pelamar)
{
    // Buat data alternatif baru
    $pengalaman = $this->getPengalamanScore($pelamar->pengalaman);
    $pendidikan = $this->getPendidikanScore($pelamar->pendidikan);
    $nilai = $this->getNilaiScore($pelamar->nilai_tes);
    $usia = $this->getUsiaScore($pelamar->usia);

    // Buat data alternatif baru
    $alternatif = Alternatif::create([
        'id_pelamar' => $pelamar->id_pelamar,
        'alternatif_kriteria1' => $pengalaman,
        'alternatif_kriteria2' => $pendidikan,
        'alternatif_kriteria3' => $nilai,
        'alternatif_kriteria4' => $usia,
    ]);

    // Hitung ulang nilai normalisasi berdasarkan data alternatif yang baru
    $max_k1 = Alternatif::max('alternatif_kriteria1');
    $max_k2 = Alternatif::max('alternatif_kriteria2');
    $max_k3 = Alternatif::max('alternatif_kriteria3');
    $min_k4 = Alternatif::min('alternatif_kriteria4');

    // Ambil semua data alternatif yang terkait dengan pelamar
    $alternatifList = Alternatif::where('id_pelamar', $pelamar->id_pelamar)->get();

    // Iterasi melalui setiap data alternatif untuk membuat dan menghitung normalisasi
    foreach ($alternatifList as $alternatif) {
        $normalisasi = new Normalisasi();
        $normalisasi->id_alternatif = $alternatif->id_alternatif;
        $normalisasi->id_pelamar = $pelamar->id_pelamar;
        $normalisasi->normalisasi_kriteria1 = $alternatif->alternatif_kriteria1 / $max_k1;
        $normalisasi->normalisasi_kriteria2 = $alternatif->alternatif_kriteria2 / $max_k2;
        $normalisasi->normalisasi_kriteria3 = $alternatif->alternatif_kriteria3 / $max_k3;
        $normalisasi->normalisasi_kriteria4 = $min_k4 / $alternatif->alternatif_kriteria4;
        $normalisasi->save();
    }

    $this->updateAllNormalisasi();

    // Buat data hasil baru
    $normalisasiList = Normalisasi::where('id_pelamar', $pelamar->id_pelamar)->get();

    //mengambil data bobot
    $id_k1 = 1;
    $id_k2 = 2;
    $id_k3 = 3;
    $id_k4 = 4;
    $bobotk1 = Kriteria::where('id_kriteria', $id_k1)->value('bobot');
    $bobotk2 = Kriteria::where('id_kriteria', $id_k2)->value('bobot');
    $bobotk3 = Kriteria::where('id_kriteria', $id_k3)->value('bobot');
    $bobotk4 = Kriteria::where('id_kriteria', $id_k4)->value('bobot');

    // Iterasi melalui setiap data alternatif untuk membuat dan menghitung normalisasi
    foreach ($normalisasiList as $normalisasi) {
        $hasil = new Hasil();
        $hasil->id_hasil = $hasil->id_hasil;
        $hasil->id_normalisasi = $normalisasi->id_normalisasi;
        $hasil->id_pelamar = $pelamar->id_pelamar;
        $hasil->hasil_kriteria1 = $normalisasi->normalisasi_kriteria1 * $bobotk1;
        $hasil->hasil_kriteria2 = $normalisasi->normalisasi_kriteria2 * $bobotk2;
        $hasil->hasil_kriteria3 = $normalisasi->normalisasi_kriteria3 * $bobotk3;
        $hasil->hasil_kriteria4 = $normalisasi->normalisasi_kriteria4 * $bobotk4;
        $hasil->total = ($hasil->hasil_kriteria1) + 
                        ($hasil->hasil_kriteria2) + 
                        ($hasil->hasil_kriteria3) + 
                        ($hasil->hasil_kriteria4);
        $hasil->save();
    }
    $this->updateAllHasil();
}

public function deleting(Pelamar $pelamar)
{
    $this->updateAllNormalisasi();
    $this->updateAllHasil();
}

private function updateAllNormalisasi()
{
    $alternatifList = Alternatif::all();

    $max_k1 = Alternatif::max('alternatif_kriteria1');
    $max_k2 = Alternatif::max('alternatif_kriteria2');
    $max_k3 = Alternatif::max('alternatif_kriteria3');
    $min_k4 = Alternatif::min('alternatif_kriteria4');

    foreach ($alternatifList as $alternatif) {
        $normalisasi = Normalisasi::where('id_alternatif', $alternatif->id_alternatif)->first();
        if ($normalisasi) {
            $normalisasi->update([
                'normalisasi_kriteria1' => $alternatif->alternatif_kriteria1 / $max_k1,
                'normalisasi_kriteria2' => $alternatif->alternatif_kriteria2 / $max_k2,
                'normalisasi_kriteria3' => $alternatif->alternatif_kriteria3 / $max_k3,
                'normalisasi_kriteria4' => $min_k4 / $alternatif->alternatif_kriteria4,
            ]);
        }
    }
}

private function updateAllHasil()
{
    $normalisasiList = Normalisasi::all();

    $id_k1 = 1;
    $id_k2 = 2;
    $id_k3 = 3;
    $id_k4 = 4;
    $bobotk1 = Kriteria::where('id_kriteria', $id_k1)->value('bobot');
    $bobotk2 = Kriteria::where('id_kriteria', $id_k2)->value('bobot');
    $bobotk3 = Kriteria::where('id_kriteria', $id_k3)->value('bobot');
    $bobotk4 = Kriteria::where('id_kriteria', $id_k4)->value('bobot');

    foreach ($normalisasiList as $normalisasi) {
        $hasil = Hasil::where('id_normalisasi', $normalisasi->id_normalisasi)->first();
        if ($hasil) {
            $hasil->update([
                'hasil_kriteria1' => $normalisasi->normalisasi_kriteria1 * $bobotk1,
                'hasil_kriteria2' => $normalisasi->normalisasi_kriteria2 * $bobotk2,
                'hasil_kriteria3' => $normalisasi->normalisasi_kriteria3 * $bobotk3,
                'hasil_kriteria4' => $normalisasi->normalisasi_kriteria4 * $bobotk4,
                'total' => ($normalisasi->normalisasi_kriteria1 * $bobotk1) + 
                            ($normalisasi->normalisasi_kriteria2 * $bobotk2) + 
                            ($normalisasi->normalisasi_kriteria3 * $bobotk3) + 
                            ($normalisasi->normalisasi_kriteria4 * $bobotk4)
            ]);
        }
    }
}

public function updated(Pelamar $pelamar)
{
    $pengalaman = $this->getPengalamanScore($pelamar->pengalaman);
    $pendidikan = $this->getPendidikanScore($pelamar->pendidikan);
    $nilai = $this->getNilaiScore($pelamar->nilai_tes);
    $usia = $this->getUsiaScore($pelamar->usia);

    // Update data alternatif
    $alternatif = Alternatif::where('id_pelamar', $pelamar->id_pelamar)->first();
    $alternatif->update([
        'alternatif_kriteria1' => $pengalaman,
        'alternatif_kriteria2' => $pendidikan,
        'alternatif_kriteria3' => $nilai,
        'alternatif_kriteria4' => $usia,
    ]);

    //Update data normalisasi
    $alternatifList = Alternatif::where('id_pelamar', $pelamar->id_pelamar)->get();

    foreach ($alternatifList as $alternatif) {
        $k1 = $alternatif->alternatif_kriteria1;
        $k2 = $alternatif->alternatif_kriteria2;
        $k3 = $alternatif->alternatif_kriteria3;
        $k4 = $alternatif->alternatif_kriteria4;

        $normalisasi = Normalisasi::where('id_pelamar', $pelamar->id_pelamar)
            ->where('id_alternatif', $alternatif->id_alternatif)->first();

        $normalisasi->update([
            'normalisasi_kriteria1' => $k1 / Alternatif::max('alternatif_kriteria1'),
            'normalisasi_kriteria2' => $k2 / Alternatif::max('alternatif_kriteria2'),
            'normalisasi_kriteria3' => $k3 / Alternatif::max('alternatif_kriteria3'),
            'normalisasi_kriteria4' => Alternatif::min('alternatif_kriteria4') / $k4,
        ]);
    }

    //Update data hasil
    $normalisasiList = Normalisasi::where('id_pelamar', $pelamar->id_pelamar)->get();

    foreach ($normalisasiList as $normalisasi) {
        $id_k1 = 1;
        $id_k2 = 2;
        $id_k3 = 3;
        $id_k4 = 4;
        $bobotk1 = Kriteria::where('id_kriteria', $id_k1)->value('bobot');
        $bobotk2 = Kriteria::where('id_kriteria', $id_k2)->value('bobot');
        $bobotk3 = Kriteria::where('id_kriteria', $id_k3)->value('bobot');
        $bobotk4 = Kriteria::where('id_kriteria', $id_k4)->value('bobot');

        $hasil = Hasil::where('id_pelamar', $pelamar->id_pelamar)
            ->where('id_normalisasi', $normalisasi->id_normalisasi)->first();

        $hasil->update([
                'hasil_kriteria1' => $normalisasi->normalisasi_kriteria1 * $bobotk1,
                'hasil_kriteria2' => $normalisasi->normalisasi_kriteria2 * $bobotk2,
                'hasil_kriteria3' => $normalisasi->normalisasi_kriteria3 * $bobotk3,
                'hasil_kriteria4' => $normalisasi->normalisasi_kriteria4 * $bobotk4,
                'total' => ($normalisasi->normalisasi_kriteria1 * $bobotk1) + 
                            ($normalisasi->normalisasi_kriteria2 * $bobotk2) + 
                            ($normalisasi->normalisasi_kriteria3 * $bobotk3) + 
                            ($normalisasi->normalisasi_kriteria4 * $bobotk4)
        ]);
    }
}


    private function getPengalamanScore($pengalaman)
    {
        switch ($pengalaman) {
            case 'Fresh Graduate':
                return 3;
            case '1 Tahun':
                return 5;
            case '1-2 Tahun':
                return 7;
            case 'Lebih Dari 2 Tahun':
                return 9;
            default:
                return 0;
        }
    }

    private function getPendidikanScore($pendidikan)
    {
        switch ($pendidikan) {
            case 'SMA':
                return 3;
            case 'SMK':
                return 5;
            case 'D3/D4':
                return 7;
            case 'S1':
                return 9;
            default:
                return 0;
        }
    }

    private function getNilaiScore($nilai_tes)
    {
        if ($nilai_tes < 30) {
            return 3;
        } elseif ($nilai_tes >= 30 && $nilai_tes <= 69) {
            return 5;
        } elseif ($nilai_tes >= 70 && $nilai_tes <= 85) {
            return 7;
        } elseif ($nilai_tes >= 86 && $nilai_tes <= 100) {
            return 9;
        } else {
            return 0;
        }
    }

    private function getUsiaScore($usia)
    {
        if ($usia >= 18 && $usia <= 20) {
            return 3;
        } elseif ($usia >= 21 && $usia <= 25) {
            return 5;
        } elseif ($usia >= 26 && $usia <= 30) {
            return 7;
        } elseif ($usia >= 31 && $usia <= 35) {
            return 9;
        } else {
            return 0;
        }
    }
}