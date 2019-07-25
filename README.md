Strukt Roles
===

## Getting Started

Project `strukt/roles` is a `strukt` module.

### Installation

Install and publish `strukt/roles`:

```sh
composer require strukt/roles
composer exec publish-strukt-do
composer exec config-do
chmod +x console
./console generate:app nameofyourapp
composer exec publish-strukt-roles
chmod +x console #the above command will replace current ./console	
./console generate:loader
```

### Models

You'll now need to generate your models:

```sh
./console generate:models
```

There is a list of console commands for preparing your authentication.

```sh
$ ./console -l

Strukt Console
==============
...
...
Auth
 perm:add           Create Permission
 role:add           Create Role
 role:add:perm      Create Role Permission
 user:add           Create User
 user:dumpcred      Dump credentials in [user.json]
 user:reset         Reset Password
```

### Route

How to use permissions.

```php
namespace Payroll\AuthModule\Router;

use Strukt\Http\Request;

class Permission extends \Strukt\Contract\Router{

	/**
	* @Route(/permission/all)
	* @Permission(perm_add)
	* @Method(POST)
	*/
	public function all(Request $request){...
```

### Finally

Your generated `Payroll\User` model must `implement Strukt\Contract\UserInterface`.

You are now good and ready to go!

Have a good one!
