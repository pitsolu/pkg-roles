Strukt Roles
===

## Getting Started

Project `strukt/roles` is a `strukt` module.

### Prerequisite

You will require to install `strukt/strukt` via [strukt-strukt](https://github.com/pitsolu/strukt-strukt). Then install module `strukt/do` via [strukt-do](https://github.com/pitsolu/strukt-do)

### Installation

Install and publish `strukt/roles`:

```sh
composer require strukt/roles
```

### Create your app

First you'll need to create your app

```sh
./console generate:app payroll
```

Which will create your app folder with your `app/src/Payroll/AuthModule` and load your `app-name` into the `cfg/app.ini` file.

### Publish your package

```sh
composer exec publish-strukt-roles
```

The command above will replace your earlier generated `app/src/Payroll/AuthModule` and store the backup will be at `app/src/Payroll/AuthModule~` folder. You'll now need to load your modules, run command:

```sh
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
