<?php

namespace Strukt\Package;

use Strukt\Contract\Package as Pkg;

class PkgRoles implements Pkg{

	private $manifest;

	public function __construct(){

		$this->manifest = array(

			"package"=>"pkg-roles",
			"files"=>array(

				"database/schema/Schema/Migration/VersionRoles.php",
				"app/src/App/AuthModule/Router/Index.sgf",
				"app/src/App/AuthModule/Router/User.sgf",
				"app/src/App/AuthModule/Router/Auth.sgf",
				"app/src/App/AuthModule/Router/Role.sgf",
				"app/src/App/AuthModule/Router/Permission.sgf",
				"app/src/App/AuthModule/Form/User.sgf",
				"app/src/App/AuthModule/Form/Role.sgf",
				"app/src/App/AuthModule/Form/Permission.sgf",
				"app/src/App/AuthModule/Controller/User.sgf",
				"app/src/App/AuthModule/Controller/Role.sgf",
				"app/src/App/AuthModule/Controller/Permission.sgf",
				"app/src/App/AuthModule/_AuthModule.sgf",
				"app/src/App/AuthModule/Command/RoleAddPermission.sgf",
				"app/src/App/AuthModule/Command/RoleAdd.sgf",
				"app/src/App/AuthModule/Command/PermissionAdd.sgf",
				"app/src/App/AuthModule/Command/UserDumpCredentials.sgf",
				"app/src/App/AuthModule/Command/UserResetPassword.sgf",
				"app/src/App/AuthModule/Command/UserAdd.sgf",
				"app/src/App/AuthModule/Tests/UserTest.sgf"
			),
			"modules"=>array(

				"AuthModule"
			)
		);
	}

	public function getName(){

		return $this->manifest["package"];
	}

	public function getFiles(){

		return $this->manifest["files"];
	}

	public function getModules(){

		return $this->manifest["modules"];
	}

	public function isInstalled(){

		return class_exists(\Schema\Migration\VersionRoles::class);
	}
}