<?php
	class App{
		// Link khach hang se chay:
		// http://localhost/myproject/khoapham/Home/SayHi/1/2/3
		// chu y toi: Home/SayHi/1/2/3
		protected $controller = "Home"; // chon Home la man hinh default
		protected $action = "SayHi"; // xu ly function
		protected $params = [];

		function __construct(){
			// Array ( [0] => Home [1] => Action [2] => 1 [3] => 2 [4] => 3 )
			$arr = $this->UrlProcess();
			//print_r($arr);

			// Xu li Controller
			if(file_exists("./mvc/Controllers/".$arr[0].".php")){
				$this->controller = $arr[0];
				unset($arr[0]); // huy
			}
			require_once "./mvc/Controllers/".$this->controller.".php";
			$this->controller = new $this->controller;

			// Xu ly Action
			if(isset($arr[1])){
				if(method_exists($this->controller, $arr[1])){
					$this->action = $arr[1];
				}
				unset($arr[1]); // huy
			}

			// Xu ly params: params de danh cho functions chay
			$this->params = $arr?array_values($arr):[];

			call_user_func_array([$this->controller, $this->action], $this->params);

			/*echo $this->controller;
			echo $this->action;
			echo "<hr/>";
			print_r($this->params);*/
		}

		function UrlProcess(){
			// Home/SayHi/1/2/3
			if(isset($_GET['url'])){
				return explode("/", filter_var(trim($_GET['url'], "/")));
			}
		}
	}
?>