<?php
// extends DB de ket noi Database
class SinhVienModule extends DB{
	public function GetSV(){
		// connect db
		return "Bui Duy Quang";
	}

	public function Tong($n, $m){
		return $n + $m;
	}

	public function SinhVien(){
		$qr = "SELECT * FROM sinhvien";
		return mysqli_query($this->conn, "SELECT * FROM sinhvien");
	}
}
?>