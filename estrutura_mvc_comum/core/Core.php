<?php

class Core {

	public function run(){
		/*
		param 1 = controller
		param 2 = action / acao
		param 3, 4, ... = parametros
		*/
		$url = '/';
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}

		$params = array();

		

		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			array_shift($url); //remove o primeiro elemento do array (em branco)

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;
			}

		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		
		var_dump($url, $params, $currentController, $currentAction);
		// die;

		$controller = new $currentController();
		

		call_user_func_array(array($controller, $currentAction), $params);
	}

}