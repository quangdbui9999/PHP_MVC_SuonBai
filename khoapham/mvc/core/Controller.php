<?php
class Controller{
	// ham require models
	public function model($model){
		require_once("./mvc/Models/".$model.".php");
		return new $model;
	}

	// data=[], hung du lieu ve, 1 trang co the co nhieu data nen de mang []
	public function view($view, $data=[]){
		require_once("./mvc/Views/".$view.".php");
		//return new $view;
	}
}
?>