<?php 
class Controller{
	var $vars = array();
	var $layout = 'default';
	function __construct(){ //Constructeur qui vérifie les parametres passées
		if(isset($_POST)){
			$this->data = $_POST;    
		} 
		if(isset($this->models)){   
			foreach($this->models as $v){
				$this->loadModel($v);   
			}
		}
	}
	
	function render($filename){ //Fonction qui inclus une page des le layout par défaut
		extract($this->vars);
		ob_start();
		require('../views/'.$filename.'.php');
		$content_for_layout = ob_get_clean();
		require(ROOT.'views/'.$this->layout.'.php');
	}
	
	function loadModel($name){ //Fonction qui ..............
		require_once(ROOT.'models/'.strtolower($name).'.php');        
		$this->$name = new $name();
	}
}