<?php  //CONTROLER

class Controller{
	function render($filename){  
		ob_start();
		require'views/'.$filename.'.php';
		$content_for_layout = ob_get_clean();
	
		require'views/layout.php';
	}
	function loadModel($name){
		require_once('models/'.$name.'.php');        
		$this->$name = new $name();
	}
}
