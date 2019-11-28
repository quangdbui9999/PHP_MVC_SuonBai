<?php
class Home extends Controller{
	function SayHi(){
		$teo = $this->model("SinhVienModule");
		echo $teo->GetSV();

		// Views

	}

	function Show($a, $b){
		// Models
		$teo = $this->model("SinhVienModule");
		$tong = $teo->Tong($a, $b);

		// Views
		//$this->view("aodep", ["Page"=>"news", "Number"=>$tong, "Mau"=>"red"]); // require "aodep.php"
		//$this->view("aoxau", ["Page"=>"contact", "Number"=>$tong, "Mau"=>"red", "SoThich"=>["A", "B", "C"]]);
		$this->view("aodep", ["Page"=>"news", "Number"=>$tong, "Mau"=>"red", "SoThich"=>["A", "B", "C"], "SV"=>$teo->SinhVien()]);
	}
}
?>