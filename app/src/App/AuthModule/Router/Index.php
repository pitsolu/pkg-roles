<?php

namespace __APP__\AuthModule\Router;

class Index extends \Strukt\Contract\Router{

	/**
	* @Route(/)
	* @Method(GET)
	*/
	public function welcome(){

		return "</b>Strukt Works!<b>";
	}

	/**
	* @Route(/hello/world)
	* @Method(GET)
	*/
	public function helloWorld(){

		return self::htmlfile("index.html");
	}

	/**
	* @Route(/hello/{name:alpha})
	* @Method(GET)
	*/
	public function helloTo($name){

		return sprintf("<b>Hello %s!</b>", $name);
	}

	/**
	* @Route(/users/all)
	* @Method(GET)
	*/
	public function getAllUsers(){

		return $this->get("au.ctr.User")->getAll();
	}

	/**
	* @Route(/test)
	* @Method(GET)
	*/
	public function testException(){

		throw new \Exception("Whoops!");
	}

}