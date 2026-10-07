<?php

class Mahasiswa {
    public string $nim;
    public string $nama;
    public string $angkatan;
    public string $minat;
    public array $riwayatPendaftaran = [];

    public function __construct(string $nim, string $nama, string $angkatan, string $minat) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->angkatan = $angkatan;
        $this->minat = $minat;
    }

    public function tampilkanProfil(): void {
        echo "---------------------------------------------------\n";
        echo "PROFIL MAHASISWA:\n";
        echo "NIM      : " . $this->nim . "\n";
        echo "Nama     : " . $this->nama . "\n";
        echo "Angkatan : " . $this->angkatan . "\n";
        echo "Minat    : " . $this->minat . "\n";
        echo "---------------------------------------------------\n";
    }

    public function ajukanPendaftaran(string $namaUkm): void {
        $this->riwayatPendaftaran[] = $namaUkm;
        echo "[SUKSES] {$this->nama} berhasil mendaftar ke: {$namaUkm}\n";
    }

    public function lihatRiwayat(): void {
        echo "\n>> Riwayat Pendaftaran UKM untuk: {$this->nama}\n";

        if (empty($this->riwayatPendaftaran)) {
            echo "   (Status: Belum mendaftar ke UKM/KSM manapun)\n";
        } else {
            $no = 1;
            foreach ($this->riwayatPendaftaran as $ukm) {
                echo "   {$no}. {$ukm}\n";
                $no++;
            }
        }
        echo "\n";
    }
}

echo "====================================================\n";
echo "       PORTAL PENDAFTARAN UKM/KSM KAMPUS UCIC       \n";
echo "====================================================\n\n";

$mhs1 = new Mahasiswa("20251020014", "Nanda Putra Hartono", "2025", "Software Development");
$mhs1->tampilkanProfil();
$mhs1->ajukanPendaftaran("UKM Siber & Networking");
$mhs1->ajukanPendaftaran("KSM Web Development");
$mhs1->lihatRiwayat();

$mhs2 = new Mahasiswa("20251020099", "Budi Santoso", "2024", "Desain Grafis");
$mhs2->tampilkanProfil();
$mhs2->lihatRiwayat();
$mhs2->ajukanPendaftaran("UKM Fotografi");
$mhs2->lihatRiwayat();

?>

