<?php 
namespace App\Core;

class Router {

	protected $routes=[
		'GET' => [],
		'POST' => []
	];
	public function define ($routes){
		$this->routes=$routes;
	}

	public function direct($uri,$requestType){
		if (array_key_exists($uri, $this->routes[$requestType])) {
				return $this->callAction(
					...explode('@', $this->routes[$requestType][$uri])
				);
			}else{
				foreach ($this->routes[$requestType] as $key => $val){
					$pattern = preg_replace('#\(/\)#', '/?', $key);
					$pattern = "@^" .preg_replace('/{([a-zA-Z0-9\_\-]+)}/', '(?<$1>[a-zA-Z0-9\_\-]+)', $pattern). "$@D";
					preg_match($pattern, $uri, $matches);
					array_shift($matches);
						if($matches){
							$getAction = explode('@', $val);
							return $this->callAction($getAction[0], $getAction[1], $matches);
						}
				}
		}
			if (isset($_SESSION['admin'])){
				redirect('admin');
			}
			else {
				redirect('');
			}

	}

	public static function load ($file){
		$router = new static;
		require $file;
		return $router;
	}

	public function get($uri,$controller){
		$this->routes['GET'][$uri]=$controller;
	}
	public function post($uri,$controller){
		$this->routes['POST'][$uri]=$controller;
	}

	protected function callAction($controller,$action, $vars = []){
		$controller = "App\\Controllers\\{$controller}";

					$controller = new $controller;
			if (! method_exists($controller, $action)) {
			throw new \Exception(
			"{$controller} does not respond to the {$action} action."
			);
			}
			return $controller->$action($vars);
					
	}
}