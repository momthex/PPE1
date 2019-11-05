<?php  //CONTROLER

class Controller{
	
function isAlphaNum($word):bool{
	if (!preg_match('`^[[:alnum:]]{1,15}$`',$word)) {
		return false;
	}else {
		return true;
	}
}
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
