<?php

class Mahasiswa {

	private string $nim;
	public string $nama;

	public function setnNim(string $a) {
		$this->nama = $a;
	}

	public function setNama(string $nama) {
		$this->nama = $nama;
	}

	public function getNim() {
		return $this->nim;
	}

}

$mhsw = new Mahasiswa;
$mhsw->setNim("2207101065");
$mhsw->setNama("GilangaAl-Fatih");

echo "<p>" . $mhsw->getNim() . "</p>";
echo "<p>" . $mhsw->nama . "</p>";