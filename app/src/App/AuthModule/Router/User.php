<?php

namespace __APP__\AuthModule\Router;

class User extends \Strukt\Contract\Router{

	/**
	* @Route(/user/all)
	* @Method(POST)
	*/
	public function all(Request $request){

		$filter = [];

		$start_at = $request->get("start_at");
		$page_size = $request->get("page_size");

		$username = $request->get("username");
		if(!empty($username))
			$filter["username"] = $username;

		$pager = $this->get("au.ctr.User")->pager($filter, $start_at, $page_size);

		return self::json($pager);
	}
}