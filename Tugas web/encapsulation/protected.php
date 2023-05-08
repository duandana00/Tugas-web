<?php

class Mahasiswa {

	private string $nim = "207101065";
	protected string $nama = "GilangAl-Fatih";

	}

	class Nilai extends Mahasiswa {

	public function getNim() {
		return $this->nim;
	}

	public function getNama() {
		return $this->nama;
	}
}

$mhsw = new Nilai();

echo "<p>" . $mhsw->getNim() . "</p>";
echo "<p>" . $mhsw->getNama() . "</p>";