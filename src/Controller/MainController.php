<?php namespace Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

class MainController implements ControllerProviderInterface
{
	public function connect(Application $app){

		$route = $app["controllers_factory"];

		#RUTA PARA SERVIR EL INDEX DEL PRYECTO
		$route->get("/", [$this, "index"])->bind("index");
		
		#ESTA RUTA SIRVE PARA EL HOLA + NOMBRE
		$route->get('/hello/{name}', [$this, "hello"])->bind("hello");

		return $route;
	}

	public function index(Application $app){
		return "<h3>Bienvenido A Mi App Elaborada Con Silex, Symfony, Composer & HybridAuth</h3>";
	}

	public function hello(Application $app, $name){
		return "<h3>Hola ".$name."!</h3>";
	}
}