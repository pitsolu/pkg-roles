<?php

namespace __APP__\AuthModule\Router;

use Strukt\Http\Request;
use Strukt\Http\RedirectResponse;

class Auth extends \Strukt\Contract\Router{

	/**
	* @Route(/login)
	* @Method(POST)
	*/
	public function login(Request $request){

		$username = $request->get("username");
		$password = $request->get("password");

		$userForm = $this->get("au.frm.User", [$request]);
		$messages = $userForm->validate();

		if($messages["is_valid"]){

		    if($this->get("au.ctr.User")->doAuth($username, $password)){

		    	$request->getSession()->set("username", $username);

		        return self::json(array(

		            "success"=>true, 
		            "message"=>"User successfully authenticated."
		        ));
		    }

	        return self::json(array(

	            "success"=>false,
	            "message"=>"Failed to authenticate user!"
	        ));
		}

	    return self::json(array(

	        "success"=>false,
	        "message"=>"Invalid input!"
	    ));
	}

	/**
	* @Route(/current/user)
	* @Method(POST)
	*/
	public function isLoggedIn(Request $request){

		$user = $request->getUser();

		return self::json(array(

			"username"=>$user->getUsername(),
			"token"=>$token,
			"user"=>$user->toArray()
		));
	}

	/**
	* @Route(/logout)
	* @Method(GET)
	*/
	public function logout(Request $request){

		$request->getSession()->invalidate();

		return new RedirectResponse("/");
	}
}