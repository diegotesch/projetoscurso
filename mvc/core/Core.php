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

		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			array_shift($url); //remove o primeiro elemento do array (em branco)

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
			}else{
				$currentAction = 'index';
			}


		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		echo "<hr>";
		echo "CONTROLLER: ".$currentController."<br>";
		echo "ACTION: ".$currentAction."<br>";
	}

}